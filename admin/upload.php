

<?php include ("includes/header.php"); ?>


<?php include ("includes/top_nav.php") ?>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

<?php include("includes/side_nav.php") ?>

<!-- /.navbar-collapse -->

<?php


if(!$session->is_signed_in()){redirect("login.php");}


?>




</nav>





<?php

$message="";

if (isset($_POST['submit'])){

    $photo=new Photo();
    $photo->title=$_POST['title'];
    $photo->set_file($_FILES['file_upload']);


    if ($photo->save()){
        $message="uploaded success fully";
    }else{
        $message=join("<br>",$photo->errors);
    }



}




?>








<div id="page-wrapper">



	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
				Upload
					<small>Subheading</small>
				</h1>





                <div class="col-md-6">
                <form action="upload.php" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="file" name="file_upload">
                    </div>


                    <input  type="submit" class="btn btn-warning" name="submit">
                    
                    
                </form>
                </div>






			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->


</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
