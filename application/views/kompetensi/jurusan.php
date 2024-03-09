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
                            <div class="col-md-12 mt-3 text-right">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Data</button>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" width='2%'>No</th>
                                    <th class="text-center" width='15%'>Kode Jurusan</th>
                                    <th class="text-center">Nama Jurusan</th>
                                    <th class="text-center" width='15%'>Singkatan</th>
                                    <th class="text-center" width='15%'>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($jurusan as $jrsn) : ?>
                                    <tr>
                                        <td align="center"><?= $no++ ?></td>
                                        <td><?= $jrsn['kode_jurusan'];  ?></td>
                                        <td><?= $jrsn['nama_jurusan'];  ?></td>
                                        <td><?= $jrsn['singkatan'];  ?></td>
                                        <td align="center">
                                            <a href="" class="h4 text-warning" data-toggle="modal" id="editmodal" data-target=".edit-modal-lg" data-id=<?= $jrsn['id_jurusan'] ?> onclick="edit('<?= $jrsn['id_jurusan'] ?>')"><i class="fa fa-pencil-square"></i></a>
                                            <a href="#" class="h4 text-danger" onclick="confirmDelete('<?= base_url();  ?>Jurusan/hapus/<?= $jrsn['id_jurusan']; ?>')"><i class="fa fa-trash"></i></a>
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
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-primary" id="myModalLabel"><b>Tambah Jurusan</b></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url() ?>jurusan/tambah">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="kodejurusan">Kode Jurusan*
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="kodejurusan" required="required" name="kode_jurusan" class="form-control ">
                        </div>
                    </div>
                    <div class=" item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="namajurusan">Nama Jurusan*
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="namajurusan" required="required" name="nama_jurusan" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="singkatan">Singkatan*
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="singkatan" required="required" name="singkatan" class="form-control ">
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-primary" id="myModalLabel"><b>Edit Jurusan</b></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url() ?>jurusan/update">
                    <input type="hidden" id="id_jurusan" name="id_jurusan">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="kodejurusan">Kode Jurusan
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="kode_jurusan" name="kode_jurusan" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="namajurusan">Nama Jurusan
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="nama_jurusan" name="nama_jurusan" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="singkatan">Singkatan
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" id="edit_singkatan" name="edit_singkatan" class="form-control ">
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
    function edit(id_jurusan) {
        $.ajax({
            url: '<?= base_url('jurusan/edit/') ?>' + id_jurusan,
            type: 'POST',
            dataType: 'json',
            data: {
                id_jurusan: id_jurusan
            },
            success: function(json) {
                if (json != undefined) {
                    $('#id_jurusan').val(json.id_jurusan);
                    $('#kode_jurusan').val(json.kode_jurusan);
                    $('#nama_jurusan').val(json.nama_jurusan);
                    $('#edit_singkatan').val(json.singkatan);
                }
            }
        });

    }
</script>