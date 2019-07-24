<?php include "src/config_page.php"; ?>
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
        

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script type="text/javascript">
//         Swal.fire({
//   title: 'Error!',
//   text: 'Do you want to continue',
//   type: 'error',
//   confirmButtonText: 'Cool'
// });
        // const Toast = Swal.mixin({
        // toast: true,
        // position: 'top-end',
        // showConfirmButton: false,
        // timer: 3000
        // });

        // Toast.fire({
        // type: 'success',
        // title: 'Signed in successfully'
        // });
        const {value: email} = await Swal.fire({
        title: 'Input email address',
        input: 'email',
        inputPlaceholder: 'Enter your email address'
        });

        if (email) {
        Swal.fire('Entered email: ' + email)
        }
        // Swal.fire({});
        $(document).ready(function() {
            $('#sorting').DataTable();
            $('#sorting_jenis').DataTable();
        } );
        </script>
    </body>
</html>