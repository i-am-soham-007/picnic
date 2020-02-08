
<?php
session_start();
if(isset($_SESSION['id']))
{

}else{
         $msg ="Login";
        header("location:login.php?msg=$msg"); 
}
?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <title>Header Search - Admin</title>
    <link href="css/datatables.min.css" rel="stylesheet">
    <link href="assets/jqvmapf899.css?100" rel="stylesheet">
    <link href="css/flag-icon.minf899.css?100" rel="stylesheet">
    <!-- Fullcalendar-->
    <link href="css/fullcalendar.min.css" rel="stylesheet">
    <!-- Materialize-->
    <link href="assets/admin-materialize.minf899.css?100" rel="stylesheet">
    <!-- Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style id="shopify-dynamic-checkout-cart">@media screen and (min-width: 750px) {
  #dynamic-checkout-cart {
    min-height: 50px;
  }
}

@media screen and (max-width: 750px) {
  #dynamic-checkout-cart {
    min-height: 240px;
  }
}
</style><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
  <link rel="canonical" href="admin-header-search.html">
</head>
  <body class="has-fixed-sidenav">
   <?php  include 'sidebar.php'; ?>
    <main>
      <nav class="navbar nav-extended no-padding">
        <div class="nav-wrapper nav-wrapper-with-search">
          <div class="search-wrapper">
            <form>
              <div class="input-field">
                <input id="search" type="search" placeholder="Enter Search Term" required>
                <label for="search" class="label-icon"><i class="material-icons">search</i></label><i class="material-icons">close</i>
              </div>
            </form>
          </div><a href="#" data-target="sidenav-left" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right">
            <li class="hide-on-med-and-down"><a href="">Buy Now!</a></li>
            <li class="hide-on-med-and-down"><a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect"><i class="material-icons">notifications</i></a></li>
            <li><a href="#!" data-target="chat-dropdown" class="dropdown-trigger waves-effect"><i class="material-icons">settings</i></a></li>
          </ul><a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
        </div>
      </nav>