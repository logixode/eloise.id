<?php include "src/config_page.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "src/header_page.php"; ?>
        <style>
            body, html {
                height: 100%;
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                overflow: hidden;
            }

            * {
                box-sizing: border-box;
            }

            .bg-image {
                /* The image used */
                background-image: url("https://ak8.picdn.net/shutterstock/videos/14162018/thumb/1.jpg");
                
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
                width: 80%;
                padding: 20px;
            }
        </style>
    </head>

	<body>

        <div class="bg-image"></div>
        <div class="content">
            
        </div>
        
        <?php include "src/footer_page.php"; ?>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    </body>
</html>