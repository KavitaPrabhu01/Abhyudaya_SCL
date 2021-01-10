<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Link to CSS -->
<link rel="stylesheet" href="stylelog.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(1, 1, 1, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body style="background-color:rgb(107, 202, 219)">
<!-- Navigation bar -->
<?php include 'php/partials/header.php'  ?>
<div class="about-section">
  <h1 style="color:orange;">About Us </h1><br>
  <h3 style="color:yellow;">This website provide real-time information to all the users on higher studies.The user can get information about the universities and available scholorships that help to apply for higher studies.  Along with the data of universities, our aim is to provide top quality resources and blogs which will be beneficial while applying for the universities. </h3>
</div>

<h1 style="text-align:center;padding:10px;">Our Team</h1>
<div class="row">
  <div class="column" >
    <div class="card" style="background-color:rgb(216, 219, 66);">
      <img src="https://media-exp1.licdn.com/dms/image/C5603AQGZgzVOVkUKXg/profile-displayphoto-shrink_400_400/0/1605758251985?e=1615420800&v=beta&t=f4KIZxe3cqnkRK4J76xPmLLz-x_tSI4XlNvRHzIGAd8" alt="vineeth" style="height: 400px;text-align: center;" class="img">
      <div class="container" style="font-weight: bold;text-align: center;">
        <h2>Vineet Nayak S</h2>
        <p class="title">Leader by Nature, Techie by Birth and Jolly by Birth</p>
        <p>Music Lover, Singer, Social-worker and the guy who loves Networking :) Experienced Leader with a demonstrated history of working in the education management and e-Learning industry. Enthusiastic Programmer and Passionate Public Speaker with interests in music and blogging.</p>
        <p>Email: vineetnayak777gmail.com</p>
        <p><a href="https://www.linkedin.com/in/vineetnayak777/">
            <button class="button" style="background-color:blue">Connect</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card" style="background-color:rgb(216, 219, 66);">
      <img src="https://media-exp1.licdn.com/dms/image/C5603AQGA54P9cEn60A/profile-displayphoto-shrink_400_400/0/1604933658932?e=1615420800&v=beta&t=cI-0iBtEZeoOZmkHpbAVUX7zEp0T4PXm9ay-nhLM330" alt="vineeth" style="height: 400px;text-align: center;" class="img">
      <div class="container" style="font-weight: bold;text-align: center;">
        <h2>Kavitha Prabhu</h2>
        <p class="title">Enthusiastic in learning new things!</p>
        <p>I am Kavita Prabhu, currently pursuing third year Bachelor of Engineering in Telecommunication Engineering in Dr. Ambedkar Institute of Technology, Bangalore. I'm a tech enthusiast. In my leisure time I love to read novels, enjoy listening to music, play badminton. I enjoy in traveling different places and explore new things.</p>
        <p>Email: kavitaprabhu1999@gmail.com</p>
        <p><a href="https://www.linkedin.com/in/kavita-prabhu-002196181/">
            <button class="button" style="background-color:blue">Connect</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card" style="background-color:rgb(216, 219, 66);">
      <img src="https://media-exp1.licdn.com/dms/image/C5635AQEqZlDxf0bmsg/profile-framedphoto-shrink_400_400/0/1609485913074?e=1610301600&v=beta&t=MqNneNnXxXwmn_O4VSDlnjWv-xu5wxmFcbpl29mJONk" alt="vineeth" style="height: 400px;text-align: center;" class="img">
      <div class="container" style="font-weight: bold;text-align: center;">
        <h2 style="font-weight: bold;text-align: center;">Suraj Pai K</h2>
        <p class="title">Techie by passion and art lover by interest.</p>
        <p>I am currently pursuing CSE from Canara Engineering College, Mangalore.I am an Enthusiastic learner, and leader. I am interested Software Development and making comedy videos in youtube. Other than that I love to dance and play badminton. My ambition is to learn new things in my life. </p>
        <p>Email: surajpai50612@gmail.com</p>
        <p><a href="https://www.linkedin.com/in/suraj-pai-k-20b1b2181/">
            <button class="button" style="background-color:blue">Connect</button></a></p>
      </div>
    </div>
  </div>
</div>
    <div class="row">
  <div class="column" >
    <div class="card" style="background-color:rgb(216, 219, 66);">
      <img src="https://media-exp1.licdn.com/dms/image/C5603AQFvkqny3-4n0w/profile-displayphoto-shrink_400_400/0/1608636835118?e=1615420800&v=beta&t=ExkQNdGcUZDDBGgWXvDwddav6Mz7gtS_grHcZwjgon0" alt="vineeth" style="height: 400px;text-align: center;" class="img">
      <div class="container" style="font-weight: bold;text-align: center;">
        <h2>Suraj Nayak</h2>
        <p class="title">I am passionate about my work</p>
        <p>I am Suraj Nayak, studying computer science engineering in N.M.A.M.Institute of Technology, Nitte. I am passionate about work as I love what I do. I am an enthusiastic student who interested in learning new skills. I am insterested in learning programming languages. I am also learning photoshop editing. I am interested to learn about Indian history, Indian philosophy, and Science. I am the person who enjoys meeting new friends and learning about their lives. My hobbies are reading books, playing games.</p>
        <p>Email: surajnayakmuniyal@gmail.com</p>
        <p><a href="https://www.linkedin.com/in/suraj-nayak-797787191/">
    <button class="button" style="background-color:blue">Connect</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card" style="background-color:rgb(216, 219, 66);">
      <img src="https://media-exp1.licdn.com/dms/image/C5103AQG6ZunV1f0RSA/profile-displayphoto-shrink_400_400/0/1567182416435?e=1615420800&v=beta&t=XkJhFKmUGvIzL0BXfVUcDiVY_I4MgVYZxUW5gZctc8w" alt="vineeth" style="height: 400px;text-align: center;" class="img">
      <div class="container" style="font-weight: bold;text-align: center;">
        <h2>Sridhar J P</h2>
        <p class="title">"What can be better than this..?" is always Mandatory after every Success.</p>
        <p>I am an Enthusiastic Student and tries always to attain satisfaction with my work. I am curious to gain knowledgeable in the field of Music, Indian philosophy and Science.I am learning Hindustani Classical Music from past 14 years under the guidance of my Guru Vid. Smt. Vasudha Sharma at the Institute Vedanada Pratishtana ®, Sadaguru Shastriya Sangeet Vidyalaya, Sagar. With my Gurubandhus, I have started a Musical Band named “NomThom”.</p>
        <p>Email: shridhar.jp@gmail.com</p>
        <p><a href="https://www.linkedin.com/in/shridhar-jansale-031a87167/">
            <button class="button" style="background-color:blue">Connect</button></a></p>
      </div>
    </div>
        </div>
</div>
<!-- Footer -->
<?php include 'php/partials/footer.php'  ?>
<script>
    myfunction()
    {
        window.location.href="https://www.linkedin.com/in/suraj-nayak-797787191/";
    }
    </script>
</body>
</html>
