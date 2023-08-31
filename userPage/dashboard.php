<?php

session_start();
if(!isset($_SESSION['id'])) {
    header('location:../');
}

$data = $_SESSION['dataa'];
$status = $_SESSION['status'];
if(isset($_SESSION['groups'])) {
    $groups = $_SESSION['groups'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <style>
        .card-columns {
  @include media-breakpoint-only(xl) {
    column-count: 3;
  }

}
        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }

        @media (max-width: 575px) {
  .scale-xs {
   margin: 0;
   padding: 0;
  }
}
    </style>
</head>
<body>
    <div class="bg-black py-4">

        <div class="container bg-white p-4 rounded-8">
            <a href="logout.php" class="btn btn-dark">Logout</a>
       <h1 class="my-3">Vote for your favourites </h1>
    <div class="container row" style="position: relative;">
        <div class="col-lg-7 col-md-12">
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            
            for($i = 0; $i < count($groups); $i++) {
                ?>
            
                <div class="col text-center">
                    <div class="card h-100">
                        <img src="../uploads/<?php echo $groups[$i]['picture'] ?>" class="card-img-top" style="width: 100%; height: 70%; object-fit: cover;" alt="GroupImage"/>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $groups[$i]['username'] ?></h5>
                            <p class="card-text">
                            <b>Votes: </b><?php echo $groups[$i]['votes'] ?>
                            </p>
                            <form action="../actions/voting.php" method="POST">
                                <input type="hidden" name="gid" value="<?php echo $groups[$i]['id'] ?>"> </input>
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>"> </input>
                                <input type="hidden" name="uid" value="<?php echo $data['id'] ?>"> </input>
                            <?php if($status> 0) {?>
                            <input type="submit" value="Voted" class="btn btn-success disabled"></input>
                            <?php }
                            else {
                                ?>
                                <input type="submit" value="Vote" class="btn btn-primary"></input>
                            <?php
                            }
                            ?>
                            </form>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Vote with ❤️</small>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
    
        </div>
        </div>
        <div class="col-lg-5 col-md-12 user-profile scale-xs" >
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center h-100">
                        <div class="col ">
                            <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 col-sm-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="../uploads/<?php echo $data['picture'] ?>"
                                alt="userImage" class="img-fluid my-5 rounded-8" style="width: 80px;" />
                                <h5><?php echo $data['username']?></h5>
                                <p><?php echo $data['category'] ?></p>
                               
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="card-body p-4">
                                <h6>Information</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                <div class="col-12 mb-3">
                                    <h6>Email</h6>
                                    <p class="text-muted"><?php echo $data['email'] ?></p>
                                </div>
                                <div class="col-12 mb-3">
                                    <h6>Phone</h6>
                                    <p class="text-muted"><?php echo $data['mobile'] ?></p>
                                </div>
                                </div>
                                <h6>Status</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                    <h6 class="my-0 py-0">Voted</h6>
                                    <p class=" <?php if($status> 0) echo "text-success"; else {echo "text-danger";} ?>"><?php if($status == 1) {echo "YES";} else {echo "NO"; }?></p>
                                </div>
                                <!-- <div class="col-6 mb-3">
                                    <h6>Most Viewed</h6>
                                    <p class="text-muted">Dolor sit amet</p>
                                </div> -->
                            </div>
                                <!-- <div class="d-flex justify-content-start">
                                <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                </div> -->
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</div>
</body>
</html>