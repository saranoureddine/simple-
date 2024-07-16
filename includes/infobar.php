<?php 
include('../admin/config/dbcon.php');
                        $sql = "SELECT * FROM `configuration`";
                        $daysOfWeek = array(
                            'Sunday' => 'Sun',
                            'Monday' => 'Mon',
                            'Tuesday' => 'Tue',
                            'Wednesday' => 'Wed',
                            'Thursday' => 'Thu',
                            'Friday' => 'Fri',
                            'Saturday' => 'Sat'
                        );
                        
$result = $conn->query($sql);
$row=$result->fetch_assoc();
?>
<!-- infobar Start -->
<div class="container-fluid bg-light p-0">
    <!--  to be hidden in all except on lg -->
    <div class="row gx-0 d-none d-xl-flex">
        <div class="col-lg-7 ps-1   pe-5 text-start">
          
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="far fa-clock text-success me-2"></small>
                <small><?php  foreach ($daysOfWeek as $key => $value) {
                    if($key==$row['from_day']){echo $value;}
                } ?> - <?php  foreach ($daysOfWeek as $key => $value) {
                    if($key==$row['to _day']){echo $value;}
                } ?> :<?php  $time= $row['from_hour'] ;
                                           list($hour, $minutes) = explode(":",$time);

                                           // Convert the hour to an integer
                                           $hour = (int)$hour;
                                           
                                           // Determine if it's AM or PM
                                           if ($hour >= 12) {
                                               $ampm = "PM";
                                           } else {
                                               $ampm = "AM";
                                           }   echo $row['from_hour'].''.$ampm;     ?>- <?php 
                                           $time= $row['to_hour'] ;
                                           list($hour, $minutes) = explode(":",$time);

                                           // Convert the hour to an integer
                                           $hour = (int)$hour;
                                           
                                           // Determine if it's AM or PM
                                           if ($hour >= 12) {
                                               $ampm = "PM";
                                           } else {
                                               $ampm = "AM";
                                           }   echo $row['to_hour'].''.$ampm;  ?></small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="fa fa-map-marker-alt text-success me-2"></small>
                <small><?php  echo $row['location']?></small>
            </div>
        </div>
        <div class="col-lg-5 pe-1   ps-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-3">
              <a href="tel:<?php  echo $row['phone']?>" class="text-muted">  <small class="fa fa-phone-alt text-success me-2"></small>
                <small><?php  echo $row['phone']?></small></a>
            </div>
            <div class="h-100 d-inline-flex align-items-center ">
                <a class="btn btn-sm-square bg-white text-success me-1" href="<?php  echo $row['facebook']?>"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-success me-1" href="<?php  echo $row['whatsapp']?>"><i class="fab fa-whatsapp"></i></a>
                <a class="btn btn-sm-square bg-white text-success me-1" href="mailto:<?php  echo $row['email']?>"><i class="fas  fa-envelope"></i></a>
                <a class="btn btn-sm-square bg-white text-success me-0" href="<?php  echo $row['instagram']?>"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>