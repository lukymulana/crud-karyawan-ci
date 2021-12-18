<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>List Unit Kerja</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/jquery.dataTables.css' ?>">
</head>

<body>
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data
                <small>Unit Kerja</small>
                <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Unit Kerja</a></div>
            </h1>
        </div>
        <div class="row">
            <div id="reload">
                <table class="table table-striped" id="mydata">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Unit</th>
                            <th style="text-align: right;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="show_data">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- MODAL ADD -->
    <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title" id="myModalLabel">Tambah Unit Kerja</h3>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama Unit Kerja</label>
                            <div class="col-xs-9">
                                <input name="nabar" id="nama_unit" class="form-control" type="text" placeholder="Nama Unit Kerja" style="width:335px;" required>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info" id="btn_simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--END MODAL ADD-->

    <!-- MODAL EDIT -->
    <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title" id="myModalLabel">Edit Unit Kerja</h3>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama Unit Kerja</label>
                            <div class="col-xs-9">
                                <input name="id_unit_edit" id="id_unit2" class="form-control" type="hidden" placeholder="ID Unit" style="width:335px;" readonly>
                                <input name="nama_unit_edit" id="nama_unit2" class="form-control" type="text" placeholder="Nama Unit Kerja" style="width:335px;" required>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info" id="btn_update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--END MODAL EDIT-->

    <!--MODAL HAPUS-->
    <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Unit Kerja</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">

                        <input type="hidden" name="id_unit" id="textid" value="">
                        <div class="alert alert-warning">
                            <p>Apakah Anda yakin mau menghapus?</p>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--END MODAL HAPUS-->

    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.min.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            tampil_data_unit_kerja(); //pemanggilan fungsi tampil unit kerja.

            $('#mydata').dataTable();

            //fungsi tampil unit kerja
            function tampil_data_unit_kerja() {
                $.ajax({
                    type: 'GET',
                    url: '<?php echo base_url() ?>index.php/unit_kerja/data_unit_kerja',
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].id_unit + '</td>' +
                                '<td>' + data[i].nama_unit + '</td>' +
                                '<td style="text-align:right;">' +
                                '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="' + data[i].id_unit + '">Edit</a>' + ' ' +
                                '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="' + data[i].id_unit + '">Hapus</a>' +
                                '</td>' +
                                '</tr>';
                        }
                        $('#show_data').html(html);
                    }

                });
            }

            //GET UPDATE
            $('#show_data').on('click', '.item_edit', function() {
                var id_unit = $(this).attr('data');
                $.ajax({
                    type: "GET",
                    url: "<?php echo base_url('index.php/unit_kerja/get_unit_kerja') ?>",
                    dataType: "JSON",
                    data: {
                        id_unit: id_unit
                    },
                    success: function(data) {
                        $.each(data, function(id_unit, nama_unit) {
                            $('#ModalaEdit').modal('show');
                            $('[name="id_unit_edit"]').val(data.id_unit);
                            $('[name="nama_unit_edit"]').val(data.nama_unit);
                        });
                    }
                });
                return false;
            });


            //GET HAPUS
            $('#show_data').on('click', '.item_hapus', function() {
                var id_unit = $(this).attr('data');
                $('#ModalHapus').modal('show');
                $('[name="id_unit"]').val(id_unit);
            });

            //Simpan Unit Kerja
            $('#btn_simpan').on('click', function() {
                // var kobar = $('#kode_barang').val();
                var nama_unit = $('#nama_unit').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('index.php/unit_kerja/simpan_unit_kerja') ?>",
                    dataType: "JSON",
                    data: {
                        // kobar: kobar,
                        nama_unit: nama_unit,
                    },
                    success: function(data) {
                        // $('[name="kobar"]').val("");
                        $('[name="nama_unit"]').val("");
                        $('#ModalaAdd').modal('hide');
                        tampil_data_unit_kerja();
                    }
                });
                return false;
            });

            //Update Unit Kerja
            $('#btn_update').on('click', function() {
                var id_unit = $('#id_unit2').val();
                var nama_unit = $('#nama_unit2').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('index.php/unit_kerja/update_unit_kerja') ?>",
                    dataType: "JSON",
                    data: {
                        id_unit: id_unit,
                        nama_unit: nama_unit,
                    },
                    success: function(data) {
                        $('[name="id_unit_edit"]').val("");
                        $('[name="nama_unit_edit"]').val("");
                        $('#ModalaEdit').modal('hide');
                        tampil_data_unit_kerja();
                    }
                });
                return false;
            });

            //Hapus Unit Kerja
            $('#btn_hapus').on('click', function() {
                var id_unit = $('#textid').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('index.php/unit_kerja/hapus_unit_kerja') ?>",
                    dataType: "JSON",
                    data: {
                        id_unit: id_unit
                    },
                    success: function(data) {
                        $('#ModalHapus').modal('hide');
                        tampil_data_unit_kerja();
                    }
                });
                return false;
            });

        });
    </script>
</body>

</html>