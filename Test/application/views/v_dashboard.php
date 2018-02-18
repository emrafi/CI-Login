<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Utama</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php $this->load->view('template/css'); ?>
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1 style="color: white;">Welcome...</h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><?php echo $this->session->userdata('nama');?></li>
	                          <li><a href="<?php echo base_url(); ?>admin/logout">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?php echo base_url(); ?>user"> Dashboard</a></li>
                    <li><a href="<?php echo base_url(); ?>user/show"> User</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-2">
		  			<div class="content-box-header">
						<div class="panel-title">Jumlah User</div>
					</div>
		  				<div class="content-box box-with-header">
		  				<?php $jumlah = $this->db->get('tb_user')->num_rows(); ?>
		  					<h3 align="center"><?php echo $jumlah; ?></h3>
		  				</div>
		  			
		  		</div>
		  	</div>
			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>
				  			</div>
				  			<div class="content-box-large box-with-header">

					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		</div>
    </div>
  <?php $this->load->view('template/js'); ?>
  </body>
</html>
