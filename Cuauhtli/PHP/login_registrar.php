<?php
 include("conexion.php");

 if (isset($_POST['user']));
     $username = $_POST['user'];
     $password = $_POST['pass'];

     $sql = "select * from login where username ='$username' and password ='$password'";
     $result = mysqli_query($conn,$sql);
     $row =mysqli_fetch_array($result, MYSQLI_ASSOC);
   
   //se intentó poner un script cada vez que hubiera un falla a la base de datos
     # $count = mysql_client_($result);

   # if($count == 1){
   #   header("<Location:portada.html");
   #}
   #else{
   #  echo '<script>
   #    windows.Location.heref="index.php"
   #         alert("Login failed.Invalid username or password !!!") 
   #       </script>';
   #}
?>