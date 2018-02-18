<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('template/css'); ?>
  </head>
  <body class="login-bg">
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <!-- Logo -->
                <div class="logo">
                   <h1 style="color: white;">SIGN-IN PAGE</h1>
                </div>
             </div>
          </div>
       </div>
  </div>

  <div class="page-content container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="login-wrapper">
              <div class="box">
                  <div class="content-wrap">
                      <h6>Sign In</h6>
                      <form action="<?php echo base_url('admin/login'); ?>" method="post">
                        <input class="form-control" type="text" placeholder="Username" name="username" required="true">
                      <input class="form-control" type="password" placeholder="Password" name="password" required="true">
                      <div class="action">
                          <button class="btn btn-primary signup" type="submit">Login</button> 
                      </div>  
                      </form>                
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>   
  </body>
</html>