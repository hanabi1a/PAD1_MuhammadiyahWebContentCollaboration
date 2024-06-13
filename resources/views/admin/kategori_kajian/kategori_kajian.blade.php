@extends('layouts.layout_admin')

@section('content')
    <main>
        <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
            <h1 class="mt-2">Kategori Kajian</h1>
            <ol class="breadcrumb mt-2">
                <li class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="data_user"
                        class="active_title"> Kategori Kajian</a></li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-body">

                    <div class="mb-3">
                        <a 
                            href="{{ route('admin.kategori_kajian.create')}}" 
                            class="btn btn-primary"
                        >
                            <i class="fa fa-plus"></i> Tambah Kategori Kajian
                        </a>
                    </div>

                    <table id="datatablesSimple" class="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($topik_kajian as $topik)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$topik->nama}}</td>
                                    <td class="text-center">
                                        <div class="row">
                                            <a href="{{ route('admin.kategori_kajian.edit', $topik->id) }}" 
                                                class="col text-info me-2 d-flex justify-content-center align-items-center"
                                                title="View"><i class="col fa fa-pencil-alt fa-lg"></i>
                                            </a>
    
                                            <form action="{{ route('admin.kategori_kajian.destroy', $topik->id) }}" 
                                                method="post"
                                                class="col">
                                                
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-lin text-info" title="Delete"
                                                    onclick="return confirm('Apakah anda yakin?')">
                                                    <i class="fa fa-trash fa-lg text-danger"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>
@endsection
