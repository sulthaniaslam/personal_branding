@extends('layout.template')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-user"></i> Biodata</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Biodata</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-sm-12">
            <!-- Default box -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-cogs"></i> Setting Biodata</div>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="card-body">
                        <input type="text" name="nama" id="" class="form-control form-control-sm mb-2" placeholder="Masukkan Nama" value="{{ $tbl_user->nama }}">
                        <select name="jenis_kelamin" id="" class="form-control form-control-sm mb-2">
                            <option value="{{ $tbl_user->jenis_kelamin }}">{{ $tbl_user->jenis_kelamin }}</option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <input type="text" name="tempat_lahir" id="" class="form-control form-control-sm mb-2" placeholder="Masukkan Tempat Lahir" value="{{ $tbl_user->tempat_lahir }}">
                        <input type="date" name="tanggal_lahir" id="" class="form-control form-control-sm mb-2" value="{{ $tbl_user->tanggal_lahir }}">
                        <input type="text" name="alamat" id="" class="form-control form-control-sm mb-2" placeholder="Alamat" value="{{ $tbl_user->alamat }}">
                        <input type="text" name="no_telp" id="" class="form-control form-control-sm mb-2" placeholder="No telp" value="{{ $tbl_user->no_telp }}">

                        <!-- bagian pendidikan -->
                        <div class="row">
                            <div class="col-sm-6">
                                <?php
                                $pendidikan = explode('|', $tbl_user->pendidikan);
                                foreach ($pendidikan as $key => $pdd) {
                                ?>
                                    <input type="text" name="pendidikan[]" id="" class="form-control form-control-sm mb-2" placeholder="Pendidikan" value="<?= $pdd; ?>">
                                <?php
                                }
                                ?>
                            </div>
                            <div class="col-sm-2">
                                <?php
                                $tahun_mulai_pdd = explode('|', $tbl_user->tahun_mulai_pdd);
                                foreach ($tahun_mulai_pdd as $key => $tahun_m_pdd) {
                                ?>
                                    <select name="tahun_mulai_pdd[]" id="" class="form-control form-control-sm mb-2">
                                        <option value="<?= $tahun_m_pdd; ?>"><?= $tahun_m_pdd; ?></option>
                                        <?php
                                        for ($i = 1900; $i <= date('Y'); $i++) {
                                        ?>
                                            <option value="<?= $i; ?>"><?= $i; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="col-sm-2">
                                <?php
                                $tahun_selesai_pdd = explode('|', $tbl_user->tahun_selesai_pdd);
                                foreach ($tahun_selesai_pdd as $tahun_s_pdd) {
                                ?>
                                    <select name="tahun_selesai_pdd[]" id="" class="form-control form-control-sm mb-2">
                                        <option value="<?= $tahun_s_pdd; ?>"><?= $tahun_s_pdd; ?></option>
                                        <?php
                                        for ($i = 1900; $i <= date('Y'); $i++) {
                                        ?>
                                            <option value="<?= $i; ?>"><?= $i; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-sm btn-success" style="float: right;" id="btn-pendidikan"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="row pendidikan"></div>
                        <hr>
                        <!-- end bagian pendidikan -->

                        <!-- bagian organisasi -->
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" name="organisasi[]" id="" class="form-control form-control-sm mb-2" placeholder="Organisasi">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="jabatan_org[]" id="" class="form-control form-control-sm mb-2" placeholder="Jabatan">
                            </div>
                            <div class="col-sm-2">
                                <select name="tahun_mulai_org[]" id="" class="form-control form-control-sm">
                                    <option value="">Tahun Selesai</option>
                                    <?php
                                    for ($i = 1900; $i <= date('Y'); $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="tahun_selesai_org[]" id="" class="form-control form-control-sm">
                                    <option value="">Tahun Selesai</option>
                                    <?php
                                    for ($i = 1900; $i <= date('Y'); $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-sm btn-success" style="float: right;" id="btn-organisasi"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="row organisasi"></div>
                        <hr>
                        <!-- end bagian organisasi -->

                        <!-- bagian pengalaman -->
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" name="pengalaman[]" id="" class="form-control form-control-sm mb-2" placeholder="Pengalaman">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="jabatan_pgl[]" id="" class="form-control form-control-sm mb-2" placeholder="Jabatan">
                            </div>
                            <div class="col-sm-2">
                                <select name="tahun_mulai_pgl[]" id="" class="form-control form-control-sm">
                                    <option value="">Tahun Mulai</option>
                                    <?php
                                    for ($i = 1900; $i <= date('Y'); $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="tahun_selesai_pgl[]" id="" class="form-control form-control-sm">
                                    <option value="">Tahun Selesai</option>
                                    <?php
                                    for ($i = 1900; $i <= date('Y'); $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-sm btn-success" style="float: right;" id="btn-pengalaman"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="row pengalaman"></div>
                        <hr>
                        <!-- end bagian pengalaman -->
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i> Ubah Data</button>
                    </div>
                </form>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>

</section>

<!-- jQuery -->
<script src="{{ url('assets') }}/plugins/jquery/jquery.min.js"></script>

<script>
    $(document).ready(function() {

        $('#btn-pendidikan').click(function(e) {
            e.preventDefault();
            $('.pendidikan').append(`<div class="col-sm-6">
                                <input type="text" name="pendidikan[]" id="" class="form-control form-control-sm mb-2" placeholder="Pendidikan">
                            </div>
                            <div class="col-sm-2">
                                <select name="tahun_mulai_pdd[]" id="" class="form-control form-control-sm">
                                    <option value="">Tahun Mulai</option>
                                    <?php
                                    for ($i = 1900; $i <= date('Y'); $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="tahun_selesai_pdd[]" id="" class="form-control form-control-sm">
                                    <option value="">Tahun Selesai</option>
                                    <?php
                                    for ($i = 1900; $i <= date('Y'); $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-sm btn-danger" style="float: right;" id="btn-pendidikan-remove"><i class="fas fa-minus"></i></button>
                            </div>`);
        });

        $('#btn-organisasi').click(function(e) {
            e.preventDefault();
            $('.organisasi').append(`<div class="col-sm-4">
                                <input type="text" name="organisasi[]" id="" class="form-control form-control-sm mb-2" placeholder="Organisasi">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="jabatan_org[]" id="" class="form-control form-control-sm mb-2" placeholder="Jabatan">
                            </div>
                            <div class="col-sm-2">
                                <select name="tahun_mulai_org[]" id="" class="form-control form-control-sm">
                                    <option value="">Tahun Selesai</option>
                                    <?php
                                    for ($i = 1900; $i <= date('Y'); $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="tahun_selesai_org[]" id="" class="form-control form-control-sm">
                                    <option value="">Tahun Selesai</option>
                                    <?php
                                    for ($i = 1900; $i <= date('Y'); $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-sm btn-danger" style="float: right;" id="btn-organisasi-remove"><i class="fas fa-minus"></i></button>
                            </div>`);
        });

        $('#btn-pengalaman').click(function(e) {
            e.preventDefault();
            $('.pengalaman').append(`<div class="col-sm-4">
                                <input type="text" name="pengalaman[]" id="" class="form-control form-control-sm mb-2" placeholder="Pengalaman">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="jabatan_pgl[]" id="" class="form-control form-control-sm mb-2" placeholder="Jabatan">
                            </div>
                            <div class="col-sm-2">
                                <select name="tahun_mulai_pgl[]" id="" class="form-control form-control-sm">
                                    <option value="">Tahun Mulai</option>
                                    <?php
                                    for ($i = 1900; $i <= date('Y'); $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="tahun_selesai_pgl[]" id="" class="form-control form-control-sm">
                                    <option value="">Tahun Selesai</option>
                                    <?php
                                    for ($i = 1900; $i <= date('Y'); $i++) {
                                    ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-sm btn-danger" style="float: right;" id="btn-pengalaman-remove"><i class="fas fa-minus"></i></button>
                            </div>`);
        });

    });
</script>

@endsection('content')