<!DOCTYPE html>
<html>
<head>
<title>Articles3</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Link to CSS -->
<link rel="stylesheet" href="stylelog.css">
<meta name="keywords" content="HTML, CSS, JavaScript">
<meta http-equiv="refresh" content="30">

<style>
  body {
    background-color: rgb(213, 234, 241);
  }
</style>

<style> 
  body {
    background-image: url("img_tree.gif"), url("paper.gif");
    background-color: #87e4e4;
  }
</style>

<style>
  h1 {text-align: center;}
  p {text-align: center;}
  div {text-align: center;}
</style>

<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 3px solid rgb(0, 0, 0);
  background-color: #ffffff;
  width: 20%;
  height: 630px;
}


.tab button {
  display: block;
  background-color: inherit;
  color: rgb(0, 0, 0);
  padding: 30px 20px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 25px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: rgb(24, 22, 23);
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: rgb(93, 255, 101);
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 3px solid rgb(0, 0, 0);
  width: 80%;
  border-left: none;
  height: 630px;
  display: none;
}

/* Clear floats after the tab */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<!-- Navigation bar -->
<?php include 'php/partials/header.php'  ?>
<h1 style="padding-top:20px;font-weight:bold;">Articles</h1>

<div class="tab" >
  <button class="tablinks" onmouseover="openCity(event, 'M.TECH.')" style="font-weight:bold;">M.TECH.</button>
  <button class="tablinks" onmouseover="openCity(event, 'MS')" style="font-weight:bold;">MS</button>
  <button class="tablinks" onmouseover="openCity(event, 'MBA')" style="font-weight:bold;">MBA</button>
</div>

<div id="M.TECH." class="tabcontent" >
  <h3 style="font-weight:bold;">M.TECH.</h3>
  <p>Article Coming Soon...</p>
</div>

<div id="MS" class="tabcontent" >
  <h3 style="font-weight:bold;">MS</h3>
  <p>Article Coming Soon...</p>
</div>

<div id="MBA" class="tabcontent" >
  <h3 style="font-weight:bold;">MBA</h3>
  <h5>>Why should you pursue MBA Abroad?</h5>
<p>Pursuing an MBA abroad can open an array of opportunities for you. However, aspirants always have one question in their mind, which country is best for MBA? MBA is one of the most sought-after courses today but it is essential to keep in mind that why study MBA abroad and the kind of university and MBA program you attend also has connotations related to it which can help open doors based on the university's reputation. Hence, it is important to choose the place to study wisely before applying. It is not easy to determine best country for MBA as there are various factors which needs to be consider. Thus, in this article, we will inform you about 5 best countries in the world to study MBA.</p>

<h5>MBA in the United States of America</h5>
<p>The US is one of the most popular business school destinations with the most number of prestigious B-schools in the world. Pursuing an MBA from the top-notch universities of USA is an advantage in itself, but along with it students also get strong infrastructural support, great internships and exposure to latest content and technology besides practical training through projects. Exposure to the business environment during internships in top companies grooms students into future entrepreneurs and business executives.
The main factor that differentiates US B-schools from rest of the world is the fact that American MBA is all about expanding your network and knowing the right people. Ultimately it will be this network of people which will help budding entrepreneurs.
Those who want to learn how to do MBA from abroad should know how to get into US B-schools, here, the quality of work experience is given a bit more preference over academic records. It is mandatory for the applicants to clear GMAT and English proficiency tests like TOEFL or IELTS.</p>

<h5>Cost of Studying MBA in the USA</h5>
<p>Pursuing an MBA in the USA can prove to be a costly affair. It can cost anywhere between INR 60 lakhs to 1 crore or more. However, with enormous post-study opportunities and great learning experience in one of the top MBA colleges in the world, it is worth to invest. 

<h5>MBA in the United Kingdom</h5>
<p>The United Kingdom has always been the favorite study abroad destination among Indian students. London is one of the leading finance and banking centers, and other cities of the UK offer excellent opportunities in the services industry. This reflects in UK business schools' international reputation not only through a rigorous academic approach but also through high salaries and excellent job opportunities after graduating. The fact that the UK has a strong Indian population base is what makes this country an attractive destination for Indian students, as students traveling from India find it a lot more comforting to be around people with a similar background.</p>

</div>

<div class="clearfix" style="padding-bottom:20px;"></div>
<!-- Navigation bar -->
<?php include 'php/partials/footer.php'  ?>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</body>
</html> 
