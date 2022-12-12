<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

<title>
    <?php 
    $segment1 = $this->uri->segment(1);
    $segment2 = $this->uri->segment(2);
    if (isset($segment1, $segment2)){
        $segment1 = ucfirst($segment1);
        $segment2 = ucfirst($segment2);
    }
    echo SITE_NAME ." : ". $segment1 ." - ". $segment2 ?>
</title>

<!-- Bootstrap core CSS-->
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/dist/summernote.css'?>">

<link href="<?php echo base_url();?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
