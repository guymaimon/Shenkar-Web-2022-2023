<?php
include "db.php";
$query="SELECT * FROM portfolioSh.portfolio_GuyMaimon";
$result=mysqli_query($connection,$query);
if(!$result)
{
   die ("DB query failed.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Guy Maimon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">Guy </span>Maimon</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="#" class="nav-item nav-link active">Projects</a>
                <a href="CV.html" class="nav-item nav-link">CV</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-outline-primary d-none d-lg-block">Download CV</a>
        </div>
    </nav>
    <br><br><br>
    <!-- Navbar End -->
    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <?php
        while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<div id='".$row['id']."' class='col-sm-4 sm-margin-b-50'>";
                        echo "<div class='margin-b-20'>";
                        echo "<div class='wow zoomIn' data-wow-duration='.3' data-wow-delay='.1s'>";
                        echo "<img class='img-responsive' src='".$row['image']."' alt='Latest Products Image'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<h4><a href='#'>".$row['title']."</a> <span class='text-uppercase margin-l-20'>".$row['num_ex']."</span></h4>";
                        echo "<a class='urlGit' href=".$row['github']." target='_blank'>".$row['github']."</a>";
                        echo "<a class='link read-more' href='#link read more'>Read More</a>";
                        echo "</div>";
                    }
                ?>
        </div>
    </div>



































    
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="m-0"><a class="text-white font-weight-bold" href=" https://www.shenkar.ac.il/he/departments/engineering-software-department">תואר ראשון בהנדסת תוכנה בשנקר</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>