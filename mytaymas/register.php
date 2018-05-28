<!DOCTYPE html>
<html>
  <head>
    <title>Taymas 2016 -- Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif|Merriweather|Merriweather+Sans:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body id="register">
     <section class="container">
       <div class="content row">
          <?php include "_/components/php/header.php";  ?>
          <section class="main col col-lg-8">   
            <?php include "_/components/php/article-register.php";  ?>
          </section><!-- main -->
          <section class="slidebar col col-lg-4">
            <?php include "_/components/php/aside-lastyear.php"; ?>
            <?php include "_/components/php/aside-accordion.php"; ?>
          </section><!-- sidebar -->
       </div><!-- content -->
     </section><!-- container -->
     <?php include "_/components/php/footer.php";  ?>
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>
