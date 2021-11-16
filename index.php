<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/stars.css">
</head>
<body>
<!-- Điều hướng -->

<div class="bg-image"
     style="background-image: url('img/galaxy.jpg');
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover
        ">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-lg-block shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><strong>CNTT FORUMS</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="thaoluan.php">Thảo luận</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Thêm...</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row">
                    <!-- Icons -->
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#" rel="nofollow"
                           target="_blank">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#" rel="nofollow" target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#" rel="nofollow" target="_blank">
                            <i class="bi bi-github"></i>
                        </a>
                    </li>

                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#" rel="nofollow" target="_blank">
                            <i class="bi bi-google"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->


    <!-- content -->




    <div class="d-flex flex-column"
         style="
            position: absolute;
            margin-left: inherit;
            padding-left:25vh;
            padding-top:20vh ;
        ">


        <div class="p-1 text-light">
            <h1><strong>CNTT FORUMS</strong></h1>
        </div>
        <div class="p-1 text-light">
            <h1>DIỄN ĐÀN CÔNG NGHỆ THÔNG TIN</h1>
        </div>
        <div class="p-1"><br></div>

        <div class="p-1 text-light"><p>Kiến thức là nền tảng của thành công</p></div>
        <div class="p-1">
            <form class="d-flex" method="get" action="search.php">
            <input name="search" type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
                <!-- <form class="d-flex" method="get" action="search.php">-->
            </form>
        </div>
        <div class="p-1">
            <a class="btn btn-outline-light btn-lg" href="thaoluan.php"
               role="button">Thảo luận ngay</a>

        </div>

        <div class="night">
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
        </div>
    </div>


</div>



<?php include ("partials/_footer.php");?>


<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>