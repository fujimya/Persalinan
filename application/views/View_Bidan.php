<?php $user = $this->session->userdata('user'); ?>
<!DOCTYPE html>
<html>
<body>  
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Halaman Bidan</li>
            </ol>
        </div><!--/.row-->
         <!-- <div class="alert bg-info" role="alert" id="berhasil"><em class="fa fa-lg fa-check">&nbsp;</em>Data berhasil disimpan <a onclick="$('.alert').hide()" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div> -->
         <div style="text-align: center; text-decoration: underline;"><h2>Halaman Data Bidan</h2> </div>
<div class="panel panel-default">
    <br>
                        <div class="panel-heading">                            
                            <a class="mx-sm-3 btn btn-primary btn-lg" href="<?php echo base_url();?>de69812784f3efj04aljbxkhi97bb952"> <i class="fa fa-plus fa-fw"></i> Tambah Bidan </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="tabel_user">
                                <thead>
                                    <tr>
                                        <th class="center" style="text-align: center;">No</th>
                                        <th class="center">Nama Bidan</th>
                                        <th class="center">Telpon</th>
                                        <th class="center">Jam Buka</th>
                                        <th class="center">Wilayah</th>
                                        <th class="center">LatLon</th>
                                        <!-- <th class="center"></th> -->
                                        <th class="center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=1;
                                        foreach ($bidan as $bdn) {
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no; ?></td>
                                        <td><?php cetak($bdn->nama_bidan); ?></td>
                                        <td><?php cetak($bdn->telp); ?></td>
                                        <td><?php cetak($bdn->jam_buka); ?></td>
                                        <td><?php cetak($bdn->daerah); ?></td>
                                        <td><?php cetak($bdn->latlon); ?></td>
                                       <!--  <td style="text-align: center;">
                                         <a href="<?php echo base_url()?>Controller_Dept/tampilUbah/<?php cetak("") ?>" class="btn btn-primary" > <i class="fa fa-edit fa-fw"></i> Edit</a> 
                                         </td> -->
                                         <td style="text-align: center;">
                                             <a onclick="return confirm('Apakah anda ingin menghapus data ini secara permanen?')" href="<?php echo base_url()?>Controller_Bidan/hapus/<?php cetak($bdn->id_bidan) ?>" class="btn btn-danger" onclick=""> <i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                         </td>
                                    </tr>
                                    <?php $no++; }?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>      
        

        
    </div>  <!--/.main-->
    
    
    <!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Pengaturan akun</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" name="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">User Name</label>
                            <div class="col-md-9">
                                <input maxlength="20" name="username" placeholder="User Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input maxlength="10" name="password" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSaveubah" onclick="save_update()" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i> Ubah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
    
    <script src="<?php echo base_url();?>assets/template/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/js/chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/js/chart-data.js"></script>
    <script src="<?php echo base_url();?>assets/template/js/easypiechart.js"></script>
    <script src="<?php echo base_url();?>assets/template/js/easypiechart-data.js"></script>
    <script src="<?php echo base_url();?>assets/template/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url();?>assets/template/js/custom.js"></script>
    
    <script src="<?php echo base_url();?>assets/script/User-Setting.js"></script>
    <script src="<?php echo base_url();?>assets/script/User-manage.js"></script>
    
     
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/template/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/datatables-responsive/dataTables.responsive.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#tabel_user').DataTable({
            responsive: true,
            "language": {
            "zeroRecords": "Data tidak ada",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "Data tidak ada",
            "sSearch" : "Pencarian:",
            "oPaginate": {
             "sNext": 'Selanjutnya',
             "sLast": 'Terakhir',
             "sFirst": 'Pertama',
             "sPrevious": 'Sebelumnya'
            },
             "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
             "sLengthMenu": 'Tampilkan _MENU_ Data'
        }
        });
    });
    </script>

    
        
</body>
</html>