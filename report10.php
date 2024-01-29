<?php session_start();?>
<?php 
if (!$_SESSION["userID"]){  //check session
	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
}else { ?>

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
                <a href="indexa.php" class="nav-item nav-link">Home</a>
                <a href="listp_records.php" class="nav-item nav-link">Products</a>
                <a href="list_records.php" class="nav-item nav-link">Member</a>
                <a href="ca.php" class="nav-item nav-link">Cart</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Report</a>
                <div class="dropdown-menu m-0">
                        <a href="report1.php" class="dropdown-item">รายงานรายการสั่งซื้อสินค้า</a>
                        <a href="report2.php" class="dropdown-item">รายงานยอดขายสินค้า</a>
                        <a href="report3.php" class="dropdown-item">รายงานแจ้งการชำระเงิน</a>
                        <a href="report4.php" class="dropdown-item">รายงานสินค้าขายดี</a>
                        <a href="report5.php" class="dropdown-item">รายงานการส่งพัสดุ</a>
                        <a href="report6.php" class="dropdown-item">รายงานสินค้าตามประเภทสินค้า</a>
                        <a href="report7.php" class="dropdown-item">รายงานกำไรจากสินค้าแต่ละรายการ</a>
                        <a href="report8.php" class="dropdown-item">รายงานสินค้ามาใหม่</a>
                        <a href="report9.php" class="dropdown-item">รายงานจำนวนสินค้าที่ต่ำกว่า 10 จำนวน</a>
                        <a href="report10.php" class="dropdown-item">รายงานรายการสั่งซื้อที่ถูกยกเลิก</a>
                    </div></div>
                <p class="nav-item nav-link"> <?php echo ($_SESSION['user']);?></p>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
	
    <?php
  $con = new mysqli("localhost","root","123456789","user_db");

  if($con->connect_error){
      die("Connection failed : ".$con->connect_error);
  }
  $con->set_charset("utf8");
  date_default_timezone_set("Asia/Bangkok");
?>

<center>
<br>
<h3>รายงานรายการสั่งซื้อที่ถูกยกเลิก</h3><br>
<form method="GET" id="form" enctype="multipart/form-data" action=""><font style='font-size:18px'>
    ค้นหาข้อมูล
    <input type="text" name="search" size="20" value="">
    <input type="submit" value="ตกลง">
</form>
<p></p><br>

<table width="90%" border="1" cellspacing="0" cellpadding="3">
<tr>
<td align="center"><font size = "4"><strong>วันที่สั่งซื้อสินค้า</strong></th>
<td align="center"><font size = "4"><strong>หมายเลขออเดอร์</strong></th>
<td align="center"><font size = "4"><strong>รหัสสมาชิก</strong></th>
<td align="center"><font size = "4"><strong>ยอดเงินที่ต้องจ่าย</strong></th>
<td align="center"><font size = "4"><strong>แก้ไขสถานะออเดอร์</strong></th>
</tr>

<?php 
$search=isset($_GET['search']) ? $_GET['search']:'';
$sql = "SELECT o_date,order_head.o_id,username,s_name, SUM(o_sum) as o_sum FROM order_detail
INNER JOIN order_head
ON order_detail.o_id=order_head.o_id
INNER JOIN sta
ON order_head.s_id=sta.s_id
WHERE order_head.s_id='CN' AND (o_date LIKE '%$search%' or username LIKE '%$search') 
GROUP BY order_head.o_id";
$result = $con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    $total = 0;
    $total=$total+$row[o_sum];
?>
<tr>
<td align="center"><font style='font-size:18px'><?php echo $row['o_date']; ?></td>
<td align="center"><font style='font-size:18px'><?php echo "<a href='order.php?o_id=$row[o_id]'>".$row['o_id'];?></td>
<td align="center"><font style='font-size:18px'><?php echo $row['username']; ?></td>
<td align="center"><font style='font-size:18px'><?php echo $total; ?></td>
<td align="center"><font style='font-size:18px'><a href='upstatu.php?o_id=<? echo $row['o_id'] ?>'><font style='font-size:18px'>แก้ไขสถานะ</a></td>
</tr>

<?php
    }
}else{
    echo "<br>";
    echo "ไม่มีผลลัพธ์";
}
$con->close();
?>

</table>
</center>

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
<?php }?>