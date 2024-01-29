<?php 
session_start();
   include("condb.php");
        if(isset($_POST['username'])){
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM user_dt Where username='$username' and password='$password' ";
               
                  $result = mysql_query($sql);
                  
                  if(mysql_num_rows($result)==1){
                      $row = mysql_fetch_array($result);
                      $_SESSION["userID"] = $row["username"];
                      $_SESSION["user"] = $row["name"]." ".$row["lastname"];
                      $_SESSION["userlevel"] = $row["level"];
                      if($_SESSION["userlevel"]=="Admin"){
                        Header("Location: indexa.php");
                      }
                      if ($_SESSION["userlevel"]=="member"){ 
                        Header("Location: index.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                  }
        }else{
             Header("Location: login.php"); 
        }
?>