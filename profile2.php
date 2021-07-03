<?php
include "conf_header.php";
include "connection.php";
opendb();
session_start();
$id = $_SESSION['idpengguna'];
$pengguna_nama = $_SESSION['username'];


?>

<head>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->


    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->

    <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

</head>

<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
            <div class="brand flex-column-auto " id="kt_brand">
                <a href="home.php" class="brand-logo">
                    <img alt="Logo" src="images/logo.png" width="65px" />
                </a>
                <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                    <span class="svg-icon svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                    d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                    fill="#000000" fill-rule="nonzero"
                                    transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                                <path
                                    d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3"
                                    transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </button>
            </div>
            <!--struktur menu pindah ke file ini untuk mempermudah proses pemmbuatan menu-->
            <?php  include "conf_leftmenu.php"?>
            <!--struktur menu bagian header pindah ke file ini untuk mempermudah proses pemmbuatan menu-->
            <?php  include "conf_headermenu.php"?>
            <!--begin::Body source untuk membuat body pada halaman home dimulai dari sini-->
            <!--begin::Entry-->

            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class=" container ">
                    <!--begin::Dashboard-->
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Card-->
                        <div class="col-lg-6 col-xxl-4">
                            <div class="card card-custom gutter-b">
                                <!--begin::Body-->
                                <div class="card-body pt-4">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <div class="dropdown dropdown-inline">
                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ki ki-bold-more-hor"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Navigation-->
                                                <ul class="navi navi-hover py-5">
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-icon"><i
                                                                    class="flaticon2-drop"></i></span>
                                                            <span class="navi-text">New Group</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-icon"><i
                                                                    class="flaticon2-list-3"></i></span>
                                                            <span class="navi-text">Contacts</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-icon"><i
                                                                    class="flaticon2-rocket-1"></i></span>
                                                            <span class="navi-text">Groups</span>
                                                            <span class="navi-link-badge">
                                                                <span
                                                                    class="label label-light-primary label-inline font-weight-bold">new</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-icon"><i
                                                                    class="flaticon2-bell-2"></i></span>
                                                            <span class="navi-text">Calls</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-icon"><i
                                                                    class="flaticon2-gear"></i></span>
                                                            <span class="navi-text">Settings</span>
                                                        </a>
                                                    </li>

                                                    <li class="navi-separator my-3"></li>

                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-icon"><i
                                                                    class="flaticon2-magnifier-tool"></i></span>
                                                            <span class="navi-text">Help</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-icon"><i
                                                                    class="flaticon2-bell-2"></i></span>
                                                            <span class="navi-text">Privacy</span>
                                                            <span class="navi-link-badge">
                                                                <span
                                                                    class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Toolbar-->

                                    <!--begin::User-->
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                            <div class="symbol-label"
                                                style="background-image:url('assets/media/users/300_13.jpg')"></div>
                                            <i class="symbol-badge bg-success"></i>
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                                                James Jones
                                            </a>
                                            <div class="text-muted">
                                                Application Developer
                                            </div>
                                            <div class="mt-2">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">Chat</a>
                                                <a href="#"
                                                    class="btn btn-sm btn-success font-weight-bold py-2 px-3 px-xxl-5 my-1">Follow</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Contact-->
                                    <div class="pt-8 pb-6">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="font-weight-bold mr-2">Email:</span>
                                            <a href="#" class="text-muted text-hover-primary">matt@fifestudios.com</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="font-weight-bold mr-2">Phone:</span>
                                            <span class="text-muted">44(76)34254578</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="font-weight-bold mr-2">Location:</span>
                                            <span class="text-muted">Melbourne</span>
                                        </div>
                                    </div>
                                    <!--end::Contact-->

                                    <!--begin::Contact-->
                                    <div class="pb-6">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical.
                                    </div>
                                    <!--end::Contact-->

                                    <a href="profile.php"
                                        class="btn btn-light-success font-weight-bold py-3 px-6 mb-2 text-center btn-block">
                                        Profile Overview
                                    </a>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <div class="col-lg-6 col-xxl-4">

                            <!--begin::List Widget 9-->
                            <div class="card card-custom card-stretch gutter-b">
                                <!--begin::Header-->
                                <div class="card-header align-items-center border-0 mt-4">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="font-weight-bolder text-dark">Camping Ground</span>
                                        <span class="text-muted mt-3 font-weight-bold font-size-sm">Latest Data</span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <div class="card-body pt-4">
                                    <!--begin::Timeline-->
                                    <div class="timeline timeline-6 mt-3">
                                        <?php 
                                    $query = mysql_query("SELECT * FROM `master_transaksi` WHERE `id_kategori`= '1' ORDER BY `datecreated` DESC LIMIT 10");
                                    while($data = mysql_fetch_array($query)) {?>
                                        <!--begin::Item-->
                                        <div class="timeline-item align-items-start">
                                            <!--begin::Label-->
                                            <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                <?=$data['datecreated'];?></div>
                                            <!--end::Label-->

                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-primary icon-xl"></i>
                                            </div>
                                            <!--end::Badge-->

                                            <!--begin::Text-->
                                            <div class="timeline-content font-weight-mormal font-size-lg pl-3">
                                                <a
                                                    href="master-transaksi.php?e=Edit&idmode=<?php echo $data['transaksi_id'];?>">
                                                    <?php echo $data['transaksi_nama']; ?>
                                                </a>
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <?php }
                                    ?>
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end: List Widget 9-->
                        </div>
                        <div class="col-lg-6 col-xxl-4">

                            <div class="card card-custom card-stretch gutter-b">
                                <!--begin::Header-->
                                <div class="card-header align-items-center border-0 mt-4">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="font-weight-bolder text-dark">Persewaan</span>
                                        <span class="text-muted mt-3 font-weight-bold font-size-sm">Latest Data</span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <div class="card-body pt-4">
                                    <!--begin::Timeline-->
                                    <div class="timeline timeline-6 mt-3">
                                        <?php 
                                    $query = mysql_query("SELECT * FROM `master_transaksi` WHERE `id_kategori`= '2' ORDER BY `datecreated` DESC LIMIT 10");
                                    while($data = mysql_fetch_array($query)) {?>
                                        <!--begin::Item-->
                                        <div class="timeline-item align-items-start">
                                            <!--begin::Label-->
                                            <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                <?php echo $data['datecreated']; ?></div>
                                            <!--end::Label-->

                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-primary icon-xl"></i>
                                            </div>
                                            <!--end::Badge-->

                                            <!--begin::Text-->
                                            <div class="timeline-content font-weight-mormal font-size-lg pl-3">
                                                <a
                                                    href="master-transaksi.php?e=Edit&idmode=<?php echo $data['transaksi_id'];?>">
                                                    <?php echo $data['transaksi_nama']; ?>
                                                </a>
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <?php }
                                    ?>
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end: Card Body-->
                            </div>

                        </div>
                        <div class="col-lg-6 col-xxl-4 order-1 order-xxl-1">
                        </div>
                    </div>
                    <!--end::Row-->
                    <!--end::Dashboard-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
        <!--end::Content-->

        <?php include "conf_footerheader.php" ?>

        <?php include "conf_rightstickymenu.php"?>

        <?php include "conf_footer.php"?>