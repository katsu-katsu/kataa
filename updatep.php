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
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>CakeZone</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="listp_records.php" class="nav-item nav-link">Products</a>
                <a href="list_records.php" class="nav-item nav-link active">Member</a>
                <a href="cart.php" class="nav-item nav-link">Cart</a>
                <a href="login.php" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

<?php
mysql_connect("localhost", "root", "123456789")or die("cannot connect"); 
mysql_select_db("user_db")or die("cannot select DB");
// get value of id that sent from address bar
$p_id=$_GET['p_id'];

// Retrieve data from database 
$sql="SELECT * FROM product WHERE p_id='$p_id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
<center>
<table border="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="updatep_ac.php">
<td>
<table border="0" cellspacing="1">
<tr>
<td>&nbsp;</td>
<td align="center" colspan="6"><font size = "5"><strong>แก้ไขข้อมูล</strong> </td>
</tr>
<tr>
<td align="center"><font size = "4"><strong>รหัสสินค้า</strong></td>
<td align="center"><font size = "4"><strong>ชื่อสินค้า</strong></td>
<td align="center"><font size = "4"><strong>รายละเอียดสินค้า</strong></td>
<td align="center"><font size = "4"><strong>ราคาต้นทุน</strong></td>
<td align="center"><font size = "4"><strong>ราคาสินค้า</strong></td>
<td align="center"><font size = "4"><strong>รูปสินค้า</strong></td>
<td align="center"><font size = "4"><strong>จำนวนสินค้า</strong></td>
<td align="center"><font size = "4"><strong>รหัสประเภทสินค้า</strong></td>
</tr>
<tr>
<td align="center"><font style='font-size:14px'>
<input name="p_id" type="text" id="p_id" value="<? echo $rows['p_id']; ?>">
</td>
<td align="center"><font style='font-size:14px'>
<input name="p_name" type="text" id="p_name" value="<? echo $rows['p_name']; ?>">
</td>
<td align="center"><font style='font-size:14px'>
<input name="p_detail" type="text" id="p_detail" value="<? echo $rows['p_detail']; ?>">
</td>
<td align="center"><font style='font-size:14px'>
<input name="p_cost" type="text" id="p_cost" value="<? echo $rows['p_cost']; ?>">
</td>
<td align="center"><font style='font-size:14px'>
<input name="p_price" type="text" id="p_price" value="<? echo $rows['p_price']; ?>">
</td>
<td align="center"><font style='font-size:14px'>
<input name="p_img" type="text" id="p-img" value="<? echo $rows['p_img']; ?>">
</td>
</td>
<td align="center"><font style='font-size:14px'>
<input name="p_num" type="text" id="p_num" value="<? echo $rows['p_num']; ?>">
</td>
<td align="center"><font style='font-size:14px'>
<input name="ct_id" type="text" id="ct_id" value="<? echo $rows['ct_id']; ?>">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input name="p_id" type="hidden" id="p_id" value="<? echo $rows['p_id']; ?>">
</td>
<td>&nbsp;</td>
</tr>
</table>
<center><input type="submit" name="Submit" value="ตกลง"></center>
</td>
</form>
</tr>
</table>
</center>
<?php
// close connection 
mysql_close();
?>

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
                                <p class="mb-0">15/3 บ้านบางพึ่ง หมู่ 1 <br> ต.พุคา อ.บ้านหมี่ จ.ลพบุรี <br> 15110</p>
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
                            <p>63124640102 สินาลักษณ์ เสาระโส</p>
                            <p>63124640110 สุทินา เรืองจาบ</p>
                            <p>63124640116 ภารดี คชศิลา</p>
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