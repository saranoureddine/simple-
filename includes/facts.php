
<div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>

                    <h2 class="text-white mb-2" data-toggle="counter-up">14</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up"><?php
                    $sql = "SELECT count(*)As total FROM `employees`;";

                            $result = $conn->query($sql);
                            $row=$result->fetch_assoc();
                                echo $row['total'];?>   </h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up"><?php
                    $sql = "SELECT count(*)As total FROM `clients`;";

                            $result = $conn->query($sql);
                            $row=$result->fetch_assoc();
                                echo $row['total'];?>   </h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">   
                         <?php $sql = "SELECT sum(project)As total FROM `clients`;";

                              $result = $conn->query($sql);
                              $row=$result->fetch_assoc();
                                      echo $row['total'];     ?>   </h2>
                    <p class="text-white mb-0">project</p>
                </div>
            </div>
        </div>
    </div>