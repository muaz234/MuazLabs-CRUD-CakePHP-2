<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="index.html">Notebook</a>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>Sign in</strong>
        </header>
        <?php echo $this->Form->create('User', array('type' => 'post', 'url' => array('controller' => 'users', 'action' => 'login' ))); ?>
        <!-- <form action="index.html" class="panel-body wrapper-lg"> -->
          <div class="form-group">
            <label class="control-label">Email</label>
            <?php echo $this->Form->input('email',  array('class' => 'form-control', 'placeholder' => 'Enter your email', 'label' => false)) ?>
            <!-- <input type="email" placeholder="test@example.com" class="form-control input-lg"> -->
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <?php echo $this->Form->input('password',  array('class' => 'form-control', 'type' => 'password' , 'placeholder' => 'Enter your password' , 'label' => false)) ?>

            <!-- <input type="password" id="inputPassword" placeholder="Password" class="form-control input-lg"> -->
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Keep me logged in
            </label>
          </div>
          <!-- <a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a> -->
            <?php echo $this->Form->button('Sign In', array('class' => 'btn btn-lg btn-primary btn-block')); ?>
          <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
          <div class="line line-dashed"></div>
          <!-- <a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a> -->
          <!-- <a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a> -->
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <?php echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'add' )) ?>
          <!-- <a href="signup.html" class="btn btn-default btn-block">Create an account</a> -->
          <?php  echo $this->Form->end();  ?>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <!-- <small>Web app framework base on Bootstrap<br>&copy; 2013</small> -->
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
  
</body>
</html>