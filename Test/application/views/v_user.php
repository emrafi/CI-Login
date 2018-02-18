<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Utama</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('template/css'); ?>
    <?php $this->load->view('template/js'); ?>
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
		<div class="col-md-8">
				<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Data User</div>
					<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_user">Add User</button>
  				<div class="panel-body">
  				<div class="table-responsive">	
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pengguna</th>
								<th>Username</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>	
						<?php
						$no = 1;
						foreach ($user as $key ): ?>

          				<tr>
          					<td><?php echo $key->id_user ?></td>
            				<td><?php echo $key->nama ?></td>
				            <td><?php echo $key->username ?></td>
				            <td>
				              
				       <div class="dropdown">
  						<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Edit <span class="caret"></span></button>
  						  <ul class="dropdown-menu">

						    <li><a onClick="tampil_modal_edit(<?php echo $key->id_user ?>);">Profil</a></li>

						    <!-- <li><a data-toggle="modal" data-target="#edit_password">Password</a></li> -->
						  </ul>
						  <a href="<?php echo base_url();?>user/delete/<?php echo $key->id_user?>"><button class="btn btn-danger">Delete</button></a>
						</div>
				   
				            </td>

				        </tr>
				        <?php
				        $no++;
				         endforeach; ?>
						</tbody>
					</table>
					</div>
  				</div>
  				</div>
  			</div>
		</div>

		<!-- modal -->
	<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="">Form Add User</h4>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url();?>user/create" method="post">
              <input type="hidden" name="id_user" value="<?php echo $key->id_user?>">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama" required="required">
                </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" required="required">
                  </div>
                
                  <div class="form-group">
                <label for="">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" required="required" id="input" name="password">
                  <span class="input-group-addon" id="tombol" onClick="tampil();"><i class="fa fa-eye"></i></span>
                </div>
             	</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
  <!-- modal edit profil -->
  		<div class="modal fade" id="edit_profil" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="">Form Edit Profil</h4>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url('user/simpan_edit_user');?>" method="post">
              <input type="hidden" name="id_user" id="id_user">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama">
                </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                  </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" >Update</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
    </div>
  </body>
</html>


  <script type="text/javascript">
function tampil(){
	var x = document.getElementById("input");
   		

  	  		if (x.type == "password"){
  	  			x.type = "text";

  	  		}else{
  	  			x.type = "password";
  	  		}
}

function tampil_modal_edit(id_user){
	$.ajax({
    type: 'get',
    url : '<?php echo base_url('user/edit_user?id_user=')?>'+id_user,
   
    success: function (hasil){
     $response = $(hasil);
     //ambil data dari url user/edit_user berdasarkan id
       var id_user = $response.filter('#id_user').text();
       var nama = $response.filter('#nama').text();
       var username = $response.filter('#username').text();
    
       //menampilkan ke modal
       $('#id_user').val(id_user);
       $('#nama').val(nama);
       $('#username').val(username);
       $('#edit_profil').modal('show');
    }
  });
}


  </script>