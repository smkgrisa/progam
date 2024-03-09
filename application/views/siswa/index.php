<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row" style="display: block;">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Siswa</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>

                        <div class="clearfix"></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal">
                                Tambah Siswa
                            </button>

                        </div>
                    </div>
                    <div class="x_content">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tgl Lahir</th>
                                    <th>Rombel</th>
                                    <th>Nisn</th>
                                    <th>NIS</th>
                                    <th>NIK</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($siswa as $sswa) : ?>
                                    <tr>
                                        <td align="center"><?= $no++ ?></td>
                                        <td><?= $sswa['namalengkap'];  ?></td>
                                        <td><?= $sswa['tanggallahir'];  ?></td>
                                        <td><?= $sswa['nama_kelas'];  ?></td>
                                        <td><?= $sswa['nisn'];  ?></td>
                                        <td><?= $sswa['nis'];  ?></td>
                                        <td><?= $sswa['nik'];  ?></td>
                                        <td>
                                            <a href=" <?= base_url('siswa/edit/' . $sswa['id'])  ?>" type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                            <a href="#" class="h4 text-danger" onclick="confirmDelete('<?= base_url();  ?>Siswa/hapus/<?= $sswa['id']; ?>')"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url() ?>siswa/tambah">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="namalengkap">Nama Lengkap*
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="namalengkap" required="required" name="namalengkap" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tanggallahir">Tgl Lahir*
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="date" id="tanggallahir" required="required" name="tanggallahir" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="id_kelas">Rombel*
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <select name="id_kelas" id="id_kelas" class="form-control">
                                <option value="">--Pilih--</option>
                                <?php foreach ($kelas as $value) : ?>
                                    <option value="<?= $value['id_kelas']; ?>"><?= $value['nama_kelas']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nisn">NISN*
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="nisn" required="required" name="nisn" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nis">NIS*
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="nis" required="required" name="nis" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nik">NIK*
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="nik" required="required" name="nik" class="form-control ">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>