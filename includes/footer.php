<?php
include('includes/header.php');
include('.././admin/config/dbcon.php');
$sql = "SELECT services.service_title FROM `services`;";

//run query:
//run query:
$result = $conn->query($sql);


$services = $result->fetch_all(MYSQLI_ASSOC);
 $i=1;
 $time=0.1;?>
 <?php
 include('../admin/config/dbcon.php');
                        $sql = "SELECT * FROM `configuration`";

$result = $conn->query($sql);
$row=$result->fetch_assoc();
?>
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" id="address">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-7">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo  $row['location'] ?> </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php  echo $row['phone'] ?> </p>
                    
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="<?php  echo $row['facebook']?>"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?php  echo $row['whatsapp']?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="mailto:<?php  echo $row['email']?>"><i class="fas  fa-envelope"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?php  echo $row['instagram']?>"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light"><?php  echo $row['from_day'] ?> - <?php  echo $row['to _day'] ?>:</h6>
                    <p class="mb-0"><?php   $from=nightday($row['from_hour']);
                                            $to=nightday($row['to_hour']); 
                                             echo $from."-".$to; ?> </p>

                    <p class="mb-4"><?php  if($row['ftstart_hour']!="no time")
                                          { $from=nightday($row['ftstart_hour']);
                                            $to=nightday($row['ftendhour']); }
                                            else {
                                                $from=$row['ftstart_hour'];
                                                $to=$row['ftendhour'];
                                            }
                                        if($row['ftstart_hour'] !=" no time") {echo $from."-".$to;} ?></p>
                    <h6 class="text-light"><?php   if($row['day'] !=" no day") echo $row['day'].":";?></h6>
                    <p class="mb-0"><?php   $from=nightday($row['dfrom_hour']);
                                            $to=nightday($row['dto_hour']); 
                                        if($row['from_hour'] !=" no time") {echo $from."-".$to;} ?></p>
                    <p class="mb-4"><?php   $from=nightday($row['dstarthour']);
                                            $to=nightday($row['dendhour']); 
                                        if($row['dstarthour'] !=" no time") {echo $from."-".$to;} ?></p>
                </div>
                <div class="col-lg-3 col-md-7">
                    <h4 class="text-light mb-4">Services</h4>
                    <?php  $i=1; foreach ($services as $service) { ?>
                    <a class="btn btn-link" href="#services"><?php  echo $service['service_title']?></a>
                    <?php } ?>
                   
                </div>
              
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
              
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="" class="text-success">Home</a>
                            <a href="" class="text-success">Cookies</a>
                            <a href="" class="text-success">Help</a>
                            <a href=""class="text-success">FQAs</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    function nightday($times)
    {
        $time= $times ;
        list($hour, $minutes) = explode(":",$time);

        // Convert the hour to an integer
        $hour = (int)$hour;
        
        // Determine if it's AM or PM
        if ($hour >= 12) {
            $ampm = "PM";
        }
         else {
            $ampm = "AM";
          }  $hourss= $times." ".$ampm;
           return $hourss;
          }    
     
   

    ?>