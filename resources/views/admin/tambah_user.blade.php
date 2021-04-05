@extends('layout.template_admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-users"></i> Kelola Users</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kelola user</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="row">
        <div class="col-sm-5">
            <form action="{{ route('tambah.user.proses') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambahkan User</h3>
                    </div>
                    <div class="card-body">
                        <input type="file" name="foto" id="">
                        <input type="text" name="nama" id="name" class="form-control form-control-sm mt-2 mb-2" placeholder="Masukkan Nama">
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <select name="jenis_kelamin" id="" class="form-control form-control-sm mb-2">
                            <option value="">Jenis Kelamin</option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <input type="text" name="tempat_lahir" id="" class="form-control form-control-sm mb-2" placeholder="Masukkkan Tempat Lahir">
                        <input type="date" name="tanggal_lahir" id="" class="form-control form-control-sm mb-2">
                        <input type="text" name="alamat" id="" class="form-control form-control-sm mb-2" placeholder="Masukkan Alamat">
                        <input type="text" name="no_telp" id="" class="form-control form-control-sm mb-2" placeholder="No Telp">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-block btn-success"><i class="fas fa-save"></i> Daftarkan</button>
                    </div>
                </div>
            </form>
        </div>
        <!--  -->
        <div class="col-sm-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data User</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="mytable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Tempat/Tanggal lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tbl_user as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td>
                                    <img src="/assets/foto/{{$user->foto}}" alt="{{ $user->foto }}" width="100%" srcset="">
                                </td> --}}
                                <td>
                                    <a href="/assets/foto/{{$user->foto}}" target="_blank"><i class="fas fa-search"></i></a>
                                </td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->tempat_lahir.'/'.$user->tanggal_lahir }}</td>
                                <td>{{ $user->jenis_kelamin }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-block btn-info"><i class="fas fa-search"></i></a>
                                    <form action="{{ route('hapus.user',$user->id_user) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-sm btn-block btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>

</section>

@endsection('content')