<?php
session_start();
if (!isset($_SESSION['uname'])) {
  header('location:index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/bootstrap-5.1.1-dist/css/bootstrap.min.css">
  <script src="table/js/jquery.js"></script>
  <script src="table/media/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="table/media/css/jquery.dataTables.min.css">

    <title>dashboard</title>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#DataTable").dataTable();
      })
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        var html='<div class="row" id="submain">'+
        '<div class="col-md-3">'+
        '<label for="inputCity" class="form-label">Item Name</label>'+
        '<input type="text" class="form-control" id="item" name="item[]">'+
        '</div>'+'<div class="col-md-3">'+
            '<label for="inputState" class="form-label">Pieces</label>'+
          '<input type="text" class="form-control" id="pcs" name="pcs[]">'+
          '</div>'+
          '<div class="col-md-3">'+
            '<label for="inputZip" class="form-label">Weight</label>'+
            '<input type="text" class="form-control" id="wt" name="wt[]">'+
          '</div>'+
          '<div class="col-md-3">'+
          '<label for="inputCity" class="form-label">Net Wt</label>'+
            '<input type="text" class="form-control" id="nw" name="nw[]">'+
        '</div>'+
          '<div class="col-md-3">'+
            '<label for="inputState" class="form-label">Lab Rt</label>'+
          '<input type="text" class="form-control" id="lr" name="lr[]">'+
          '</div>'+

          '<div class="col-md-3">'+
          '<label for="inputState" class="form-label">Making Charge</label>'+
        '<input type="number" class="form-control" id="mc" name="mc[]" value="">'+
          '</div>'+
          '<div class="col-md-3">'+
            '<label for="inputState" class="form-label">GST Tax</label>'+
          '<input type="number" class="form-control" id="gst" name="gst[]" value="">'+
        '</div>'+
        '<div class="col-md-2">'+
            '<label for="inputZip" class="form-label">Amount</label>'+
            '<input type="text" class="form-control" id="am" name="am[]">'+
          '</div>'+
          '<div class="col-md-1">'+
          '<button type="button" id="remove" class="btn btn-danger" style="margin-top: 32px;" name="button">-</button>'+
        '</div>'+
        '</div>';

        var x=1;
        $("#add").click(function(){
          $("#main").append(html);
        });
        $("#main").on('click','#remove',function(){
          $(this).closest('#submain').remove();
        });
      });
    </script>
    <style media="screen">
    body{
      background: #e8dfdf;
    }
    div ul li button{
       float: right;
     }
    </style>
  </head>
  <body>
  <div class="container">
    <div class="row">

      <div class="col-md-12" style="margin-top: 5px; margin-bottom: 10px;">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Slip</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Details</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="card" style="margin-bottom: 15px;">
   <div class="card-body">
     <form class="row g-3" action="slipdf.php" method="GET" style="margin-top: 2px;margin-bottom: 5px;">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="name" value="">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Contact No</label>
    <input type="number" class="form-control" id="cnumber" name="cnumber" value="">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Address</label>
    <textarea name="address" class="form-control" rows="1" cols="2"></textarea>

  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">GST No</label>
    <input type="text" class="form-control" id="gst1" name="gst1" value="">
  </div>
  <hr>
  <div class="col-md-12" id="main">
    <div class="row" id="submain">
      <div class="col-md-3">
        <label for="inputCity" class="form-label">Item Name</label>
        <input type="text" class="form-control" id="item" name="item[]" value="">
      </div>
      <div class="col-md-3">
        <label for="inputState" class="form-label">Pieces</label>
      <input type="number" class="form-control" id="pcs" name="pcs[]" value="">
      </div>
      <div class="col-md-3">
        <label for="inputZip" class="form-label">Weight</label>
        <input type="number" class="form-control" id="wt" name="wt[]" value="">
      </div>
      <div class="col-md-3">
        <label for="inputCity" class="form-label">Net Wt</label>
        <input type="number" class="form-control" id="nw" name="nw[]" value="">
      </div>
      <div class="col-md-3">
        <label for="inputState" class="form-label">Lab Rt</label>
      <input type="number" class="form-control" id="lr" name="lr[]" value="">
      </div>
      <div class="col-md-3">
        <label for="inputState" class="form-label">Making Charge</label>
      <input type="number" class="form-control" id="mc" name="mc[]" value="">
      </div>
      <div class="col-md-3">
        <label for="inputState" class="form-label">GST Tax</label>
      <input type="number" class="form-control" id="gst" name="gst[]" value="">
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Amount</label>
        <input type="number" class="form-control" id="am" name="am[]" value="">
      </div>
      <div class="col-md-1">
        <button type="button" id="add" class="btn btn-primary" style="margin-top: 32px;" name="button">+</button>
      </div>
    </div>
  </div>

<hr>
<div class="col-3">
  <label for="inputAddress2" class="form-label">Gold Rate</label>
  <input type="number" class="form-control" id="gt" name="gt" value="">
</div>
<div class="col-3">
  <label for="inputAddress2" class="form-label">Silver Rate</label>
  <input type="number" class="form-control" id="sr" name="sr" value="">
</div>
<div class="col-3">
  <label for="inputAddress2" class="form-label">Gold Making</label>
  <input type="number" class="form-control" id="gm" name="gm" value="">
</div>
<div class="col-3">
  <label for="inputAddress2" class="form-label">Silver Making</label>
  <input type="number" class="form-control" id="sm" name="sm" value="">
</div>
</div>

  <div class="col-12">
  <center>  <button type="submit" class="btn btn-primary" style="height: 40px;width: 320px; margin-bottom: 10px;">Submit</button></center>
  </div>
</form>
   </div>

    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="card">
    <div class="card-body">
      <table id="DataTable" class="table table-striped table-hover table-bordered" border="1">
    <thead>
      <tr>
        <th scope="col">Sn</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Number</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Suraj kumar</td>
        <td>Dhanbad</td>
        <td>1234567890</td>
        <td>15/09/2021</td>
        <td>
  <button type="button" class="btn btn-primary" name="button">View</button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Anand kumar</td>
        <td>Dhanbad</td>
        <td>0987654321</td>
        <td>15/09/2021</td>
        <td>
  <button type="button" class="btn btn-primary" name="button">View</button>
        </td>
      </tr>
    </tbody>
  </table>
    </div>
  </div>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
  </div>
      </div>
    </div>
  </div>
    <script src="bootstrap/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
