<?php
include('includes/header.php');
include('.././admin/config/dbcon.php');
$sql = "SELECT * FROM slideshow";

//run query:
$result = $conn->query($sql);
// the query() method  takes a single parameter which is the sql query to execute on the database. 

//fetch query:

 //$row=$result->fetch_assoc();
//single result
//var_dump($row);exit;

// exit;
$slides = $result->fetch_all(MYSQLI_ASSOC);?>


<div class="container-fluid p-0 mb-5" id="slideshow">
        <div id="header-carousel" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
          <?php  $i=0; foreach ($slides as $slide) { ?>
                <div class="carousel-item <?php if($i==0) {echo" active";} $i++;?>">
                    <img class="img-fluid w-100" style="height: 600px;" src=".././admin/uploads/<?php echo $slide['image']; ?>" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                  
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown"><?php echo $slide['title']; ?></h1>
                                    <a href="#services" class="btn btn-success py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid  "  src=".././admin/uploads/<?php echo $slide['sub_image']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
              </button>
        </div>
    </div>
    <?php
include('includes/script.php');

?>