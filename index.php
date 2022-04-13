<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatibe" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama wilayah di daerah DKI-Jakarta dan Jawa Barat</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-primary fixed-top">
            <a class="navbar-brand" href="index.php" style="color: #fff;">
                <span style="margin-left: 20px;">i.211735-Jihan Fachrani</span>
            </a>
        </nav>
 
        <div class="container mb-5">
            <br>
            <h2  style="margin: 50px 10px 10px 10px;">Form Pilih wilayah</h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <select class="form-control" name="provinsi" id="provinsi">
                            <!-- <option value="">Pilih Provinsi</option> -->
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <select class="form-control" name="kabupaten" id="kabupaten">
                            <option value="">Pilih Kabupaten / Kota</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar bg-dark fixed-bottom">
            <div style="color: #fff;">© <?php echo date('Y'); ?>
                <a href="https://github.com/jihanfachrani">jihanfachrani</a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="my.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                type: 'POST',
                url: "provinsi.php",
                cache: false, 
                success: function(msg){
                    $("#provinsi").html(msg);
                }
            });
    
            $("#provinsi").change(function(){
                var provinsi = $("#provinsi").val();
                    $.ajax({
                        type: 'POST',
                        url: "kabkota.php",
                        data: {provinsi: provinsi},
                        cache: false,
                        success: function(msg){
                            $("#kabupaten").html(msg);
                        }
                    });
            });
        });
    </script>
</body>

</html>