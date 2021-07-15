<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>SF BANK</title>
  </head>

  <body background="img/BG.jpg" style="background-size: 100% 100%;">
  <?php
  include 'navbar.php';
  ?>
  
    
 <!-- Activity section -->
      <br><br><br>
      <div class="container  text-center">
          <div class="row " >
               <div class="card col-md-3 mx-auto" style="width: 18rem;">
                    <img src="img/User.jpg" width="300" height="350" class="card-img-top mt-3 i mg" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="card-title">View Customers</h5>
                        <a href="transfermoney.php"><button style="background-color : #000000;">View Customers</button></a>
                  </div>
                </div>  
                  <div class="card col-md-3 mx-auto" style="width: 18rem;">
                    <img src="img/Transaction.jpg" width="300" height="350"class="card-img-top mt-3 i mg"alt="Responsive image">
                    <div class="card-body">
                        <h5 class="card-title">View Transactions</h5>
                       <a href="transactionhistory.php"><button style="background-color : #000000;">View Transaction</button></a>
                  </div>
                </div>
          </div>

      <footer class="text-center mt-5 py-2" style= "background-color :lavendr;">
        <p>&copy 2021. Made by <b>Geetakshi Srivastava</b> 
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>