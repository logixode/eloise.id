<?php 
    session_start();
    
    include "src/config_page.php"; 

    include "config/connection.php";

    if (isset($_POST['username']) && isset($_POST['password'])) {
        # code...
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        // mysqli_query($connect, "INSERT INTO tb_user (username, password, previlege) VALUES ('$username','$password','admin')");
        $query = mysqli_query($connect, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
        $check = mysqli_num_rows($query);
        // echo $check;

        header("location:index.php");
        if ($check == 1) {
            $_SESSION['username'] = $_POST['username'];
            header("location:./");
        }
        else {
            header("location:?notif=access");
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "src/header_page.php"; ?>
        <style>
            body, html {
                height: 100%;
                margin: 0;
                /* font-family: Arial, Helvetica, sans-serif; */
                font-family: 'Montserrat', sans-serif;
                overflow: hidden;
            }

            * {
                box-sizing: border-box;
            }

            .bg-image {
                /* The image used */
                background-image: url("http://www.evrosped.com/wp-content/uploads/2016/11/demo-background-evrosped.jpg");
                
                /* Add the blur effect */
                filter: blur(8px);
                -webkit-filter: blur(28px);
                
                /* Full height */
                height: 110%;
                margin: -40px; 
                
                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            /* Position text in the middle of the page/image */
            .content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 600px;
                padding: 20px;
            }
            .card {
	            box-shadow:0 14px 28px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.22);
                radius: 0px;
            }

            .input-container {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                width: 100%;
                margin-bottom: 15px;
            }

            .icon {
                padding: 10px;
                background: dodgerblue;
                color: white;
                min-width: 50px;
                text-align: center;
            }

            .input-field {
                width: 100%;
                padding: 10px;
                outline: none;
                border-radius: 0;
            }

            .input-field:focus {
                border: 2px solid dodgerblue;
            }

            /* Set a style for the submit button */
            .btn-login {
                background-color: dodgerblue;
                color: white;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
                height: 45px;
                border-radius: 0;
            }
            .text-center h1 {
                font-weight: 100;
            }

            .btn:hover {
                opacity: 1;
            }
        </style>
    </head>

	<body>

        <div class="bg-image"></div>
        <div class="content">
            <div class="card p-5 bg-light">
                <div class="text-center mt-2 my-4">
                    <h1>Eloise.id</h1>
                </div>    
                <form action="" class="" method="POST">
                    <?php if (isset($_GET['notif'])) { ?>
						<div class="alert alert-danger mb-4">
							<span>Wrong Password!!!</span>
						</div>
                    <?php } ?>
                    <div class="input-container my-3">
                        <i class="fa fa-user icon"></i>
                        <input class="form-control input-field" type="text" placeholder="Username" name="username" required>
                        <!-- <input class=""  name="usrnm"> -->
                    </div>


                    <div class="input-container my-4">
                        <i class="fa fa-key icon"></i>
                        <input class="form-control input-field" type="password" placeholder="Password" name="password" required>
                    </div>


                    <button type="submit" class="btn btn-login text-white mt-2">Login</button>
                </form>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    </body>
</html>