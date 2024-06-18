<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kajian;
use App\Models\PersonalizeTopikKajian;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $kajian = Kajian::paginate(6);
        $selectedCategories = [];
        $recommendedKajian = collect();

        if (Auth::check()) {
            $userId = Auth::id();

            $selectedCategories = PersonalizeTopikKajian::where('user_id', $userId)
                                ->join('topik_kajian', 'personalize_topik_kajian.topik_kajian_id', '=', 'topik_kajian.id')
                                ->select('topik_kajian.*')
                                ->get();

            $selectedCategoryIds = $selectedCategories->pluck('id')->toArray();

            $recommendedKajian = Kajian::whereHas('topikKajians', function ($query) use ($selectedCategoryIds) {
                $query->whereIn('topik_kajian.id', $selectedCategoryIds);
            })->paginate(6);
        }

        return view('home.homepage', compact('kajian', 'selectedCategories', 'recommendedKajian'));
    }
}
