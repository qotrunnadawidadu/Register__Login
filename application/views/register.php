<!DOCTYPE html>
<html lang="">
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Qotrunnada</title>

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
               <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
               <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
     </head>
     <body>

     <header id="site-header">
          <nav class="navbar navbar-default" role="navigation">
               <div class="container-fluid">
                    <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                         </button>
                         <a class="navbar-brand" href="<?= base_url() ?>">Qotrunnada</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         <ul class="nav navbar-nav navbar-right">
                              <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
                                   <li><a href="<?= base_url('logout') ?>">Logout</a></li>
                              <?php else : ?>
                                  
                                   <li><a href="<?= site_url('/login') ?>">Login</a></li>
                              <?php endif; ?>
                         </ul>
                    </div><!-- .navbar-collapse -->
               </div><!-- .container-fluid -->
          </nav><!-- .navbar -->
     </header><!-- #site-header -->
          <div class="container">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <?php echo form_open('register') ?>
                                        <div class="form-group">
                                             <legend>Register</legend>
                                        </div>

                                        <?php echo validation_errors(); ?>
                                        <div class="form-group">
                                             <label for="">Nama</label>
                                             <input type="text" class="form-control" id="name" name="name" placeholder="Input field" >
                                        </div>

                                        <div class="form-group">
                                             <label for="">Username</label>
                                             <input type="username" class="form-control" id="username" name="username" placeholder="Input field" >
                                        </div>

                                        <div class="form-group">
                                             <label for="">Email</label>
                                             <input type="email" class="form-control" id="email" name="email" placeholder="Input field" >
                                        </div>

                                        <div class="form-group">
                                             <label for="">Password</label>
                                             <input type="password" class="form-control" id="password" name="password" placeholder="Input field" >
                                        </div>

                                        <div class="form-group">
                                             <label for="">Password Confirm</label>
                                             <input type="password" class="form-control" id="password_conf" name="password_conf" placeholder="Input field" >
                                        </div>
                                        <div class="form-group">
                                                  <button type="submit" class="btn btn-primary">Daftar</button>
                                        </div>
                                        <?php echo form_close();?>
 
                                  <!-- <p>
                                   Jika ingin Kembali ke halaman login, Silakan klik <?php echo anchor(site_url().'/login','di sini..'); ?>
                                   </p> -->
                              </form>        
               </div>    
          </div>
          <!-- jQuery -->
          <script src="//code.jquery.com/jquery.js"></script>
          <!-- Bootstrap JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src="Hello World"></script>
     </body>
</html>