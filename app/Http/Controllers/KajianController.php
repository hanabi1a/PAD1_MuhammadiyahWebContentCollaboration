<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kajian;

class KajianController extends Controller
{
    public function create()
    {
        return view('admin.form_create_admin');
    }
    // public function storekajian(Request $request){
    //     // dd($request->all());

    //     $request->validate([
    //         'val_judul' => 'required',
    //         'val_pemateri' => 'required',
    //         'val_tempat' => 'required',
    //         'val_tanggal' => 'required',
    //         'val_deskripsi' => 'required',
    //         'val_foto_kajian' => 'image|nullable|max:1999',
    //         'val_dokumen' => 'required|mimes:pdf,doc,docx|max:2048'
    //     ]);

    //     if($request->hasFile('val_foto_kajian')){
    //         $filenameWithExt = $request->file('val_foto_kajian')->getClientOriginalName();
    //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //         $extension = $request->file('val_foto_kajian')->getClientOriginalExtension();
    //         $fileNameToStore = $filename.'_'.time().'.'.$extension;
    //         $path = $request->file('val_foto_kajian')->storeAs('storage/photos/', $fileNameToStore);
    //     }else{
    //        //
    //     }

    //     Kajian::create([
    //         'judul_kajian' => $request->val_judul,
    //         'pemateri' => $request->val_pemateri,
    //         'lokasi_kajian' => $request->val_tempat,
    //         'tanggal_postingan' => $request->val_tanggal,
    //         'deskripsi_kajian' => $request->val_deskripsi,
    //         'foto_kajian' => $path,
    //         'file_kajian' => $request->file_kajian,
    //     ]);

    //     $request->session()->regenerate();
    //     return redirect()->route('data_kajian')
    //     ->withSuccess("Thanks! data inserted successfully");
    // }
    public function storekajian(Request $request)
    {
        $request->validate([
            'val_judul' => 'required',
            'val_pemateri' => 'required',
            'val_tempat' => 'required',
            'val_tanggal' => 'required',
            'val_deskripsi' => 'required',
            'val_foto_kajian' => 'image|nullable|max:1999',
            'val_dokumen' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);

        $pathFoto = null;
        if ($request->hasFile('val_foto_kajian')) {
            $filenameWithExt = $request->file('val_foto_kajian')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_foto_kajian')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $pathFoto = $request->file('val_foto_kajian')->storeAs('storage/photos/', $fileNameToStore);
        }

        $pathDokumen = null;
        if ($request->hasFile('val_dokumen')) {
            $filenameWithExt = $request->file('val_dokumen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_dokumen')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $pathDokumen = $request->file('val_dokumen')->storeAs('storage/documents/', $fileNameToStore);
        }

        Kajian::create([
            'judul_kajian' => $request->val_judul,
            'pemateri' => $request->val_pemateri,
            'lokasi_kajian' => $request->val_tempat,
            'tanggal_postingan' => $request->val_tanggal,
            'deskripsi_kajian' => $request->val_deskripsi,
            'foto_kajian' => $pathFoto,
            'file_kajian' => $pathDokumen,
        ]);

        $request->session()->regenerate();
        return redirect()->route('data_kajian')
            ->withSuccess("Terima kasih! Data berhasil disimpan");
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




    public function kajian($id)
    {

        $kajian = Kajian::find($id); // Contoh pengambilan data dari model Kajian

        return view('admin.detail_kajian_ori', ['kajian' => $kajian]);

    }

    public function data_kajian()
    {

        $dataKajian = Kajian::all(); // Retrieve all kajian data from the database

        return view('admin.data_kajian', compact('dataKajian'));
    }

    public function edit_kajian($id)
    {

        $kajian = Kajian::find($id); // Contoh pengambilan data dari model Kajian

        return view('admin.form_edit_admin_ori', ['kajian' => $kajian]);

    }

    public function update_kajian(Request $request, $id)
    {
        $request->validate([
            'val_judul' => 'required',
            'val_pemateri' => 'required',
            'val_tempat' => 'required',
            'val_tanggal' => 'required',
            'val_deskripsi' => 'required',
            'val_foto_kajian' => 'image|nullable|max:1999',
            'val_dokumen' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);

        $kajian = Kajian::find($id);

        if ($request->hasFile('val_foto_kajian')) {
            // Lakukan proses update foto jika ada perubahan
            $filenameWithExt = $request->file('val_foto_kajian')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_foto_kajian')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $pathFoto = $request->file('val_foto_kajian')->storeAs('storage/photos/', $fileNameToStore);

            // Hapus foto lama jika diperlukan
            // Storage::delete($kajian->foto_kajian); // Pastikan path foto sudah benar di model

            $kajian->foto_kajian = $pathFoto;
        }

        if ($request->hasFile('val_dokumen')) {
            // Lakukan proses update dokumen jika ada perubahan
            $filenameWithExt = $request->file('val_dokumen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('val_dokumen')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $pathDokumen = $request->file('val_dokumen')->storeAs('storage/documents/', $fileNameToStore);

            // Hapus dokumen lama jika diperlukan
            // Storage::delete($kajian->file_kajian); // Pastikan path dokumen sudah benar di model

            $kajian->file_kajian = $pathDokumen;
        }

        $kajian->judul_kajian = $request->val_judul;
        $kajian->pemateri = $request->val_pemateri;
        $kajian->lokasi_kajian = $request->val_tempat;
        $kajian->tanggal_postingan = $request->val_tanggal;
        $kajian->deskripsi_kajian = $request->val_deskripsi;

        $kajian->save();

        return redirect()->route('data_kajian')->withSuccess("Data berhasil diperbarui");
    }


}