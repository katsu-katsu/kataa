<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Milky</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/ice-cream.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>Bangpueng Home@gmail.com</span>
                    </div>
                </div>
            </div>
<div class="col-lg-4 text-center bg-custom-color border-inner py-3">
    <div class="d-inline-flex align-items-center justify-content-center">
        <a href="index.html" class="navbar-brand">
            <h1 class="m-0 text-uppercase text-white"><i class="fas fa-store"></i>&nbsp;&nbsp;Bangpueng Home</h1>
        </a>
    </div>
</div>
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>099-320-9096</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="fas fa-ice-cream fs-1 text-primary me-3"></i>Bangpueng Home</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="product.php" class="nav-item nav-link">Products</a>
                <a href="cart.php" class="nav-item nav-link">Cart</a>
                
        <?php 
            if ($_SESSION["userID"]){ ?>
                <a href="pay.php" class="nav-item nav-link">Pay</a>
                <a href="his.php" class="nav-item nav-link">History</a>
                <a href="user.php" class="nav-item nav-link"><?php echo ($_SESSION['user']);?></a>
        <? }else{ ?>
                <a href="login.php" class="nav-item nav-link">Login</a><? } ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="font-secondary text-primary mb-4">The Best Hamper In Lopburi</h1>
                    <h1 class="display-1 text-uppercase text-white mb-4">The Hamper </p>Bangpueng Home</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">BANGPUENG</h2>
                <h1 class="display-4 text-uppercase">🧺 Welcome 🧺</h1>
            </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-70 h-100" src="img/Picture5.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <h4 class="mb-4">Mr.Ampan Noumnum</h4>
                    <p class="mb-5">♦ ตะกร้าหวายแท้ จากกลุ่มบางพึ่ง ต.บางพึ่ง อ.บ้านหมี่ จ.ลพบุรี <br>♦ ตะกร้าครูอัมพัน น่วมนุ่น ครูช่างศิลปาชีพปี 60 <br>♦ เป็นงานฝีมือ มีความประณีต เป็นงานละเอียด </p>
                    <div class="row g-5">
                    <div class="row g-5">
                    <div class="row g-5">
    <div class="col-sm-6">
        <div class="d-flex align-items-center justify-content-center border-inner " style="width: 90px; height: 90px;">
            <img class="position-absolute w-10 h-20" src="img/Award2.jpg" style="max-width: 300%; height: auto; left: -20px;">
        </div>
        
    </div>
    <div class="col-sm-6">
        <div class="d-flex align-items-center justify-content-center border-inner " style="width: 90px; height: 90px;">
            <img class="position-absolute w-10 h-20" src="img/Award1.jpg" style="max-width: 300%; height: auto; left: 20px;">
        </div>
    
    </div>
</div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Product</h2>
                <h1 class="display-4 text-uppercase">🔥HOT SALES🔥</h1></div>
                <br><center><img src="img/Picture3.png" width="50%"></center>
                <br><center><img src="img/Picture2.png" width="50%"></center>
                <br><center><img src="img/Picture6.png" width="50%"></center>
        </div>
    </div>
    <!-- Products End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-img text-secondary" style="margin-top: 30px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-10 pt-5 mb-5">
                             <h4 style="color: salmon; text-transform: uppercase; margin-bottom: 4px;">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">ADREES <br> </p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">Bangpueng Home@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">099-320-9096</p>
                            </div>
                            <div class="d-flex mt-4">
                                
                                <a class="btn btn-lg btn-custom-color btn-lg-square " href="https://web.facebook.com/OTOPBANGPHUNG" style="color: white;" ><i class="fab fa-facebook-f fw-normal"></i></a>
                                
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 style="color: salmon; text-transform: uppercase; margin-bottom: 4px;">Line</h4>
                            
                            <p>ID: 0898028162</p>
                        </div>
                        
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 style="color: salmon; text-transform: uppercase; margin-bottom: 4px;">Members</h4>
                            <p>นางสาวเกษศินี ต้นเกตุ 65124640110</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved. Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>