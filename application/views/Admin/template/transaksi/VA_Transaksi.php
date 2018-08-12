
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title"><b>Data Transaksi</b></h4>
                            <a href="<?php echo base_url();?>index.php/C_Transaksi/Tambah"><p align="right"><i title="Tambah Data" style="font-size: 4.5rem; margin-top: -1em" class="large material-icons">add_circle</i></p></a>
                        </div>
                        <div class="card-content">  
                           <table class="table table-bordered table-striped" id="mydata">
                              <thead>
                                    <tr align="center">
                                          <td>No</td>
                                          <td>Id Transaksi</td>
                                          <td>No Hp</td>
                                          <td>Nama Pelanggan</td>
                                          <td>Harga</td>
                                          <td>Tanggal</td>
                                          <td>Status</td>
                                          <td>Action</td>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php 
                                          $no = 1;
                                          foreach($data->result_array() as $i):
                                                $id=$i['id'];
                                                $nama_user=$i['nama_user'];
                                                $no_hp=$i['no_hp'];
                                                $harga=$i['harga'];
                                                $tgl=$i['tgl'];
                                                $status=$i['status'];
                                    ?>
                                    <tr>
                                          <td><?php echo $no++?> </td>
                                          <td><?php echo $id;?> </td>
                                          <td><?php echo $nama_user;?> </td>
                                          <td><?php echo $no_hp;?> </td>
                                          <td><?php echo $harga;?> </td>
                                          <td><?php echo $tgl;?> </td>
                                          <td><?php echo $status;?> </td>

                                          <td>
                                              <?php echo anchor('C_Transaksi/edit/'.$id,'<i title="Update" class="material-icons">edit</i>'); ?>
                                              <?php echo anchor('C_Transaksi/delete/'.$id,'<i title="Delete" class="material-icons">close</i>'); ?> 
                                          </td>
                                          
                                    </tr>
                                    <?php endforeach;?>
                              </tbody>
                        </table>     
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