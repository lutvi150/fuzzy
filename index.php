<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Status Gizi Dengan Fuzzy Mamdani</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./assets/theme/gymove/xhtml/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/costume.css">
    <link rel="stylesheet" href="./assets/sweetalert2/dist/sweetalert2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <div class="alert alert-info" role="alert">
                                            <strong>Informasi</strong>
                                            <p>Silahkan login menggunakan username dan password anda</p>
                                        </div>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Login</h4>
                                    <form action="index.html">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input type="text" class="form-control" id="username" value="">
                                            <span class="text-error eusername"></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="password" value="">
                                            <span class="text-error epassword"></span>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" onclick="login()" class="btn bg-white text-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/theme/gymove/xhtml/vendor/global/global.min.js"></script>
    <script src="./assets/theme/gymove/xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./assets/theme/gymove/xhtml/js/custom.min.js"></script>
    <script src="./assets/theme/gymove/xhtml/js/deznav-init.js"></script>
    <script src="./assets/sweetalert2/dist/sweetalert2.js"></script>
    <script>
        login = () => {
            $(".text-error").text("");
            let username = $("#username").val();
            let password = $("#password").val();
            $.ajax({
                type: "POST",
                url: "core/login.php",
                data: {
                    username: username,
                    password: password
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.status == true) {
                        window.location.href = "admin.php";
                    } else {
                        $(".eusername").text(response.msg);
                        $(".password").text(response.msg);
                    }
                },
                error: function() {
                    Swal.fire({
                        title: "Error",
                        text: "Ada Sesuatu yang salah !",
                        icon: "error"
                    });
                }
            });
        }
    </script>
</body>

</html>