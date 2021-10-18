<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/cnttforum">CNTT-Forums</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cnttforum">Trang Chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Danh mục</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Có gì mới?
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://github.com/hoainaminz/cnttforum">Cập nhật mới nhất</a></li>
            <li><a class="dropdown-item" href="https://github.com/hoainaminz">Github</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Liên hệ với chúng tôi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Liên hệ</a>
        </li>
      </ul>
      <div class="d-flex">';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '<form class="d-flex my-2 my-lg-0" method="get" action="search.php">
    <input class="form-control me-2" name="Search" type="Tìm kiếm" actiion="search.php" placeholder="Tìm kiếm" aria-label="Search">
    <button class="btn btn-success mx-2 my-sm-0 col-sm-2" type="submit">Tìm kiếm</button>
      <p class="d-flex text-light mx-2 my-0 ">Xin chào '. $_SESSION['useremail']. ' </p>
      <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
      </form>';
}
else{
    echo '<form class="d-flex my-2 my-lg-0">
    <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
    <button class="btn btn-success col-6" type="submit">Tìm kiếm</button>
    </form>
    <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Đăng nhập</button>
    <button class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#signupModal">Đăng ký</button>';
}


    echo '</div>
    </div>
  </div>
</nav>';
include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>