<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script type="text/javascript" src="<?php echo base_url(); ?>public/css/bootstrap-datetimepicker.min.css"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/moment.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/bootstrap-datetimepicker.min.js"></script>
	
	<title>
		<?php 
			if(isset($title)) echo $title;
			else echo "Restaurant";
		?>

	</title>
</head>
<body>
<br>
<div class="container-fluid">
	<nav class="navbar navbar-inverse ">
		 <div class="container-fluid">
		 	 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav pull-right">
			    	<?php if($this->session->type=='Admin') {?>
				    	<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Users<span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><?php echo anchor('admin/users/add', 'Add New', null); ?></li>
				            
				            <li class="divider"></li>
				            <li><?php echo anchor('admin/users', 'View All', null); ?></li>
				            
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Meals <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				          	<li><?php echo anchor('admin/meal/create', 'Add New Meal', null); ?></li>
				          	<li><?php echo anchor('admin/meal/', 'View Meals', null); ?></li>
				            <li class="divider"></li>
				            <li><?php echo anchor('admin/meal_category/create', 'Add New Category', null); ?></li>
				            <li><?php echo anchor('admin/meal_category/index', 'View All Category', null); ?></li>
				            
				          </ul>
				        </li>
				        <?php } ?>

			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Restaurants <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><?php echo anchor('admin/restaurant/create', 'Add New Restaurants', null); ?></li>
			            <li><?php echo anchor('admin/restaurant', 'View All Restaurants', null); ?></li>
			            <li class="divider"></li>
			             <li><?php echo anchor('admin/restaurant_meal/index', 'View Meals', null); ?></li>
			            <li><?php echo anchor('admin/restaurant_meal/create', 'Add Meals', null); ?></li>
			            
			          </ul>
			        </li>
			      
			      			       
			        <!--li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contacts <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            
			            
			          </ul>
			        </li-->
			        <li ><?php echo anchor('admin/order', 'Orders', null); ?></li>
			         <li ><?php echo anchor('admin/access/logout', 'Logout', null); ?></li>
			    </ul>
			 </div>
		 </div>  
	</nav>

<div class="col-md-12">