<?php
include('includes/header.php');
include('.././admin/config/dbcon.php');
$sql = "SELECT * FROM `partner`";


$result = $conn->query($sql);


$partners = $result->fetch_all(MYSQLI_ASSOC);
 ?>
 <div class="container-fluid py-5" id="partner">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
            <?php  $i=0; foreach ($partners as $partner) { ?> 
                <div class="bg-light p-4">
                    <img  src=".././admin/uploads/<?php echo $partner['partner_image']; ?>" alt="" height="100px">
                </div>
                <?php } ?>
                
                </div>
            </div>
        </div>
    </div>