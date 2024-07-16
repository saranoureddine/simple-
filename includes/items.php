<?php
include('header.php');
include('.././admin/config/dbcon.php');
$sql = "SELECT * FROM items";

//run query:
$result = $conn->query($sql);
// the query() method  takes a single parameter which is the sql query to execute on the database. 

$result = $conn->query($sql);
$items = $result->fetch_all(MYSQLI_ASSOC);
?>
  <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-1 text-warning text-center">04</h1>
            <h1 class="display-4 text-uppercase text-center mb-5 text-success">what We offer</h1>
            <div class="owl-carousel product-carousel position-relative" style="padding: 0 30px;">
                
<?php foreach ($items as $item) { ?>
    <div class="product-item">
        <img class="img-fluid" src=".././admin/uploads/<?php echo $item['item_image']; ?>" >
    </div>
<?php } ?>

</div>
</div>
  </div>

              <!-- item Start -->
   
      
    <!-- items End -->