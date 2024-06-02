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
                            >Tambah Kategori Kajian</a>
                    </div>

                    <table id="datatablesSimple" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($topik_kajian as $topik)
                                <tr>
                                    <td>{{$topik->id}}</td>
                                    <td>{{$topik->nama}}</td>
                                    <td class="text-center">
                                        <form action="{{ route('admin.kategori_kajian.destroy', $topik->id) }}" method="post">
                                            <a href="{{ route('admin.kategori_kajian.edit', $topik->id) }}" class="text-info me-2"
                                                title="View"><i class="fa fa-pencil-alt fa-lg"></i>
                                            </a>
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-lin text-info" title="Delete"
                                                onclick="return confirm('Apakah anda yakin?')">
                                                <i class="fa fa-trash fa-lg"></i>
                                            </button>
                                        </form>
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
