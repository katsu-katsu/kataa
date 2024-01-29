<html lang='en-US'>
<head>
    <meta http-equals="Content-Type" Content="text/html; charset=utf-8" />
</head>
<body>
<?php
    $con = new mysqli("localhost","root","123456789","shop");

    if($con->connect_error){
        die("Connection failed : ".$con->connect_error);
    }
$con->set_charset("utf8");
?>
<form methodd="GET" id="form" enctype="multipart/form-data" action="">
    <strong>ค้นหาข้อมูล</strong>
    <input type="text" name="search" size="20" value="">
    <input type="submit" value="ตกลง">
</form>

<table>
    <tr>
        <td>รหัส</td>
        <td>ชื่อ</td>
    </tr>

<?php
$search=isset($_GET['search']) ? $_GET['search']:'';
$sql="SELECT * FROM statu WHERE S_Name LIKE '%$search%' ";
$result = $con->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
?>

<tr>
    <td><?php echo $row["S_ID"]; ?></td>
    <td><?php echo $row["S_Name"]; ?></td>
</tr>

<?php
    }
}else{
    echo "0 row";
}
$con->close();
?>
    </table>
</body>
</html>