

<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Admin
				<small>Subheading</small>
			</h1>
                 <?php

//                 $user=new User();
//
//                 $user->username="suave the second";
//                 $user->password="rico last name";
//                 $user->first_name="dhanushka";
//                 $user->last_name="gayan jayaweera";
//
//                 $user->create();


                 $user =User::find_user_by_id(2);
                 $user->username="what ever";
                 $user->save();








                ?>


			<ol class="breadcrumb">
				<li>
					<i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
				</li>
				<li class="active">
					<i class="fa fa-file"></i> Blank Page
				</li>
			</ol>
		</div>
	</div>
	<!-- /.row -->

</div>
<!-- /.container-fluid -->













