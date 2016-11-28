<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <marquee><title> SMK Diponegoro Depok Yogyakarta </title></marquee>
    <!-- Core CSS - Include with every page -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/stylee.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    
</head>

<body class="body-Login-back">

    <div class="container">
       <div class="col-lg-12" align="center">
       <a href="#"><img src="assets/img/LOGO.png" style="width:200px; height:auto" class="img-responsive"> </a>
            </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
            <h4><p> Sistem Informasi Akademik SMK Diponegoro Depok Yogyakarta</p></h4>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan masuk</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="validasi-login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"	name="password" placeholder="password" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a class="btn btn-primary pull-right" href="index.php">Batal</a>
                                <input type="submit" class="btn btn-danger pull-right" name="submit" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
