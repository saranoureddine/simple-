<?php
include('includes/header.php');
include('.././admin/config/dbcon.php');
$sql = "SELECT services.service_id,icons.icon_name,service_title,service_description FROM `services` INNER JOIN icons ON icons.icon_id=services.service_icon;";

//run query:
//run query:
$result = $conn->query($sql);


$services = $result->fetch_all(MYSQLI_ASSOC);
 $i=1;
 $time=0.1;?>

<div class="container-fluid py-5" id="services">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-warning text-center">02</h1>
            <h1 class="display-4 text-uppercase text-center mb-5 text-success">Our Services</h1>
            <div class="row">
            <?php  $i=1; foreach ($services as $service) { ?>
                <div class="col-lg-4 col-md-6 mb-2  wow fadeInUp" data-wow-delay="<?php echo $time."s"; ?>">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-warning ml-n4" style="width: 80px; height: 80px;">
                                <i class="<?php  echo $service['icon_name']?> text-success"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0"><?php   if($i<=9){echo'0'.$i;} else{echo $i;}?></h1>
                        </div>
                        <h4 class="text-uppercase mb-3 text-dark"><?php  echo $service['service_title']?></h4>
                        <p class="m-0 text-dark"><?php  echo $service['service_description']; $i++;?></p>
                    </div>
                </div>
              
                <?php } ?>

            </div>
        </div>
    </div>