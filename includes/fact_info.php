<?php
include('includes/header.php');
include('.././admin/config/dbcon.php');
$sql = "SELECT factinfo.fact_id,icons.icon_name,factinfo.fact_title,factinfo.fact_description FROM `factinfo` INNER JOIN icons ON factinfo.fact_icon=icons.icon_id";

//run query:
//run query:
$result = $conn->query($sql);


$facts = $result->fetch_all(MYSQLI_ASSOC);
 $i=1;
 $time=0.1;?>

<div class="container-xxl py-5 " id="fact">
        <div class="container">
        <?php  $i=0; foreach ($facts as $fact) { ?>
            <?php if($i % 3==0) {  ?>
            <div class="row g-4 mt-1">
                <?php } ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $time."s"; ?>">
                    <div class="d-flex py-5 px-4 <?php  if($i % 2==0){ echo "bg-light";} ?>">
                        <i class=" <?php  echo $fact['icon_name']?> text-success flex-shrink-0"></i>
                        <div class="ps-4 text-dark">
                            <h5 class="mb-3 text-dark "><?php  echo $fact['fact_title']?></h5>
                            <p class="text-muted"><?php  echo $fact['fact_description']; $i++; $time=$time+0.2;?></p>
                            
                        </div>
                    </div>
                </div>
                <?php if($i % 3==0) {  ?>
                </div>
                <?php } ?>
                <?php } ?>
                  </div>
                 </div>
