

<?php include ("includes/header.php"); ?>

<?php


if(!$session->is_signed_in()){redirect("login.php");}


?>





<?php include ("includes/top_nav.php") ?>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

<?php include("includes/side_nav.php") ?>

<!-- /.navbar-collapse -->
</nav>


        <div id="page-wrapper">

         <?php include ("includes/admin_content.php")?>


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
