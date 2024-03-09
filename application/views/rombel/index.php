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
                        <h2>Rombongan Belajar</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 mt-3 text-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahModal">
                                Tambah Data
                            </button>
                        </div>
                    </div>
                    <div class="x_content">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" width='2%'>No</th>
                                    <th class="text-center" width='45%'>Nama Kelas</th>
                                    <th class="text-center" width='30%'>Wali Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rombel as $rbl) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $rbl['nama_kelas']; ?> </td>
                                        <td><?= $rbl['nama_walikelas']; ?> </td>
                                        <td>
                                            <a href="" class="h4 text-warning" data-toggle="modal" id="editmodal" data-target=".edit-modal-lg" data-id=<?= $rbl['id_kelas'] ?> onclick="edit('<?= $rbl['id_kelas'] ?>')"><i class="fa fa-pencil-square"></i></a>
                                            <a href="#" class="h4 text-danger" onclick="confirmDelete('<?= base_url();  ?>Rombel/hapus/<?= $rbl['id_kelas']; ?>')"><i class="fa fa-trash"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url() ?>rombel/tambah">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="kodejurusan">Nama Kelas
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="kodejurusan" name="nama_kelas" required class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="namajurusan">Wali Kelas
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="namajurusan" name="nama_walikelas" required class="form-control ">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal edit -->
<div class="modal fade edit-modal-lg" id="editmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url() ?>rombel/update">
                    <input type="hidden" id="id_kelas" name="id_kelas">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="kodejurusan">Nama Kelas
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="nama_kelas" name="nama_kelas" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="namajurusan">Wali Kelas
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="nama_walikelas" name="nama_walikelas" class="form-control ">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script type="text/javascript">
    function edit(id_kelas) {
        $.ajax({
            url: '<?= base_url('rombel/edit/') ?>' + id_kelas,
            type: 'POST',
            dataType: 'json',
            data: {
                id_kelas: id_kelas
            },
            success: function(json) {
                if (json != undefined) {
                    $('#id_kelas').val(json.id_kelas);
                    $('#nama_kelas').val(json.nama_kelas);
                    $('#nama_walikelas').val(json.nama_walikelas);

                }
            }
        });

    }
</script>