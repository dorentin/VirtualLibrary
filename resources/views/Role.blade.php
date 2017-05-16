<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

  <title>Role</title>

  <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
  <!-- Bootstrap CSS -->

  <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
<link rel='stylesheet' href='assets/css/material.css'>
<link rel='stylesheet' href='assets/css/style.css'>
<link rel='stylesheet' href='assets/css/animated-masonry-gallery.css'>
<link rel='stylesheet' href='assets/css/rotated-gallery.css'>
<link rel='stylesheet' href='assets/css/sweet-alerts/sweetalert.css'>
<link rel='stylesheet' href='assets/css/jtree.css'>
  <script src='assets/js/jquery.js'></script>
<script src='assets/js/app.js'></script>
  <script>
    jQuery(window).load(function () {
      $('.piluku-preloader').addClass('hidden');
    });
  </script>
</head>
<body>
  <div class="piluku-preloader text-center">
  <!-- <div class="progress">
      <div class="indeterminate"></div>
  </div> -->
  <div class="loader">Loading...</div>
</div>
<div class="wrapper ">

  
<div class="left-bar ">
	<div class="admin-logo">
		<div class="logo-holder pull-left">
			<img class="logo" src="assets/images/example.png" alt="logo">	
		</div>
		<!-- logo-holder -->			
		<a href="#" class="menu-bar  pull-right"><i class="ti-menu"></i></a>
	</div>
	<!-- admin-logo -->
	<ul class="list-unstyled menu-parent" id="mainMenu">
		<li class='current'>
			<a href="index.html" class="current waves-effect waves-light">
				<i class="icon ti-home"></i>
				<span class="text ">Dashboard</span>
			</a>
		</li>
		<li class="submenu">
			<a class="waves-effect waves-light" href="#layouts">
				<i class="icon ti-layout"></i>
				<span class="text">Autoret</span>
			</a>
		</li>
		<li class="submenu">
			<a class="waves-effect waves-light" href="#piluku_premium">
				<i class="icon ti-gift"></i>
				<span class="text">Librat</span>
			</a>
		</li>
		<li>
			<a href="typography.html">
				<i class="icon ti-smallcap"></i>
				<span class="text">Kategorit</span>
			</a>
		</li>				
		<li class="submenu">
			<a class="waves-effect waves-light" href="#components">
				<i class="icon ti-briefcase"></i>
				<span class="text">Perdorues</span>
			</a>
		</li>
		<li class="submenu">
			<a class="waves-effect waves-light" href="#forms_elements">
				<i class="icon ti-book"></i>
				<span class="text">Rolet</span>
			</a>
		</li>
	</ul>
</div>
<!-- left-bar -->

<div class="content" id="content">
	
	<div class="overlay"></div>			
	
	<div class="top-bar">
	<nav class="navbar navbar-default top-bar">
		<div class="menu-bar-mobile" id="open-left"><i class="ti-menu"></i>
		</div>

		<form class="navbar-left" role="search">
			<div class="search">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right top-elements">
		
			<li class="piluku-dropdown dropdown">
				<!-- @todo Change design here, its bit of odd or not upto usable -->

				<a href="#" class="dropdown-toggle avatar_width" data-toggle="dropdown" role="button" aria-expanded="false"><span class="avatar-holder"><img src="assets/images/avatar.jpeg" alt=""></span><span class="avatar_info">Bootstrap</span><span class="drop-icon"><!-- <i class="ion ion-chevron-down"></i> --></span></a>
				<ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow avatar_drop neat_drop dropdown-right" data-wow-duration="1500ms" role="menu">
					<li>
						<a href="profile.html"> <i class="ion-android-settings"></i>Settings</a>
					</li>
					<li>
						<a href="mailbox.html"> <i class="ion-android-chat"></i>Messages</a>
					</li>
					<li>
						<a href="dropzone-file-upload.html"> <i class="ion-android-cloud-circle"></i>Upload</a>
					</li>
					<li>
						<a href="profile.html"> <i class="ion-android-create"></i>Edit profile</a>
					</li>
					<li>
						<a href="lock-screen.html" class="logout_button"><i class="ion-power"></i>Logout</a>
					</li>   
				</ul>
			</li>
		</ul>

	</nav>
</div>
<!-- /top-bar -->
	
