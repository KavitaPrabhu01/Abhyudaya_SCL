<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Link to CSS -->
    <link rel="stylesheet" href="stylelog.css">
    <!-- Title -->
    <title>HigherGrad</title>
    <style>
        .home{
            min-height:84vh;
        }
    </style>
</head>

<body style="background-color:yellow;">
    
    <!-- Connecting to database -->
    <?php include 'php/partials/dbconnect.php'  ?>  
    <!-- Navigation bar -->
    <?php include 'php/partials/header.php'  ?>
    <div class="home">
    <center style="padding-top:50px;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDlX6y37e9CL7ev-oElde7M0Jxe68CCY9ySQ&usqp=CAU" alt="Welcome"></center>
<marquee style="font-weight:bold;font-size:40px;padding-top:20px;" behavior="scroll" direction="Left" scrollamount="5" style="font-size:30px;">"Education is the most powerful weapon which you can use to change the world."</marquee>
<marquee style="font-weight:bold;font-size:30px;" behavior="scroll" direction="Right" scrollamount="5" style="font-size:30px">Welcome to HigherGrad</marquee>
<div class="card text-center">
    <div class="card-body" style="background-color:orange;">
      <h5 class="card-title" style="color:black;font-weight:bold;">View Top Colleges for Higher Studies</h5>
      <a href="search_colleges.php" class="btn btn-primary">Go</a>
    </div>
  </div>
  <div class="card text-center">
    <div class="card-body" style="background-color:lightgreen;">
      <h5 class="card-title" style="color:black;font-weight:bold;">View Blogs</h5>
      <a href="blogs.php" class="btn btn-primary">Go</a>
    </div>
  </div>
    </div>
    <!-- Footer -->
    <?php include 'php/partials/footer.php'  ?>

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>