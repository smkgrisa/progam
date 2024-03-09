<div class="right_col" role="main mb-3">
    <div class="">
        <div class="row" style="display: block;">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo $judul;  ?></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row ">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary float-right" data-bs-toggle="Modal" data-bs-target="data">
                                    Launch demo modal
                                </button>
                                <!-- <a href="" class="btn btn-primary">Tambah Data</a> -->
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Jurusan</th>
                                    <th>Nama Jurusan</th>
                                    <th>Singkatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($jurusan as $jrsn) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $jrsn['kode_jurusan'];  ?></td>
                                        <td><?= $jrsn['nama_jurusan'];  ?></td>
                                        <td><?= $jrsn['singkatan'];  ?></td>
                                        <td>
                                            <a href="" type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                            <a href="" type="button" class="btn btn-danger btn-sm">Hapus</button></a>
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

<!-- Modal -->
<div class="modal fade" id="data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->