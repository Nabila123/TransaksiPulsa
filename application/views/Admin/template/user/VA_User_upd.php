
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
    <?php $this->load->view('Guru/common/header'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title"><b>Penilaian Ulangan</b></h4>
                            <p class="category"></p>
                        </div>
                        <div class="card-content">  
                        <?php 
                            foreach ($ulangan as $u) {
                        ?>                      
                            <form action="<?php echo base_url();?>C_Ulangan/edit_data" method="post">     
                                <input type="hidden" name="id" value="<?php echo $u->id; ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating"> 
                                            <label class="label">NIS </label><br>
                                            <select class="icons" name="kd_ulangan">
                                                <option value="<?php echo $u->kd_ulangan; ?>" selected=""> <?php echo $u->kd_ulangan; ?> </option>
                                                <option value="" "> ------------------------------------ </option>
                                                <?php foreach($siswa as $row) { ?>
                                                    <option value="<?php echo $row->nis;?>"><?php echo $row->nama;?></option>
                                                <?php } ?> 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating"> 
                                            <label class="label">Mata Pelajaran </label><br>
                                            <select class="icons" name="nm_ulangan">
                                                <option value="<?php echo $u->nm_ulangan; ?>" selected=""> <?php echo $u->nm_ulangan; ?>  </option>
                                                <option value="" "> ------------------------------------ </option>
                                                 <?php foreach($mapel as $row) { ?>
                                                    <option value="<?php echo $row->kd_mapel;?>"><?php echo $row->nm_mapel;?></option>
                                                <?php } ?> 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nilai Ulangan</label>
                                            <input type="text" class="form-control" name="nilai_ulangan" value="<?php echo $u->nilai_ulangan; ?>">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Add Nilai</button>
                                <div class="clearfix"></div>
                            </form>  
                        <?php 
                            }
                        ?>                          
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <?php $this->load->view('Guru/common/footer'); ?>
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