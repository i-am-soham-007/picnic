
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <title>ADMIN-lOGIN </title>
    <link href="css/datatables.min.css" rel="stylesheet">
    <link href="assets/jqvmapf899.css?100" rel="stylesheet">
    <link href="css/flag-icon.minf899.css?100" rel="stylesheet">
    <!-- Fullcalendar-->
    <link href="css/fullcalendar.min.css" rel="stylesheet">
    <!-- Materialize-->
    <link href="assets/admin-materialize.minf899.css?100" rel="stylesheet">
    <!-- Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style type="text/css">
  body{
        background-repeat: no-repeat;
        background-position: center;
        background-size: initial;
  }
 

</style>
</head>
  <body style="background-image: url('picture/bg3.jpg');">

 <div class="container">
  <div class="row">
    <div class="col s8 offset-s2">

      <div class="card card-login">
        <div class="card-login-splash">
          <div class="wrapper">
            <h3>Admin</h3>
 
          </div>

          <img src="assets/geometric-cavef899.jpg?100" alt="">
        </div>
        <div class="card-content">
          <span class="card-title">Log In</span>
          <form action="logincotroller.php" method="post">
            <div class="input-field">
              <input id="username" type="text" class="validate" name="username">
              <span><?php echo $_GET['msg']; ?></span>
              <label for="username">Username</label>
            </div>
            <div class="input-field">
              <input id="password" type="password" class="validate" name="password">
               <span><?php echo $_GET['msg']; ?></span>
              <label for="password">Password</label>
            </div>

            <a href="#!">Forgot Password?</a>

            <br><br>
            <div>
              <input class="btn right" type="submit" name ="login" value="Log In">
             
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>

</div>
 <script src="js/jquery.min.js"></script>
<script src="js/moment.min.js"></script>

<!-- External libraries -->

<!-- jqvmap -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script type="text/javascript" src="assets/jquery.vmap.minf899.js?100"></script>
<script type="text/javascript" src="assets/jquery.vmap.worldf899.js?100" charset="utf-8"></script>
<script type="text/javascript" src="assets/jquery.vmap.sampledataf899.js?100"></script>

<!-- ChartJS -->

<script type="text/javascript" src="assets/Chartf899.js?100"></script>
<script type="text/javascript" src="assets/Chart.Financialf899.js?100"></script>


<script src="js/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>
<script src="assets/imagesloaded.pkgd.minf899.js?100"></script>
<script src="assets/masonry.pkgd.minf899.js?100"></script>


<!-- Initialization script -->
<script src="assets/admin-materialize.minf899.js?100"></script>
  </body>

</html>
