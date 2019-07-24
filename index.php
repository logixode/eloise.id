<?php 
    session_start();

    include "src/config_page.php"; 

    if (!isset($_SESSION['username'])){
        header("location:./login.php");
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "src/header_page.php"; ?>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    </head>

	<body>

        <?php include "src/nav_page.php"; ?>
        <!-- <div class="row"> -->

            <!-- col-md-10 -->
                <div class="container-fluid content">

                <?php include "public/data-penjualan.php"; ?>

                </div> <!-- / container-fluid -->
                <?php include "src/footer_page.php"; ?>
            </div> <!-- / col-md-10 -->

        </div>	<!-- / row -->
        

        <!-- <script type="text/javascript" src="src/assets/js/bootstrap.js"></script>
	    <script type="text/javascript" src="src/assets/js/jquery.js"></script>
	    <script type="text/javascript" src="src/assets/js/bootstrap.bundle.js"></script> -->

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script type="text/javascript">
            document.getElementById('edit').onclick = function() {
            
            };
            //document.getElementByClassName('delete').onclick = function() {
            $('.delete').click(function() {
                Swal.fire({
                title: 'Anda yakin ingin menghapus item ini?',
                text: "Setelah terhapus item tersebut tidak dapat dikembalikan!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Delete!'
                }).then((result) => {
                    if (result.value) {
                        
                        Swal.fire(
                        'Terhapus!',
                        'Item sudah berhasil dihapus.',
                        'success'
                        )
                    }
                })
            });
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
            });

            Toast.fire({
            type: 'success',
            title: 'Signed in successfully'
            });
        </script>
    </body>
</html>