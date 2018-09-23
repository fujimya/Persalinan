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
                <li class="active">Halaman Tambah Bidan</li>
            </ol>
        </div><!--/.row-->
        <br>
<div class="panel panel-default">
    <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Form Tambah Bidan</h3>
            </div>
            <table width="100%">
                <td width="50%">
                    <?php echo form_open_multipart('Controller_Bidan/simpan'); ?>
            <div class="modal-body form">
                <div class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">  
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Bidan</label>
                            <div class="col-md-9">
                                <input name="nama_bidan" placeholder="Nama Bidan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Telepon</label>
                            <div class="col-md-9">
                                <input name="telp" placeholder="Telepon" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jam Buka</label>
                            <div class="col-md-9">
                                <input name="jam_buka" placeholder="Jam Buka" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Daerah</label>
                            <div class="col-md-9">
                                <input name="daerah" id="daerah" placeholder="Daerah" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">LatLng</label>
                            <div class="col-md-9">
                                <input name="LatLng" id="LatLng" placeholder="Latitude,Longitude" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        


                    </div>
                     <div class="modal-footer">
                    <button type="submit" id="btnSave" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
                
                    </div>
                </div>
            </div>
            <?php echo form_close();?>
                </td>
                <td width="50%">
                    <table width="90%" border="5">
                    <td>
                    <div id="map" style="width:100%;height:440px;"></div>
                    </td>
                    </table>
                    <script>
                    function myMap() {
                      var mapCanvas = document.getElementById("map");
                      var myCenter=new google.maps.LatLng(-5.380199,105.257342);
                      var mapOptions = {center: myCenter, zoom: 13};
                      var map = new google.maps.Map(mapCanvas, mapOptions);

                      var geocoder = new google.maps.Geocoder();

                      google.maps.event.addListener(map, 'click', function(event) {
                        //placeMarker(map, event.latLng);
                        document.getElementById("LatLng").value = event.latLng.lat()+", "+event.latLng.lng();
                        geocoder.geocode({
                            'latLng': event.latLng
                          }, function(results, status) {
                            if (status == google.maps.GeocoderStatus.OK) {
                              if (results[0]) {
                                //alert(results[0].address_components[1].short_name);
                                document.getElementById("daerah").value = results[0].address_components[1].short_name;
                              }

                              // if (results[1]) {
                              //   for (var i = 0; i < results.length; i++) {
                              //       if (results[i].types[1] === "locality") {
                              //           var city = results[i].address_components[0].short_name;
                              //           var state = results[i].address_components[2].short_name;
                              //           alert(city + ", " + state);
                              //       }
                              //       }
                              //   }
                              //   else {console.log("No reverse geocode results.")}
                            }
                          });
                        //document.getElementById("LatLng").value = event.latLng; 
                        //alert("Latitude : "+ event.latLng.lat());
                      });
                    }

                    function placeMarker(map, location) {
                      var marker = new google.maps.Marker({
                        position: location,
                        map: map
                      });
                      var infowindow = new google.maps.InfoWindow({
                        content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
                      });
                      infowindow.open(map,marker);
                    }
                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w&callback=myMap"></script>  
                </td>
            </table>
            
        </div>
                        
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
                                <input name="username" placeholder="User Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_update()" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i> Ubah</button>
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
            responsive: true
        });
    });
    </script>

    <script>
    function angka(evt)
    {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 65)
        return false;
        return true;
    }
    </script>
        
</body>
</html>