<div class="main-content">
<div class="manage_buttons">
			<div class="row">
				<div class="col-md-3 search">
					<form action="#" method="post">
						<input type="text" name="search" id="search" class="form-control" placeholder="Search User">
					</form>
				</div>
				<div class="col-md-9">
					<div class="buttons-list">
						<div class="pull-right-btn">
							<a href="#" data-toggle="modal" data-target="#largemodal" class="btn btn-primary">Shto nje rol</a>
							<div class="piluku-dropdown dropdown">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modali per te shtuar nje rol -->
		<div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
						<h4 class="modal-title" id="myModalLabel1">Shto nje rol</h4>
					</div>
					<div class="modal-body">
						<form class="form form-horizontal">
						{{ csrf_field() }}
						<meta name="csrf-token" content="{{ csrf_token() }}">
							<div class="form-group">
								<label class="col-sm-2 control-label">Emri:</label>
								<div class="col-sm-8">
								<input type="text" id="emriRolit"  name="emriRolit" class="form-control" placeholder="Emri">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label">Pershkrimi</label>
								<div class="col-sm-8">
									<textarea name="" id="pershkrimi" class="form-control text-area" cols="30" rows="10" placeholder="Pershkrimi"></textarea>
								</div>
							</div>
					
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Emri i lejes</th>
									<th>Pershkrimi</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach($permissions as $permission)
								<tr>
									<th scope="row">{{$permission->id}}</th>
									<td>{{$permission->name}}</td>
									<td>{{$permission->description}}</td>
									<td>
										 <input type="checkbox" id="permis" name="permission" value=" {{$permission->id}} ">
								    </td>
								</tr>
							@endforeach	
								
							</tbody>
						</table>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" id="shtoRolin" class="btn btn-primary">Save changes</button>	
				</form>
					</div>
				</div>
			</div>
	  </div>
	  <!-- Modal per edtim te rolit -->
	  <div class="modal fade" id="editRole" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
						<h4 class="modal-title" id="myModalLabel1">Edito rolin</h4>
					</div>
					<div class="modal-body">
						<form class="form form-horizontal">
						{{ csrf_field() }}
						<meta name="csrf-token" content="{{ csrf_token() }}">
							<div class="form-group">
								<label class="col-sm-2 control-label">Emri:</label>
								<div class="col-sm-8">
								<input type="text" id="edit_emriRolit"  name="emriRolit" class="form-control" placeholder="Emri">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label">Pershkrimi</label>
								<div class="col-sm-8">
									<textarea name="" id="edit_pershkrimi" class="form-control text-area" cols="30" rows="10" placeholder="Pershkrimi"></textarea>
								</div>
							</div>
					
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Emri i lejes</th>
									<th>Pershkrimi</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach($permissions as $permission)
								<tr>
									<th scope="row">{{$permission->id}}</th>
									<td>{{$permission->name}}</td>
									<td>{{$permission->description}}</td>
									<td>
										 <input type="checkbox" class="permis" name="editPerm" id="{{$permission->id}} ">
								    </td>
								</tr>
							@endforeach	
								
							</tbody>
						</table>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" value="" id="editoRolin" class="btn btn-primary">Save changes</button>	
				</form>
					</div>
				</div>
			</div>
	  </div>
	<!-- Modal Full Width -->

		<div class="row" style="margin-top:40px;">
			<div class="col-md-12">
				<div class="panel panel-piluku">
					<div class="panel-heading">
						<h3 class="panel-title">
							Rolet
							<span class="panel-options">
								<a href="#" class="panel-refresh">
									<i class="icon ti-reload"></i>
								</a>
								<a href="#" class="panel-minimize">
									<i class="icon ti-angle-down"></i>
								</a>
								<a href="#" class="panel-close">
									<i class="icon ti-close"></i>
								</a>
							</span>
						</h3>
					</div>
					<div class="panel-body" style="display: none;">
						<!-- Table -->
						<table class="table" id="tabelaRoleve">
							<thead>
								<tr>
									<th>#</th>
									<th>Emri rolit</th>
									<th>Pershkrimi</th>
									<th>Aksioni</th>
								</tr>
							</thead>
							<tbody">
								@foreach($roles as $role)
									<tr id="{{$role->id}}" class="role_rows">
										<th scope="row">{{$role->id}}</th>
										<td>{{$role->name}}</td>
										<td>{{$role->description}}</td>
										<td>
										<a href="#" id="{{$role->id}}" data-toggle="modal" data-target="#editRole" class="btn btn-green edit_role"><i class="ion ion-edit"></i></a>
										  <a href="#" id="{{$role->id}}" class="btn btn-red delete_role "><i class="ion ion-ios-trash-outline delete_role"></i></a></td>
										<td></td>	
								   </tr>								
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>  	
</div>
<!-- wrapper -->

<script src='assets/js/jquery-ui-1.10.3.custom.min.js'></script>
<script src='assets/js/bootstrap.min.js'></script>
<script src='assets/js/jquery.nicescroll.min.js'></script>
<script src='assets/js/wow.min.js'></script>
<script src='assets/js/jquery.loadmask.min.js'></script>
<script src='assets/js/jquery.accordion.js'></script>
<script src='assets/js/materialize.js'></script>
<script src='assets/js/chartist.min.js'></script>
<script src='assets/js/CustomChart.js'></script>
<script src='assets/js/build/d3.min.js'></script>
<script src='assets/js/nvd3/nv.d3.js'></script>
<script src='assets/js/sparkline.js'></script>
<script src='assets/js/bic_calendar.js'></script>
<script src='assets/js/widgets.js'></script>
<script src='assets/js/core.js'></script>
<script src='assets/js/select2.js'></script>
<script src='assets/js/form-elements.js'></script>
<script src="assets/js/jquery.countTo.js"></script>
<script src='assets/js/jquery.multi-select.js'></script>
<script src='assets/ajaxRequests/Role.js'></script>
<script src='assets/js/form-validation/jquery.form-validator.js'></script>
<script src='assets/js/form-validation.js'></script>
</body>
</html>