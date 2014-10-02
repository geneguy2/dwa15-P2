<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<?php require 'logic.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DWA15 - Project 2</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- Google Fonts -->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
  </head>
  <body>
  <!-- Top Line -->
  <div class="topLine">
  <div class="container-fluid">
    <div class="row">
    </div>

  </div>
  </div>
  <!-- Top Line -->

 <!-- Top header -->
<header>
  <div class="bigBackground">

    <div class="container-fluid">
        <div class="row">
  
  <div class="headline">

<h1>xkcd Password Generator</h1>
  </div> 

 
</div>

</div>
</div>
</header>
 <!-- Top header -->

  

  <!-- columns -->
    <div class="container">
        <div class="row">
  <div class="col-md-4">
 <div class="formHolder">
 <div class="password">
       <?php 
//Print the password array 

for ($i = 0; $i < $length; $i++) {
    echo $password[$i] . ' ';

}

if (isset( $_POST['symbols'] )) {
    shuffle ($symbolsList);
       echo $symbolsList[0];
    }

if (isset( $_POST['numbers'] )) {
    shuffle ($numbers);
       echo $numbers[0];
    }


        ?>
 </div>
<form role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="length">Enter a number</label>
        <input type="text" class="form-control" name="length" placeholder="Enter a number between 2-9" />
    </div>
    
     <div class="checkbox">
        <label>
            <input type="checkbox" name="symbols" /> Add a symbol
        </label>
     </div>
     <div class="checkbox">
        <label>
            <input type="checkbox" name="numbers" /> Add a number
        </label>
    </div>

     <button type="submit" name="Submit" value="Submit" class="btn btn-primary"/>Gimme a Password!</button>

</form>
</div> 

 
</div>

 <div class="col-md-8">
  <div>
<img src="images/password_strength2.png" class="img-responsive" alt="Responsive image">

  </div> 
</div>
 
</div>

</div>
 <!-- columns -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
  </body>
</html>
    

 
   

