<?php include "src/config_page.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "src/header_page.php"; ?>
    </head>

	<body>

		<div class="container-fluid">

			<!-- <div class="row"> -->
				<?php include "src/nav_page.php"; ?>
				
				<div class="col-sm-10 isi">

                
                <?php include "public/data-penjualan.php"; ?>

				</div> <!-- / isi -->

            </div>	<!-- / row -->
            
        </div>	<!-- / container -->

        <?php include "src/footer_page.php"; ?>

        <script type="text/javascript">
        $(document).ready(function() {
            $('#sorting').DataTable();
            $('#sorting_jenis').DataTable();
        } );
        </script>
    </body>
</html>