<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/cnttforum/thaoluan.php">CNTT-Forums</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cnttforum">Trang Chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cnttforum/contactUs.php">Liên hệ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Có gì mới?
          </a>
         
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
include ('partials/_dbconnect.php');
$sql = "SELECT category_name, category_id FROM `categories` LIMIT 3";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo '<a class="dropdown-item" href="threadlist.php?catid='. $row['category_id']. '">' . $row['category_name']. '</a>';
}
echo '</div>
          
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Thông tin</a>
        </li>
      </ul>
      
      
      
      
      
      
       <ul class="navbar-nav d-flex flex-row">
       ';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '
    <li class="nav-item me-3">
    <form class="d-flex" method="get" action="search.php">
    <input class="form-control mr-sm-2" name="search" type="search" actiion="search.php" placeholder="Tìm kiếm" aria-label="Search">
    <button class="btn btn-success col-6" type="submit">Tìm kiếm</button>
    </li>
    <li class="nav-item d-flex" style ="position: center;">
      <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail']. ' </p>
      <a href="partials/_logout.php" class="btn btn-outline-success me-2">Đăng xuất</a>
      </form>
      </li>';
}
else{
    echo '<form class="d-flex my-2 my-lg-0">
    <input class="form-control me-2" name="search" type="search" placeholder="Tìm kiếm" aria-label="Search">
    <button class="btn btn-success col-6" type="submit">Tìm kiếm</button>
    </form>
    <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Đăng nhập</button>
    <button class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#signupModal">Đăng ký</button>';
}


    echo '
    </ul>
    </div>
    </div>
  </div>
</nav>';
include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Chúc mừng</strong> Đăng nhập thành công.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>