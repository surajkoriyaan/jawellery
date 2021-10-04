<?php
$name=$_GET['name'];
$cnumber=$_GET['cnumber'];
$address=$_GET['address'];
$gst1=$_GET['gst1'];

$item=$_GET['item'];
$pcs=$_GET['pcs'];
$wt=$_GET['wt'];
$nw=$_GET['nw'];
$lr=$_GET['lr'];
$mc=$_GET['mc'];
$gst=$_GET['gst'];
$am=$_GET['am'];

$gt=$_GET['gt'];
$sr=$_GET['sr'];
$gm=$_GET['gm'];
$sm=$_GET['sm'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <script src="pdf.js"></script>
    <script src="html2pdf.js"></script>
      <title>slip</title>
    <style media="screen">
    body{
      margin:0;
      padding:0;
  font-family: 'Libre Baskerville', serif;
background: #e8dfdf;
    }
      table td{
        padding-left: 60px;

      }
      .card-title{
        font-weight: 600;
        font-size: 22px;
      }
      span{
        font-size: 16px;
        font-weight: 400;
      }
      table th{
        font-size: 17px;
        font-weight: 600;
      }
    </style>
  </head>
  <body>
    <div class="">
      <button class="btn btn-primary" id="download" style="float: right"> download pdf</button>

    </div>
    <div class="container" id="invoice">
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="card">

  <div class="card-body">
<!--  <center>  <img src="img/banner3.jpg" alt="" height="80px;" width="450px;"></center>-->
    <h4 class="card-title" style="text-align: center">SWARNIKA JEWELLERS</h4>
    <p style="text-align: center">Address : Near Pandit Clinik, Bartand,Dhanbad(Jharkhand)- 826001 <br> Contact No : 9334293008</p>

  <span>Name : <?php echo strtoupper($name); ?></span><br>
    <span>Address : <?php echo strtoupper($address); ?></span>
  <span style="float:right">Date : <?php echo date('d / m / Y'); ?></span><br>
  <span style="float:right">Contact No : <?php echo $cnumber; ?></span>
  <span>Vaoucher No : <?php //echo $vno; ?></span>
  <table class="table table-bordered" style="border: 1px solid">
  <thead>
    <tr>
      <th scope="col">Sr</th>
      <th scope="col">Item Name</th>
      <th scope="col">Pieces</th>
      <th scope="col">Weight</th>
      <th scope="col">Net Wt</th>
      <th scope="col">Lab Rt</th>
        <th scope="col">Making Charge</th>
          <th scope="col">GST Tax</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr style="height: 150px">
      <td>
     <?php
     $c=1;
  foreach ($item as $key => $value) {
    echo $c."<br>";
    $c++;
  }
     ?>
      </td>
      <td>
    <?php
  foreach ($item as $key => $value) {
    echo strtoupper($value)."<br>";
  }
    ?>
      </td>
      <td>
  <?php
  $amnt2=0;
  foreach ($pcs as $key1 => $value1) {
    echo $value1."<br>";
    $amnt2+=intval($value1);
  }

  ?>
      </td>
      <td>
  <?php
  $amnt=0;
  foreach ($wt as $key2 => $value2) {
    echo $value2."<br>";
    $amnt+=intval($value2);
  }

  ?>
      </td>
      <td>
  <?php
  $amt=0;
  foreach ($nw as $key3 => $value3) {
    echo $value3."<br>";
    $amt+=intval($value3);
  }

  ?>
      </td>
      <td>
  <?php
  $lab=0;
  foreach ($lr as $key4 => $value4) {
    echo $value4."<br>";
    $lab+=intval($value4);
  }

  ?>
      </td>
      <td>
  <?php
  $amountt=0;
  foreach ($mc as $key5 => $value54) {
    echo $value54."<br>";
    $amountt+=intval($value54);
  }

  ?>
      </td>
      <td>
  <?php
  $amountttt=0;
  foreach ($gst as $key5 => $value55) {
    echo $value55."<br>";
    $amountttt+=intval($value55);
  }

  ?>
      </td>
      <td>
  <?php
  $amount=0;
  foreach ($am as $key5 => $value5) {
    echo $value5."<br>";
    $amount+=intval($value5);
  }

  ?>
      </td>
    </tr>

    <tr>
      <td colspan="2" style="text-align: center">Total</td>
      <td>
<?php
 if (!$amnt2==0) {
   echo $amnt2;
 }
 ?>
      </td>
      <td><?php
      if (!$amnt==0) {
        echo $amnt;
      }
       ?></td>
      <td ><?php
      if (!$amt==0) {
        echo $amt;
      }
      ?></td>
      <td>
     <?php
     if (!$lab==0) {
        echo $lab;
     }

     ?>
      </td>
      <td>
     <?php
     if (!$amountt==0) {
       echo $amountt;
     }

     ?>
      </td>
      <td>
     <?php
     if (!$amountttt==0) {
        echo $amountttt;
     }

     ?>
      </td>
      <td>
     <?php
     if (!$amount==0) {
       echo $amount;
     }

     ?>
      </td>
    </tr>
  </tbody>
</table>
  <div class="row">
    <div class="col-md-6">
      <table>
        <thead>
          <tr>
            <th>Fine Amount :</th>
            <td>
              <?php
              if (!$amount==0) {
                echo $amount;
              }
             ?>
           </td>
          </tr>
          <tr>
            <th>GST No :</th>
            <td><?php echo $gst1; ?></td>
          </tr>
        <tr>
          <td ></td>
         <td></td>
        </tr>

        </thead>
      </table>
    </div>
    <div class="col-md-6">
      <table>
        <tr>
          <th>Bhavcut Wt :</th>
          <td></td>
        </tr>
        <tr>
          <th>Gold Rate :</th>
          <td><?php echo $gt; ?></td>
        </tr>
        <tr>
          <th>Silver Rate :</th>
          <td><?php echo $sr; ?></td>
        </tr>
        <tr>
          <th>Gold Making :</th>
          <td><?php echo $gm; ?></td>
        </tr>
        <tr>
          <th>Silver Making :</th>
          <td><?php echo $sm; ?></td>
        </tr>

      </table>
    </div>
  </div>
  </div>
</div>
        </div>
      </div>
    </div>
  <script src="bootstrap/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js">
  </script>
  </body>
</html>
