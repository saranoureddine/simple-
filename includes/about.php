<?php
include('includes/header.php');
include('.././admin/config/dbcon.php');
$sql = "SELECT * FROM about";

//run query:
$result = $conn->query($sql);
// the query() method  takes a single parameter which is the sql query to execute on the database. 

$result = $conn->query($sql);

$row=$result->fetch_assoc();
?>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.10s" id="about">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-warning text-center">01</h1>
        <h1 class="display-4 text-uppercase text-center mb-5 text-success"><?php echo $row['title_success'] ?> <span class="text-warning"><?php echo $row['title_warning'] ?> </span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <img class="w-75 mb-4 wow zoomIn"  src=".././admin/uploads/<?php echo $row['about_image']?>" alt="" data-wow-delay="0.6s">
                <p> <?php echo $row['about_text'] ?> </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 mb-2  wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-warning ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <h1 class=" text-white">01</h1>
                    </div>
                    <h4 class="text-uppercase m-0 text-success"><?php echo $row['fact_one'] ?> </h4>
                </div>
            </div>
            <div class="col-lg-4 mb-2  wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center bg-success p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-warning ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <h1 class=" text-success">02</h1>
                    </div>
                    <h4 class="text-light text-uppercase m-0"><?php echo $row['fact_two'] ?></h4>
                </div>
            </div>
            <div class="col-lg-4 mb-2 wow fadeIn" data-wow-delay="0.5s"">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-warning ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <h1 class=" text-white">03</h1>
                    </div>
                    <h4 class="text-success text-uppercase m-0"><?php echo $row['fact_three'] ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>
