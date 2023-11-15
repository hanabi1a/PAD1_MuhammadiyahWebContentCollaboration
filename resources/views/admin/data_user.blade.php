@extends('admin.layout')

@section('content')
<main> <div class="container-fluid px-4"> <h1 class="mt-5">Manajemen User</h1>
    <ol class="breadcrumb mt-2">
    <li class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="data_user" class="active_title"> Data User</a></li>
    </ol>

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>
                            <img src="assets\img\kajian1.jpg" alt="Profile Image" width="150">
                        </td>
                        <td>492345</td>
                        <td>Aisa Selvira</td>
                        <td class="text-center">
                            <form action="" method="post">
                                <a href="user/kajian" class="text-info me-2" title="View"><i
                                        class="fa fa-eye fa-lg"></i></a>
                                @csrf
                                @method('delete')
                                <a href="user/kajian" class="text-info" title="Delete"
                                    onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash fa-lg"></i></a>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </main>
    @endsection