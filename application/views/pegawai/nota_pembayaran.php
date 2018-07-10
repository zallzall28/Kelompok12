<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nota Pembayaran</title>

        <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> 
         <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> 
         <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="col-sm-6">
                    <h4>Nota Pembayaran:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body form-horizontal payment-form">
                    <?php echo form_open_multipart('transaksi/cetakNota');?>
                    
                        <?php foreach ($total as $key){ ?>
                        
                            <div class="form-group">
                                <label for="id_pasien" class="col-sm-3 control-label">Id Pasien</label>
                                <div class="col-sm-9">
                                    <input type="disabled" class="form-control" id="id_pasien" name="id_pasien" readonly value="<?php echo $key->fk_pasien?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="id_pasien" class="col-sm-3 control-label">Nama Pasien</label>
                                <div class="col-sm-9">
                                    <input type="disabled" class="form-control" id="nama" name="nama" readonly value="<?php echo $key->nama_pasien?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jumlah" class="col-sm-3 control-label">Jumlah Pembayaran</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" readonly value="<?php echo $jml?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jumlah" class="col-sm-3 control-label">Sisa Pembayaran</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="sisa" name="sisa" readonly value="<?php echo $key->jumlah?>">
                                </div>
                            </div> 

                           <!--  <div class="form-group">
                                <label for="jumlah" class="col-sm-3 control-label">Jumlah Pembayaran</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="jumlah" name="jumlah">
                                </div>
                            </div> -->
                            <?php } ?>
                        </div>
                </div> <!-- / panel preview -->
                    <div class="row">
                        <div class="col-xs-12">
                            <hr style="border:1px dashed #dddddd;">
                            <button type="submit" class="btn btn-primary btn-block"><i class="glyphicon glyphicon-print"> </i> Cetak Nota Pembayaran</button>
                            <?php echo form_close(); ?>
    </body>
</html>
                 
