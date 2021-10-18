<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #ques{
            min-height: 433px;
        }
    </style>
    <title>chào mừng đến với cnttforum</title>
</head>

<body>
<?php include 'partials/_header.php';?>
<?php include 'partials/_dbconnect.php';?>
<?php
$id = $_GET['catid'];
$sql = "SELECT * FROM `categories` WHERE category_id=$id";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $catname = $row['category_name'];
    $catdesc = $row['category_description'];
}

?>

<?php
$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if($method=='POST'){
    // Insert into thread db
    $th_title = $_POST['title'];
    $th_desc = $_POST['desc'];

    $th_title = str_replace("<", "&lt;", $th_title);
    $th_title = str_replace(">", "&gt;", $th_title);

    $th_desc = str_replace("<", "&lt;", $th_desc);
    $th_desc = str_replace(">", "&gt;", $th_desc);

    $sno = $_POST['sno'];
    $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ( '$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    $showAlert = true;
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your thread has been added! Please wait for community to respond
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                  </div>';
    }
}
?>


<!-- Category container starts here -->
<div class="container my-4">
    <div class="border p-3 bg-dark text-light">
        <h1 class="display-4">Thảo luận về vấn đề :  <?php echo $catname;?></h1>
        <p class="lead"> <?php echo $catdesc;?></p>
        <hr class="my-4">
        <p>Đây là một diễn đàn nội bộ, không Spam hay quảng cáo. mọi hành vi vi phạm sẽ bị cho ra đảo không thương tiếc !!!</p>
        <a class="btn btn-success btn-lg" href="#" role="button">Tìm hiểu thêm</a>
    </div>
</div>

<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '<div class="container">
            <h1 class="py-2">Start a Discussion</h1> 
            <form action="'. $_SERVER["REQUEST_URI"] . '" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Problem Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Keep your title as short and crisp as
                        possible</small>
                </div>
                <input type="hidden" name="sno" value="'. $_SESSION["sno"]. '">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ellaborate Your Concern</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>';
}
else{
    echo '
        <div class="container">
        <h1 class="py-2">Bắt đầu thảo luận</h1> 
           <div class="alert alert-danger" role="alert">
  Bạn chưa <a data-bs-toggle="modal" data-bs-target="#loginModal" class="alert-link">Đăng nhập</a>. vui lòng đăng nhập hoặc đăng ký để tham gia thảo luận !.
</div>
        </div>
        ';
}

?>

<div class="container mb-5" id="ques">
    <h1 class="py-2">Vấn đề được bàn luận :</h1>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult = false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_time = $row['timestamp'];
        $thread_user_id = $row['thread_user_id'];
        $sql2 = "SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);




        echo '<div class="media my-3">
            <img src="img/user.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">'.
            '<h5 class="mt-0"> <a class="text-danger" href="thread.php?threadid=' . $id. '">'. $title . ' </a></h5>
                '. $desc . ' </div>'.'<div class="font-weight-bold my-0"> Asked by: '. $row2['user_email'] . ' at '. $thread_time. '</div>'.
            '</div>';

    }
    // echo var_dump($noResult);
    if($noResult){
        echo '<div class="border p-3 bg-danger text-light">
                    <div class="container">
                        <p class="display-4">Không tìm thấy nội dung</p>
                        <p class="lead"> Hãy trở thành người đầu tiên của cuộc trò truyện </p>
                    </div>
                 </div> ';
    }
    ?>

</div>
<?php include 'partials/_footer.php';?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>

