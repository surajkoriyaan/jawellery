<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap-5.1.1-dist/css/bootstrap.min.css">
      <title>Login</title>
    <style media="screen">
    body{
    font-family: 'Poppins', sans-serif;
    }
    form{
      padding-top:20px;
    }

  form .mb-3  input[type='checkbox']{
    border:1px solid;
  }
  form button[type="submit"]{
    border-radius:20px;
    background-color:#61acb3;

  }
  .no-outline:focus {
    outline: none;
  }

    </style>
  </head>
  <body>
   <div class="container mt-5">
     <div class="row">
       <div class="col-md-12">
         <div class="card mb-3" style="border:none">
  <div class="row g-0">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">



      <div class="card">
      <center>  <img src="img/banner1.jpg" class="card-img-top" height="200px" alt="...">
</center>
      </div>







    </div>
    <div class="col-md-2">

    </div>
    <div class="col-md-4 ">

    </div>
    <div class="col-md-4">
      <div class="card-body">

        <h2 class="card-title" style="text-align:center">Welcome Back!</h2>
        <p class="card-text"  style="text-align:center">Please login to  your account. </p>
        <form action="index.php" method="POST">
  <div class="mb-3">

    <input type="text" class="form-control" id="uname" name="uname" placeholder="Username" required>

  </div>
  <div class="mb-3">

    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
  </div>
<button type="submit" class="btn btn-primary form-control" name="submit">Login</button>
</form>

      </div>
      <p style="text-align:center">Terms of use Privacy policy</p>
    </div>

  </div>
</div>
       </div>
     </div>
   </div>
  <script src="bootstrap/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
   $con=mysqli_connect("localhost","root","","swarnika_jewellers");
   $uname=$_POST['uname'];
   $pass=$_POST['password'];
   $sql="SELECT * FROM admin WHERE uname='$uname' AND pass='$pass'";
   $run=mysqli_query($con,$sql);
   $c=mysqli_num_rows($run);
   if ($c > 0) {
     while($row=mysqli_fetch_assoc($run)){
       $_SESSION['uname']=$row['uname'];
     }
    header('location:dashboard.php');
   }else {
     ?>
     <script>
       alert('Username and password not match!');
       window.location='index.php';
     </script>
     <?php
   }
}

?>
