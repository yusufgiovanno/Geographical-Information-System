<?php
    include "conf_config.php";
    include "conf_dbconnect.php";
    include "conf_functions.php";
	opendb();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .bg {
        /* The image used */
        background-image: url("images/login1.jpg");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
    <meta charset="utf-8" />
    <title>Sistem Informasi Geografis Pemetaan Camping Ground dan Persewaan Camping Malang Raya</title>
    <meta name="Sistem Informasi Geografis Pemetaan Camping Ground dan Persewaan Camping Malang Raya"
        content="Sistem Informasi Geografis Pemetaan Camping Ground dan Persewaan Camping Malang Raya" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="assets/css/pages/login/classic/login-6.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/logo.png" />
</head>

<body id="kt_body"
    class="bg header-fixed header-mobile-fixed subheader-enabled subheader-fixed subheader-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <div class="d-flex flex-column flex-root">
        <div class="login login-6 login-signin-on login-signin-on d-flex flex-column-fluid" id="kt_login">
            <div class="d-flex flex-column flex-lg-row flex-row-fluid text-center" class="bg">
                <div class="d-flex w-100 flex-center p-15">
                    <div class="login-wrapper">
                    </div>
                </div>
                <div class="d-flex w-50 flex-center p-15 position-relative overflow-hidden"
                    style="background-color:white;">
                    <div class="container login-wrapper">
                        <h2 class="mb-8 mt-1 font-weight-bold">GIS</h2>
                        <h3 class="mb-5 text-muted font-weight-bold">
                            Sistem Informasi Geografis Pemetaan Camping Ground dan Persewaan Camping Malang Raya
                        </h3>
                        <img src="images/logo.png" class="max-h-150px" alt="logo-gis" />
                        <div class="login-signin">
                            <div class="text-center mb-10 mb-lg-5">
                                <h2 class="font-weight-bold"><br>Login</h2>
                                <br><br>
                                <p class="text-muted font-weight-bold">Ketikkan nama pengguna dan kata sandi</p>
                            </div>
                            <form name="login" id="login" method="post" action="conf_login.php" class="form text-left">
                                <div class="form-group py-2 m-0">
                                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text"
                                        maxlength="20" placeholder="Nama Pengguna" id="username" name="username"
                                        autocomplete="off" />
                                </div>
                                <div class="form-group py-2 border-top m-0">
                                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password"
                                        placeholder="Kata Sandi" id="password" name="password" />
                                </div>
                                <div
                                    class="form-group d-flex flex-wrap justify-content-between align-items-center mt-5">
                                    <div class="checkbox-inline">
                                        <label class="checkbox m-0 text-muted font-weight-bold">
                                            <input type="checkbox" name="remember" />
                                            <span></span>
                                            Ingat login saya
                                        </label>
                                    </div>
                                    <a href="javascript:;" class="text-muted text-hover-primary font-weight-bold">Lupa
                                        kata sandi ?</a>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit"
                                        class="btn btn-primary btn-pill shadow-sm py-4 px-16 font-weight-bold">Masuk</button>
                                    <a href="register.php">
                                        <button type="button"
                                            class="btn btn-outline-primary btn-pill py-4 px-16 font-weight-bold">Daftar</button>
                                    </a>
                                </div>
                                <div class="text-dark-75">
                                    <a href="#">
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
    </script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/pages/custom/login/login-general.js"></script>
</body>

</html>