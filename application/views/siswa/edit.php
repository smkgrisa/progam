<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Data Siswa</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                <div class="input-group">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Diri</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Orang Tua</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Prestasi Dan Beasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="regpd-tab" data-toggle="tab" href="#regpd" role="tab" aria-controls="regpd" aria-selected="false">Registrasi PD Masuk</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="regpdout-tab" data-toggle="tab" href="#regpdout" role="tab" aria-controls="regpdout" aria-selected="false">Registrasi PD Keluar</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="col-md-12 ">
                                                <div class="x_panel">

                                                    <div class="x_content">
                                                        <br>
                                                        <form action="" method="post">
                                                            <form class="form-horizontal form-label-left">
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Nama Lengkap</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="namalengkap" value="<?= @$datadirisiswa['namalengkap'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Nama Panggilan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="namapanggilan" value="<?= @$datadirisiswa['namapanggilan'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Jenis Kelamin</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="jk" value="<?= @$datadirisiswa['jk'] ?>">
                                                                            <option></option>
                                                                            <option>Laki Laki</option>
                                                                            <option>Perempuan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">No KK</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="nokk" value="<?= @$datadirisiswa['nokk'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">NIK</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="nik" value="<?= @$datadirisiswa['nik'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tempat Lahir</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tempatlahir" value="<?= @$datadirisiswa['tempatlahir'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tanggal Lahir</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="date" class="form-control" name="tanggallahir" value="<?= @$datadirisiswa['tanggallahir'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Agama</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="agama" value="<?= @$datadirisiswa['agama'] ?>">
                                                                            <option></option>
                                                                            <option>Islam</option>
                                                                            <option>Hindu</option>
                                                                            <option>Budha</option>
                                                                            <option>Kristen</option>
                                                                            <option>Khatolik</option>
                                                                            <option>Konghucu</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">No Akte Kelahiran</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="akte" value="<?= @$datadirisiswa['akte'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Anak Keberapa Berdasarkan KK</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="anakkeberapa" value="<?= @$datadirisiswa['anakkeberapa'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Jumlah Saudara Kandung</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="saudarakandung" value="<?= @$datadirisiswa['saudarakandung'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Alamat Jalan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="alamat" value="<?= @$datadirisiswa['alamat'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Dusun</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="dusun" value="<?= @$datadirisiswa['dusun'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Rt/Rw</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="rtrw" value="<?= @$datadirisiswa['rtrw'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Desa</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="desa" value="<?= @$datadirisiswa['desa'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Kecamatan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="kecamatan" value="<?= @$datadirisiswa['kecamatan'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Kabupaten</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="kabupaten" value="<?= @$datadirisiswa['kabupaten'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Provinsi</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="provinsi" value="<?= @$datadirisiswa['provinsi'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Kewarganegaraan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="kewarganegaraan" value="<?= @$datadirisiswa['kewarganegaraan'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tempat Tinggal</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="tempattinggal" value="<?= @$datadirisiswa['tempattinggal'] ?>">
                                                                            <option></option>
                                                                            <option>Bersama Orang Tua</option>
                                                                            <option>Wali</option>
                                                                            <option>Kos</option>
                                                                            <option>Asrama</option>
                                                                            <option>Pondok Pesantren</option>
                                                                            <option>Panti Asuhan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Moda Transportasi</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="moda" value="<?= @$datadirisiswa['moda'] ?>">
                                                                            <option></option>
                                                                            <option>Jalan Kaki</option>
                                                                            <option>Kendaraan Pribadi</option>
                                                                            <option>Kendaraan Umum</option>
                                                                            <option>Jemputan Sekolah</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Jarak Tempat Tinggal Ke Sekolah</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="jarak" value="<?= @$datadirisiswa['jarak'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tinggi Badan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tinggibadan" value="<?= @$datadirisiswa['tinggibadan'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Berat Badan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="beratbadan" value="<?= @$datadirisiswa['beratbadan'] ?>">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="col-md-12 ">
                                                <div class="x_panel">
                                                    <div class="x_content">
                                                        <br>
                                                        <form action="" method="post">
                                                            <form class="form-horizontal form-label-left">
                                                                <h2><b>Data Ayah Kandung</b></h2>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Nama Ayah</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="ayah" value="<?= @$orangtua['ayah'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">NIK</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="nikayah" value="<?= @$orangtua['nikayah'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun Lahir </label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunlahirayah" value="<?= @$orangtua['tahunlahirayah'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Pendidikan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="pendidikanayah" value="<?= @$orangtua['pendidikanayah'] ?>">
                                                                            <option></option>
                                                                            <option>Tidak Sekolah</option>
                                                                            <option>Putus Sd</option>
                                                                            <option>SD Sederajat</option>
                                                                            <option>SMP Sederajat</option>
                                                                            <option>SMA Sederajat</option>
                                                                            <option>D1</option>
                                                                            <option>D2</option>
                                                                            <option>D3</option>
                                                                            <option>D4/S1</option>
                                                                            <option>S2</option>
                                                                            <option>S3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Pekerjaan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="pekerjaanayah" value="<?= @$orangtua['pekerjaanayah'] ?>">
                                                                            <option></option>
                                                                            <option>Tidak Bekerja</option>
                                                                            <option>Petani</option>
                                                                            <option>Nelayan</option>
                                                                            <option>Peternak</option>
                                                                            <option>TNI</option>
                                                                            <option>Polisi</option>
                                                                            <option>Karyawan Swasta</option>
                                                                            <option>Pedagang Kecil</option>
                                                                            <option>Pedagang Besar</option>
                                                                            <option>Wirausaha</option>
                                                                            <option>Buruh</option>
                                                                            <option>Pensiunan</option>
                                                                            <option>Tenaga Kerja Indonesia</option>
                                                                            <option>Sudah Meninggal</option>
                                                                            <option>Lainya</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Penghasilan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="penghasilanayah" value="<?= @$orangtua['penghasilanayah'] ?>">
                                                                            <option></option>
                                                                            <option>Kurang dari Rp. 500.000</option>
                                                                            <option>Rp. 500.000 - Rp. 999.999</option>
                                                                            <option>Rp. 2000.000 - Rp. 4.999.999</option>
                                                                            <option>Rp. 5.000.000 - Rp. 20.000.000</option>
                                                                            <option>Tidak Berpenghasilan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Berkebutuhan Khusus</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="kebutuhankhususayah" value="<?= @$orangtua['kebutuhankhususayah'] ?>">
                                                                            <option></option>
                                                                            <option>Tidak</option>
                                                                            <option>Netra</option>
                                                                            <option>Rungu</option>
                                                                            <option>Grahita Ringan</option>
                                                                            <option>Grahita Sedang</option>
                                                                            <option>Daksa Ringan</option>
                                                                            <option>Daksa Sedang</option>
                                                                            <option>Laras</option>
                                                                            <option>Wicara</option>
                                                                            <option>Tuna Ganda</option>
                                                                            <option>Hiperaktif</option>
                                                                            <option>Cerdas Istimewa</option>
                                                                            <option>Bakat Istimewa</option>
                                                                            <option>Kesulitan Belajar</option>
                                                                            <option>Indigo</option>
                                                                            <option>Down Sindrom</option>
                                                                            <option>Autis</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <h2><b>Data Ibu Kandung</b></h2>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Nama Ibu</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="namaibu" value="<?= @$orangtua['namaibu'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">NIK Ibu</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="nikibu" value="<?= @$orangtua['nikibu'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun Lahir </label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunlahiribu" value="<?= @$orangtua['tahunlahiribu'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Pendidikan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="pendidikanibu" value="<?= @$orangtua['pendidikanibu'] ?>">
                                                                            <option></option>
                                                                            <option>Tidak Sekolah</option>
                                                                            <option>Putus Sd</option>
                                                                            <option>SD Sederajat</option>
                                                                            <option>SMP Sederajat</option>
                                                                            <option>SMA Sederajat</option>
                                                                            <option>D1</option>
                                                                            <option>D2</option>
                                                                            <option>D3</option>
                                                                            <option>D4/S1</option>
                                                                            <option>S2</option>
                                                                            <option>S3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Pekerjaan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="pekerjaanibu" value="<?= @$orangtua['pekerjaanibu'] ?>">
                                                                            <option></option>
                                                                            <option>Tidak Bekerja</option>
                                                                            <option>Petani</option>
                                                                            <option>Nelayan</option>
                                                                            <option>Peternak</option>
                                                                            <option>TNI</option>
                                                                            <option>Polisi</option>
                                                                            <option>Karyawan Swasta</option>
                                                                            <option>Pedagang Kecil</option>
                                                                            <option>Pedagang Besar</option>
                                                                            <option>Wirausaha</option>
                                                                            <option>Buruh</option>
                                                                            <option>Pensiunan</option>
                                                                            <option>Tenaga Kerja Indonesia</option>
                                                                            <option>Sudah Meninggal</option>
                                                                            <option>Lainya</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Penghasilan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="penghasilanibu" value="<?= @$orangtua['penghasilanibu'] ?>">
                                                                            <option></option>
                                                                            <option>Kurang dari Rp. 500.000</option>
                                                                            <option>Rp. 500.000 - Rp. 999.999</option>
                                                                            <option>Rp. 2000.000 - Rp. 4.999.999</option>
                                                                            <option>Rp. 5.000.000 - Rp. 20.000.000</option>
                                                                            <option>Tidak Berpenghasilan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Berkebutuhan Khusus</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="kebutuhankhususibu" value="<?= @$orangtua['kebutuhankhususibu'] ?>">
                                                                            <option></option>
                                                                            <option>Tidak</option>
                                                                            <option>Netra</option>
                                                                            <option>Rungu</option>
                                                                            <option>Grahita Ringan</option>
                                                                            <option>Grahita Sedang</option>
                                                                            <option>Daksa Ringan</option>
                                                                            <option>Daksa Sedang</option>
                                                                            <option>Laras</option>
                                                                            <option>Wicara</option>
                                                                            <option>Tuna Ganda</option>
                                                                            <option>Hiperaktif</option>
                                                                            <option>Cerdas Istimewa</option>
                                                                            <option>Bakat Istimewa</option>
                                                                            <option>Kesulitan Belajar</option>
                                                                            <option>Indigo</option>
                                                                            <option>Down Sindrom</option>
                                                                            <option>Autis</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <h2><b>Data Wali</b></h2>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Nama Wali</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="namawali" value="<?= @$orangtua['namawali'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">NIK Wali</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="nikwali" value="<?= @$orangtua['nikwali'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun Lahir </label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunlahirwali" value="<?= @$orangtua['tahunlahirwali'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Pendidikan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="pendidikanwali" value="<?= @$orangtua['pendidikanwali'] ?>">
                                                                            <option></option>
                                                                            <option>Tidak Sekolah</option>
                                                                            <option>Putus Sd</option>
                                                                            <option>SD Sederajat</option>
                                                                            <option>SMP Sederajat</option>
                                                                            <option>SMA Sederajat</option>
                                                                            <option>D1</option>
                                                                            <option>D2</option>
                                                                            <option>D3</option>
                                                                            <option>D4/S1</option>
                                                                            <option>S2</option>
                                                                            <option>S3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Pekerjaan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="pekerjaanwali" value="<?= @$orangtua['pekerjaanwali'] ?>">
                                                                            <option></option>
                                                                            <option>Tidak Bekerja</option>
                                                                            <option>Petani</option>
                                                                            <option>Nelayan</option>
                                                                            <option>Peternak</option>
                                                                            <option>TNI</option>
                                                                            <option>Polisi</option>
                                                                            <option>Karyawan Swasta</option>
                                                                            <option>Pedagang Kecil</option>
                                                                            <option>Pedagang Besar</option>
                                                                            <option>Wirausaha</option>
                                                                            <option>Buruh</option>
                                                                            <option>Pensiunan</option>
                                                                            <option>Tenaga Kerja Indonesia</option>
                                                                            <option>Sudah Meninggal</option>
                                                                            <option>Lainya</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Penghasilan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="penghasilanwali" value="<?= @$orangtua['penghasilanwali'] ?>">
                                                                            <option></option>
                                                                            <option>Kurang dari Rp. 500.000</option>
                                                                            <option>Rp. 500.000 - Rp. 999.999</option>
                                                                            <option>Rp. 2000.000 - Rp. 4.999.999</option>
                                                                            <option>Rp. 5.000.000 - Rp. 20.000.000</option>
                                                                            <option>Tidak Berpenghasilan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="col-md-12 ">
                                                <div class="x_panel">

                                                    <div class="x_content">
                                                        <br>
                                                        <form action="" method="post">
                                                            <form class="form-horizontal form-label-left">
                                                                <h2><b>Prestasi 1</b></h2>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Jenis </label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="jenisprestasi1" value="<?= @$prestasisiswa['jenisprestasi1'] ?>">
                                                                            <option></option>
                                                                            <option>Sains</option>
                                                                            <option>Seni</option>
                                                                            <option>Olahraga</option>
                                                                            <option>LKS</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tingkat </label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="tingkatprestasi1" value="<?= @$prestasisiswa['tingkatprestasi1'] ?>">
                                                                            <option></option>
                                                                            <option>Sekolah</option>
                                                                            <option>Desa</option>
                                                                            <option>Kecamatan</option>
                                                                            <option>Kabupaten</option>
                                                                            <option>Provinsi</option>
                                                                            <option>Nasional</option>
                                                                            <option>Internasional</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Nama Prestasi</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="prestasi1" value="<?= @$prestasisiswa['prestasi1'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunprestasi1" value="<?= @$prestasisiswa['tahunprestasi1'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Penyelenggaran</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="penyelenggara1" value="<?= @$prestasisiswa['penyelenggara1'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Peringkat</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="peringkat1" value="<?= @$prestasisiswa['peringkat1'] ?>">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <h2><b>Prestasi 2</b></h2>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Jenis </label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="jenisprestasi2" value="<?= @$prestasisiswa['jenisprestasi2'] ?>">
                                                                            <option></option>
                                                                            <option>Sains</option>
                                                                            <option>Seni</option>
                                                                            <option>Olahraga</option>
                                                                            <option>LKS</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tingkat </label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="tingkatprestasi2" value="<?= @$prestasisiswa['tingkatprestasi2'] ?>">
                                                                            <option></option>
                                                                            <option>Sekolah</option>
                                                                            <option>Desa</option>
                                                                            <option>Kecamatan</option>
                                                                            <option>Kabupaten</option>
                                                                            <option>Provinsi</option>
                                                                            <option>Nasional</option>
                                                                            <option>Internasional</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Nama Prestasi</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="prestasi2" value="<?= @$prestasisiswa['prestasi2'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunprestasi2" value="<?= @$prestasisiswa['tahunprestasi2'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Penyelenggaran</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="penyelenggara2" value="<?= @$prestasisiswa['penyelenggara2'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Peringkat</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="peringkat2" value="<?= @$prestasisiswa['peringkat2'] ?>">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <h2><b>Prestasi 3</b></h2>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Jenis </label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="jenisprestasi3" value="<?= @$prestasisiswa['jenisprestasi3'] ?>">
                                                                            <option></option>
                                                                            <option>Sains</option>
                                                                            <option>Seni</option>
                                                                            <option>Olahraga</option>
                                                                            <option>LKS</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tingkat </label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="tingkatprestasi3" value="<?= @$prestasisiswa['tingkatprestasi3'] ?>">
                                                                            <option></option>
                                                                            <option>Sekolah</option>
                                                                            <option>Desa</option>
                                                                            <option>Kecamatan</option>
                                                                            <option>Kabupaten</option>
                                                                            <option>Provinsi</option>
                                                                            <option>Nasional</option>
                                                                            <option>Internasional</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Nama Prestasi</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="prestasi3" value="<?= @$prestasisiswa['prestasi3'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunprestasi3" value="<?= @$prestasisiswa['tahunprestasi3'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Penyelenggaran</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="penyelenggara3" value="<?= @$prestasisiswa['penyelenggara3'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Peringkat</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="peringkat3" value="<?= @$prestasisiswa['peringkat3'] ?>">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <h2><b>Beasiswa 1</b></h2>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Jenis Beasiswa</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="jenisbeasiswa1" value="<?= @$prestasisiswa['jenisbeasiswa1'] ?>">
                                                                            <option></option>
                                                                            <option>Anak Berprestasi</option>
                                                                            <option>Anak Kurang Mampu</option>
                                                                            <option>Pendidikan</option>
                                                                            <option>Unggulan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Keterangan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="keteraganbeasiswa1" value="<?= @$prestasisiswa['keteraganbeasiswa1'] ?>">>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun Mulai</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunmulai1" value="<?= @$prestasisiswa['tahunmulai1'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun Selesai</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunselesai1" value="<?= @$prestasisiswa['tahunselesai1'] ?>">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <h2><b>Beasiswa 2</b></h2>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Jenis Beasiswa</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="jenisbeasiswa2" value="<?= @$prestasisiswa['jenisbeasiswa2'] ?>">
                                                                            <option></option>
                                                                            <option>Anak Berprestasi</option>
                                                                            <option>Anak Kurang Mampu</option>
                                                                            <option>Pendidikan</option>
                                                                            <option>Unggulan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Keterangan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="keteraganbeasiswa2" value="<?= @$prestasisiswa['keteraganbeasiswa2'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun Mulai</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunmulai2" value="<?= @$prestasisiswa['tahunmulai2'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun Selesai</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunselesai2" value="<?= @$prestasisiswa['tahunselesai2'] ?>">
                                                                    </div>
                                                                </div>
                                                                <Br>
                                                                <h2><b>Beasiswa 3</b></h2>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Jenis Beasiswa</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <select class="form-control" name="jenisbeasiswa3" value="<?= @$prestasisiswa['jenisbeasiswa3'] ?>">
                                                                            <option></option>
                                                                            <option>Anak Berprestasi</option>
                                                                            <option>Anak Kurang Mampu</option>
                                                                            <option>Pendidikan</option>
                                                                            <option>Unggulan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Keterangan</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="keteraganbeasiswa3" value="<?= @$prestasisiswa['keteraganbeasiswa3'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun Mulai</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunmulai3" value="<?= @$prestasisiswa['tahunmulai3'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row ">
                                                                    <label class="control-label col-md-3 col-sm-3 ">Tahun Selesai</label>
                                                                    <div class="col-md-9 col-sm-9 ">
                                                                        <input type="text" class="form-control" name="tahunselesai3" value="<?= @$prestasisiswa['tahunselesai3'] ?>">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="regpd" role="tabpanel" aria-labelledby="regpd-tab">
                                            <div class="col-md-12 ">
                                                <div class="x_panel">
                                                    <div class="x_content">
                                                        <br>
                                                        <form action="" method="post">
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3 ">Diterima Di Kelas</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="diterima" value="<?= @$regpdmasuk['diterima'] ?>">
                                                                        <option></option>
                                                                        <option>X (Sepuluh) </option>
                                                                        <option>XI (Sebelas)</option>
                                                                        <option>XII (Dua Belas)</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Tgl Diterima DI sekolah</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="date" class="form-control" name="tglmasuk" value="<?= @$regpdmasuk['tglmasuk'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3 ">Jurusan</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="jurusan_">
                                                                        <option></option>
                                                                        <option>Anak Berprestasi</option>
                                                                        <option>Anak Kurang Mampu</option>
                                                                        <option>Pendidikan</option>
                                                                        <option>Unggulan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3 ">Jenis Pendaftaran</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="pendaftaran" value="<?= @$regpdmasuk['pendaftaran'] ?>">
                                                                        <option></option>
                                                                        <option>Siswa Baru</option>
                                                                        <option>Pindahan</option>
                                                                        <option>Kembali Sekolah</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">NISN</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="nisn" value="<?= @$regpdmasuk['nisn'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">NIS</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="nis" value="<?= @$regpdmasuk['nis'] ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Asal Sekolah Mutasi Masuk</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="asalsekolahmutasi" value="<?= @$regpdmasuk['asalsekolahmutasi'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Asal Sekolah SMP/MTs</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="asalsekolahsmp" value="<?= @$regpdmasuk['asalsekolahsmp'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">No Ijazah</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="noijazahsmp" value="<?= @$regpdmasuk['noijazahsmp'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Tgl Ijazah</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="date" class="form-control" name="tglijazahsmp" value="<?= @$regpdmasuk['tglijazahsmp'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3 ">Sekarang Kelas</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="kelassekarang">
                                                                        <option></option>
                                                                        <option>Lulus</option>
                                                                        <option>Mutasi</option>
                                                                        <option>Mengundurkan Diri</option>
                                                                        <option>Wafat</option>
                                                                        <option>Hilang</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="regpdout" role="tabpanel" aria-labelledby="regpdout-tab">
                                            <div class="col-md-12 ">
                                                <div class="x_panel">

                                                    <div class="x_content">
                                                        <br>
                                                        <h2><b>Meninggalkan Sekolah</b></h2>
                                                        <form action="" method="post">
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Tanggal</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="date" class="form-control" name="tglmeninggalkan" value="<?= @$regpdkeluar['tglmeninggalkan'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3 ">Alasan</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <select class="form-control" name="alasan" value="<?= @$regpdkeluar['alasan'] ?>">
                                                                        <option></option>
                                                                        <option>Lulus</option>
                                                                        <option>Mutasi</option>
                                                                        <option>Mengundurkan Diri</option>
                                                                        <option>Wafat</option>
                                                                        <option>Hilang</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <h2><b>Pindah Sekolah</b></h2>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Dari Kelas</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="pindahsekolah" value="<?= @$regpdkeluar['pindahsekolah'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Sekolah Tujuan</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="sekolahtujuan" value="<?= @$regpdkeluar['sekolahtujuan'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Alamat Sekolah Tujuan</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="alamatsekolahtujuan" value="<?= @$regpdkeluar['alamatsekolahtujuan'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">NPSN Sekolah Tujuan</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="npsnsekolahtujuan" value="<?= @$regpdkeluar['npsnsekolahtujuan'] ?>">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <h2><b>Tamat Belajar</b></h2>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Tahun</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="tahuntamat" value="<?= @$regpdkeluar['tahuntamat'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">No seri Ijazah</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="noijazahsmk" value="<?= @$regpdkeluar['noijazahsmk'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Tanggal Ijazah</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="date" class="form-control" name="tglijazahsmk" value="<?= @$regpdkeluar['tglijazahsmk'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Wirausaha</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="wirausaha" value="<?= @$regpdkeluar['wirausaha'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Bekerja Di</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="bekerja" value="<?= @$regpdkeluar['bekerja'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Melanjutkan Ke</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" class="form-control" name="melanjutkan" value="<?= @$regpdkeluar['melanjutkan'] ?>">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- /page content -->


                        </div>
                    </div>
</body>

</html>