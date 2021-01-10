<!DOCTYPE html>
<html lang="en">
    
    <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Home Page</title>
          <!--CSS-->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Link to CSS -->
    <link rel="stylesheet" href="stylelog.css">
          <!--Bootstrap-->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <!--Js-->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    </head>
    
    <body style="background-color:#565de8">
    <!-- Navigation bar -->
<?php include 'php/partials/header.php'  ?>
<center style="padding-top:30px;"><img src="https://cdn4.wpbeginner.com/wp-content/uploads/2018/07/whatisblog.png" alt="Welcome to Blog Page"></center>
<marquee behavior="scroll" direction="Left" scrollamount="5" style="font-size:30px;font-weight:bold;color:white;">Welcome to the Blogpage of HigherGrad</marquee>
<marquee behavior="scroll" direction="Right" scrollamount="5" style="font-size:30px;font-weight:bold;color:white;">"The cure for boredom is curiosity. There is no cure for curiosity."</marquee>
<div class="card text-center" style="font-weight:bold;">
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">Financial Requirement Blog</h5>
      <a href="https://www.wemakescholars.com/blog/" class="btn btn-primary">Go</a>
    </div>
  </div>
  <div class="card text-center" style="font-weight:bold;">
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">Higher Eductaion Blog</h5>
      <a href="https://ischoolconnect.com/blog/" class="btn btn-primary">Go</a>
    </div>
  </div>
  <marquee behavior="scroll" direction="Left" scrollamount="5" style="font-size:30px;font-weight:bold;color:white;">We will be adding more blogs soon ...</marquee>
  <!-- Navigation bar -->
<?php include 'php/partials/footer.php'  ?>
</body>

</html>