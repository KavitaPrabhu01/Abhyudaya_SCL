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
        <link rel="stylesheet" href="stylelog.css">
          <!--Bootstrap-->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <!--Js-->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    </head>
    
    <body style="background-color:#eb7134;">
      <!-- Connecting to database -->
    <?php include 'php/partials/dbconnect.php'  ?>  
    <!-- Navigation bar -->
    <?php include 'php/partials/header.php'  ?>
<center style="padding-top:50px;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfqiu5xnuaXpSnpfc4UZ73MOMMtjGVSn2nOw&usqp=CAU" alt="Welcome"></center>
<marquee behavior="scroll" direction="Left" scrollamount="5" style="font-size:30px;font-weight:bold;">Interested in studying abroad here are the few colleges available</marquee>
<marquee behavior="scroll" direction="Right" scrollamount="5" style="font-size:30px;font-weight:bold;">"Education is the most powerful weapon which you can use to change the world."</marquee>
<div class="card text-center" >
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">Stanford University</h5>
      <a href="https://gradadmissions.stanford.edu/" class="btn btn-primary">Go</a>
    </div>
  </div>
  <div class="card text-center" style="background-color:#59b833;">
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">Harvard University</h5>
      <a href="https://www.harvard.edu/admissions-aid" class="btn btn-primary">Go</a>
    </div>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">Massachusetts Institute of Technology</h5>
      <a href="https://www.mit.edu/admissions-aid/" class="btn btn-primary">Go</a>
    </div>
  </div>
  <div class="card text-center" style="background-color:#59b833;">
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">California Institute of Technology</h5>
      <a href="https://www.caltech.edu/" class="btn btn-primary">Go</a>
    </div>
  </div> 
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">University of Cambridge</h5>
      <a href="https://www.caltech.edu/" class="btn btn-primary">Go</a>
    </div>
  </div>
  <div class="card text-center" style="background-color:#59b833;">
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">Princeton University</h5>
      <a href="https://www.princeton.edu/admission-aid" class="btn btn-primary">Go</a>
    </div>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">Yale University</h5>
      <a href="https://www.yale.edu/admissions/graduate-professional-schools" class="btn btn-primary">Go</a>
    </div>
  </div>
  <div class="card text-center" style="background-color:#59b833;">
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">University of Oxford</h5>
      <a href="https://www.ox.ac.uk/admissions/graduate" class="btn btn-primary">Go</a>
    </div>
  </div>
  <!-- Navigation bar -->
  <?php include 'php/partials/footer.php'  ?>
</body>

</html>