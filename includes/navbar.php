<?php
session_start();
include('../admin/config/dbcon.php');

$sql = "SELECT * FROM `configuration`";

$result = $conn->query($sql);
$row=$result->fetch_assoc();
?>
<!--navbar start-->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0  top-0" >
    <a href="index.php" class="navbar-brand d-flex align-items-center pe-4 pe-lg-5">
        <img src='../admin/uploads/<?php  echo $row['logo']?>'alt="logo" style="width:200px;"class="rounded" > 
      
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="#slideshow" class="nav-item nav-link active">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#services" class="nav-item nav-link">Services</a>
            <a href="#address" class="nav-item nav-link">Contact</a>
        </div>
        <a href="#booking" class="btn btn-success py-4 px-lg-5 d-none d-lg-block">Booking<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const navLinks = document.querySelectorAll(".nav-link");

  navLinks.forEach(link => {
    link.addEventListener("click", function(event) {
      event.preventDefault();
      const targetId = link.getAttribute("href").substring(1);
      const targetSection = document.getElementById(targetId);

      if (targetSection) {
        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: "smooth"
        });

        // Remove the "active" class from all nav links
        navLinks.forEach(navLink => {
          navLink.classList.remove("active");
        });

        // Add the "active" class to the clicked nav link
        link.classList.add("active");
      }
    });
  });
});
</script>
