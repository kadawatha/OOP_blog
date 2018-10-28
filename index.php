
<?php include "includes/header.php"?>


<!-- Navigation -->

<?php include "includes/navigation.php"?>

<?php

$photos=Photo::find_all();

?>



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->


            <div class="col-md-8">

                <!-- First Blog Post -->
                <div class="thumbnail row">



                            <?php foreach ($photos as $photo):  ?>

                    <div class="col-xs-6 col-md-3">
                            <a href="">
                                <img src="admin/images/<?php echo $photo->filename; ?>" alt="">
                            </a>
                        <br>
                    </div>




                            <?php endforeach; ?>






                    </div>




            </div>

            <!-- Blog Sidebar Widgets Column -->

	        <?php include "includes/sidebar.php"?>




        </div>
        <!-- /.row -->

        <hr>

<?php include "includes/footer.php"?>