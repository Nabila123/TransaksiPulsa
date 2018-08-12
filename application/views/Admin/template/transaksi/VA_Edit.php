
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/image/apple-icon.png') ?>" />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/image/favicon.png') ?>" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Profile Siswa - SMK Nuswantoro.</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url('assets/css/material-dashboard.css?v=1.2.0') ?>" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/css/demo.css') ?>" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
</head>
<body>
<div class="wrapper">
    <?php $this->load->view('Admin/common/header'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title"><b>Data Transaksi</b></h4>                           
                        </div>
                        <div class="card-content">  
                            <form action="<?php echo base_url();?>index.php/C_Transaksi/edit_aksi" method="post"> 
                            <?php  
                              foreach ($transaksi as $t) {
                            ?>    
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group label-floating"> 
                                          <label class="control-label">ID Transaksi</label>
                                          <input type="text" name="id" value="<?php echo $t->id;?>" readonly>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group label-floating"> 
                                          <label class="control-label">NO Telephone</label>
                                          <input type="text" value="<?php echo $t->no_hp;?>" name="no_hp">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group label-floating"> 
                                          <label class="label">Nama Pelanggan </label><br>
                                          <select class="icons" name="nama_user">
                                              <option value="<?php echo $t->nama_user;?>" selected=""> <?php echo $t->nama_user;?>  </option>
                                              <?php foreach($user as $row) { ?>
                                                  <option value="<?php echo $row->fname;?>"><?php echo $row->fname;?></option>
                                              <?php } ?>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group label-floating"> 
                                          <label class="label">Harga </label><br>
                                          <select class="icons" name="harga">
                                              <option value="<?php echo $t->harga;?>" selected=""> <?php echo $t->harga;?>  </option>
                                              <option value="10.000" > 10.000  </option>
                                              <option value="15.000" > 15.000  </option>
                                              <option value="50.000" > 50.000  </option>
                                              <option value="100.000" >100.000  </option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group label-floating"> 
                                          <label class="control-label">Tanggal Transaksi</label>
                                          <input type="date" name="tgl" value="<?php echo $t->tgl;?>">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group label-floating"> 
                                          <label class="label">Status </label><br>
                                          <select class="icons" name="status">
                                              <option value="<?php echo $t->status;?>" selected=""> <?php echo $t->status;?>  </option>
                                              <option value="Lunas" > Lunas  </option>
                                              <option value="Utang" > Utang  </option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary pull-right">Add Transaksi</button>
                              <div class="clearfix"></div>
                          <?php } ?>
                          </form>    
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <?php $this->load->view('Admin/common/footer'); ?>
</div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/material.min.js') ?>" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url('assets/js/chartist.min.js') ?>"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url('assets/js/arrive.min.js') ?>"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url('assets/js/perfect-scrollbar.jquery.min.js') ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets/js/bootstrap-notify.js') ?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url('assets/js/material-dashboard.js?v=1.2.0') ?>"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('assets/js/demo.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });

      // Or with jQuery

    $(document).ready(function(){
        $('select').formSelect();
    });

</script>
</html>