<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kajian;
use App\Models\PersonalizeTopikKajian;
use App\Models\TopikKajian; 
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $kajianTerkini = Kajian::orderBy('created_at', 'desc')->paginate(6); 
        $selectedCategories = collect();
        $recommendedKajian = collect();
        $userId = Auth::id();
        
        if (Auth::check()) {
            $selectedCategories = PersonalizeTopikKajian::where('user_id', $userId)
                ->join('topik_kajian', 'personalize_topik_kajian.topik_kajian_id', '=', 'topik_kajian.id')
                ->select('topik_kajian.*')
                ->get();
            
            $selectedCategoryIds = $selectedCategories->pluck('id')->toArray();

            $recommendedKajian = Kajian::whereHas('topikKajians', function ($query) use ($selectedCategoryIds) {
                $query->whereIn('topik_kajian.id', $selectedCategoryIds);
            })->paginate(6);
        }

        $kajianList = Kajian::paginate(6);
        $kategoriKajian = TopikKajian::all(); 

        return view('home.homepage', compact('kajianList', 'selectedCategories', 'recommendedKajian', 'kategoriKajian', 'kajianTerkini'));
    }

    public function updateRecommendations(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'action' => 'required|in:add,remove',
        ]);

        $categoryName = $request->input('category');
        $action = $request->input('action');
        $userId = Auth::id();

        $category = TopikKajian::where('nama', $categoryName)->first();

        if ($category) {
            if ($action == 'remove') {
                PersonalizeTopikKajian::where('user_id', $userId)
                    ->where('topik_kajian_id', $category->id)
                    ->delete();
            } elseif ($action == 'add') {
                PersonalizeTopikKajian::firstOrCreate([
                    'user_id' => $userId,
                    'topik_kajian_id' => $category->id,
                ]);
            }
        }

        $selectedCategories = PersonalizeTopikKajian::where('user_id', $userId)
            ->join('topik_kajian', 'personalize_topik_kajian.topik_kajian_id', '=', 'topik_kajian.id')
            ->select('topik_kajian.*')
            ->get();
        
        $selectedCategoryIds = $selectedCategories->pluck('id')->toArray();

        $recommendedKajian = Kajian::whereHas('topikKajians', function ($query) use ($selectedCategoryIds) {
            $query->whereIn('topik_kajian.id', $selectedCategoryIds);
        })->get();

        return response()->json(['recommendedKajian' => $recommendedKajian]);
    }

}
