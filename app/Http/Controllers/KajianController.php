<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kajian;

class KajianController extends Controller
{
    public function create(){
        return view('admin.form_create_admin');
    }
    public function storekajian(Request $request){
        // dd($request->all());

        $request->validate([
            'val_judul' => 'required',
            'val_pemateri' => 'required',
            'val_tempat' => 'required',
            'val_tanggal' => 'required',
            'val_deskripsi' => 'required',
            'val_foto_kajian' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('val_foto_kajian')){
            $filenameWithExt = $request->file('val_foto_kajian')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_foto_kajian')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('val_foto_kajian')->storeAs('storage/photos/', $fileNameToStore);
        }else{
           //
        }

        Kajian::create([
            'judul_kajian' => $request->val_judul,
            'pemateri' => $request->val_pemateri,
            'lokasi_kajian' => $request->val_tempat,
            'tanggal_postingan' => $request->val_tanggal,
            'deskripsi_kajian' => $request->val_deskripsi,
            'foto_kajian' => $path,
            'file_kajian' => $request->file_kajian,
        ]);

        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->withSuccess("Thanks! data inserted successfully");
    }

    public function deleteKajian($id)
    {
        $Kajian = Kajian::find($id);

        if (!$Kajian) {
            return redirect()->route('admin_dashboard')->withError('Kajian not found');
        }

        // Delete the kajian
        $Kajian->delete();

        return redirect()->route('admin_dashboard')->withSuccess('Kajian deleted successfully');
    }


    

    public function kajian(){
        return view('user.kajian');
        
    }

    public function data_kajian(){

        $dataKajian = Kajian::all(); // Retrieve all kajian data from the database

        return view('admin.data_kajian', compact('dataKajian'));
    }

    


}
