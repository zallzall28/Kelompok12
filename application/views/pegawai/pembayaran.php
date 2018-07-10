<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

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
        <h1 class="text-center">Halaman Pembayaran</h1>
            <div class="row">
                <div class="col-sm-12">
                    <legend>Nama Pasien:</legend
                </div>
                <!-- panel preview -->
                <div class="col-sm-5">
                    <h4>Total Pembayaran Pasien:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body form-horizontal payment-form">
                    <?php echo form_open_multipart('transaksi/bayarKamar/'.$this->uri->segment(3));?>
                        <?php foreach ($total as $key){ ?>
                            
                            <div class="form-group">
                                <label for="id_pasien" class="col-sm-3 control-label">Nama Pasien </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?php echo $key->fk_pasien?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="col-sm-3 control-label">Jumlah Pembayaran</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="total" name="total" value="<?php echo $key->jumlah?>">
                                </div>
                            </div> 
                        </div>
                </div> <!-- / panel preview -->
                        <?php } ?>
                </div>
                
                <div class="col-sm-6">
                    <h4>Pembayaran Non Tunai:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body form-horizontal payment-form">

                            <div class="form-group">
                                <label for="id_pasien" class="col-sm-3 control-label">Id Pasien</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?php echo $key->fk_pasien?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="col-sm-3 control-label">Jumlah Pembayaran</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="jumlah" name="jumlah">
                                </div>
                            </div> 
                        </div>
                </div> <!-- / panel preview -->
                    <div class="row">
                        <div class="col-xs-12">
                            <hr style="border:1px dashed #dddddd;">
                            <button type="submit" class="btn btn-primary btn-block">Pembayaran Non Tunai</button>
                            <?php echo form_close(); ?>

                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>