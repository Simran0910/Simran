<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <style>
body{
            overflow-x: hidden
        }
.topnav {
  overflow: hidden;
  background-color: #1a75ff;
}
h1 {
   font-family: 'Patua One', cursive;
    color: black;
}
h2 {
   font-family: 'Patua One', cursive;
    color: black;
}
hr{
  height:2px;
  border-width:auto;
  color:#b50d29;
  background-color:#b50d29;
}
h3{
   font-family: 'Patua One', cursive;
    color: black;
  
}
p{
  font-size: 18px;
}
@media screen and (min-width: 480px) {
  .container {
    font-size: 20px;
  }
}

/* If screen size is 600px wide, or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {
  .container {
    font-size: 20px;
  }
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

.topnav a.active {
  background-color: white;
  color: #b50d29;
}
hr{
  color: red;
}
.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
@media screen and (max-width: 600px) and (min-width: 480px){
   img {

   width: 100%;
     height: 100%; /* 5px rounded corners */
  }
    body{
        font-size: 15px;
    }
}

  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

.container-fluid{
  background-color: #c7bdb1;
}
.container {
    border: 1px solid #e6e6e6;
    padding: 10px;
    box-shadow: 7px 9px #b3b3b3;
    font-family: 'Nunito', sans-serif;
}
.container .row footer-content hidden-xs{
  position: fixed;
   
   bottom: 0;
   width: 100%;
}
        .button {
  text-align: center;
  cursor: pointer;
  outline: none;
  box-shadow: 0 9px #b5aeae;
}

.button:active {
  box-shadow: 0 5px  #88848c;
  transform: translateY(1px);
}
        #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #b50d29;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 60px;
}

#myBtn:hover {
  opacity: 0.8
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 240px;
  background-color: black;
  position: absolute;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  font-size: 20px;
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #b50d29;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #b50d29;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 70%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
   
  }
}    

.dropdown-container {
  display: none;
  background-color: #00004d;
  padding-left: 0px;
}
.dropdown-btn {
  padding: 10px 10px 10px 10px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  border: none;
  background-color: black;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.dropdown-btn:hover {
  color: white;
  background-color: #b50d29;
}

</style>
</head>
<body>
 
        <div class="container-fluid" style="background-color: #b50d29;">
  
      <div class="row" style="background-color: #b50d29;">
       <div class="col-md-9 order-same order-md-2">
            <div class="date">
    <p class="headernew"><span id="datetime"></span></p>
  </div>
</div>
  <div class="col-md-3 order-same order-md-2">
                                                <div class="icons">
       <a href="https://www.facebook.com/BPRDIndia/"><i class="fa fa-facebook-square" align="right" style="font-size:36px;color:white"></i></a>
     <a href="https://twitter.com/BPRDIndia?s=20"><i class="fa fa-twitter-square" style="font-size:36px;color:white"></i></a>                
    <a href="https://www.youtube.com/channel/UCGhrg_cnnGuhwXfCU16kYow"><i class="fa fa-youtube-square" style="font-size:36px;color:white"></i></a>
</div>
</div>
        </div>
      </div>

         <div class="container-fluid" style="background-color: white;">
    
      <div class="row">
        <div id="logo" class="col-md-8 col-sm-8 col-xs-12 animated fadeInDown">
          <h1 class="logo">
            <a href="" title="Home">
               <img src="images/header1.jpeg" alt="Home" style="">
            </a>
          </h1>
        </div>
      <div class="col-md-4 col-sm-4 col-xs-12 search ">
        
        <div class="polaroid">
          <img src="images/saynotocrime.jpg">
        </div>
          
        </div>
      </div>
    </div>
  </div>
<nav class="navbar navbar-expand-md  navbar-dark" style=" width: 100%; background-color: black; padding-top: 0px; padding-bottom: 0px;">
  
 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Emergency Complaint</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Report crime</a>
      </li>    
         <li class="nav-item">
        <a class="nav-link sactive" href="aware">Crime Awareness</a>
      </li>  
<li class="nav-item">
        <a class="nav-link" href="cyberaware">Cyber Awareness</a>
      </li>         <li class="nav-item">
        <a class="nav-link" href="helpline">Helpline</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="resources">Contact Us</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="faq">FAQ</a>
      </li> 
      <li></li>
    </ul>
  </div> 

   
</nav>
 <br>

<div class="container-fluid">
 <div class="row">
  

   <div class="col-md-2" style="background-color: black;">
    <div class="sidebar">
    <a  href="">Types Of Crime</a><button class="dropdown-btn">Cyber Crime
    <i class="fa fa-caret-down"></i>
  </button>
   <div class="dropdown-container">
    <a href="jacking">Web-Jacking</a>
    <a href="hacking">Hacking</a>
    <a href="cpornography">Child Pornography</a>
    <a href="sexting">Sexting</a>
    <a href="phishing">Phishing</a>
    <a href="electronicfrogery">Electronic Forgery</a>
      <a href="#">Email Abuse</a>
      <a href="threatning">Threatning Messages</a>
      <a href="defamatory">Defamatory Messages</a>
      <a href="spoofing">Email Spoofing</a>
  </div>
        <button class="dropdown-btn">Personal Crime
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="assault">Assualt And Battery</a>
    <a class="active" href="kidnapping">Kidnapping</a>
    <a href="#">Homicide</a>
    <a href="#">False Pretenses</a>
    <a href="women">Crime Against Women</a>
    <a href="#">Crime Against Children</a>
  </div>
   <button class="dropdown-btn">Property Crime
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Theft Crimes</a>
    <a href="#">Arson Crime</a>
    <a href="whitecollar">White Collar Crime</a>
    <a href="#">Reciept OF Stolen Goods</a>
    <a href="vandalism"> Vandalism Crime</a>
      <a href="cyber">Cyber Crime</a>
  </div>
   <button class="dropdown-btn">Inchoate Crime
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Criminal Attempt</a>
    <a href="#">Conspiracy</a>
    <a href="#">Aiding Abetting</a>
    <a href="#">Burglary</a>
  </div>
   <button class="dropdown-btn">Statutory Crime
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
     <a href="#">Alcohol Crime</a>
    <a href="drug">Drug Crime</a>
    <a href="#">Traffic Offence</a>
    <a href="#">Bigamy</a>
  </div>
   <button class="dropdown-btn">Financial Crime
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="financialfraud">Fraud</a>
    <a href="money">Money Laundering</a>
    <a href="bribery">Bribery</a>
    <a   href="terrorist">Terrorist Financing</a>
  </div>

 
</div>
   </div>

   <div class="col-md-10" style="background: white;">  
    <h1 class="Display-1">Kidnapping</h1>
    <h4>(Sec. 359 IPC) </h4>
    <hr >
    <div class="row">
        <div class="col-md-8">
            <p>The term 'Kidnapping' literally means, "carrying away a person against his/her will or against the will of the guardian in case of a minor".<br>
              <br>
              The term 'Kidnapping' is derived from the word 'kid', which means child, and 'nap', which means, "to steal". The word 'kidnapping' means "child stealing". However, it is not confined or restricted to child stealing. It extends to all.</p>
                      </div>
        <div class="col-md-4">
               <img src="images\kidnapping\kidnapper.jpg" style="width: 97%; height: 90%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%" >       
        </div>
    </div>
    <div class="row">
<div class="col-md-12">
    <h2>Definition of kidnapping in Indian Penal Code</h2>
    <hr>
    <p>
      In criminal law, kidnapping is the taking away or transportation of a person against the persons will, usually to hold the person in false imprisonment, a confinement without legal authority. This may be done for ransom or in furtherance of another crime, or in connection with a child custody dispute.
    </p>
    <p>
      Whoever takes or entices any minor under sixteen years of age, if a male, or under eighteen years of age, if a female, or any person of unsound mind out of the keeping of the lawful guardian of such minor or person of unsound mind, without the consent of such guardian, is said to kidnap such minor or person from lawful guardianship.
    </p>
</div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Kinds of Kidnapping (Sec.359):</h2>
    <hr>
    <p>According to Sec.359, kidnapping is of two types:</p>
    <ol>
      <li>Kidnapping from India (Sec.360)</li>
      <li>Kidnapping from lawful guardianship (Sec.361)</li>
    </ol>
    <h3>1. Kidnapping from India (Sec.360)</h3>
       <p>It means carrying away a person (conveying a person) beyond the territorial limits of India against its consent. It is an offence under Sec.360, if a boy below the age of 16 years and a girl below the age of 18 years is conveyed beyond the limits of India even with his/her consent.</p>
    <h3>2. Kidnapping from lawful guardianship (Sec.361)</h3>
       <p>According to Sec.361 IPC enticing or taking away of a minor girl below 18 years of age, or a minor make below 16 years of age or any person of unsound mind from the lawful custody without any consent of such guardian, is called "Kidnapping".</p>
       <p>
       There is an exception to this Section, which provides that this Section does not extend to the act any person who in good faith believes himself to be entitled to the lawful custody of such child, unless such act is committed for an immoral or unlawful purpose.</p>
  </div>
</div>
  <h2>Causes of Kidnapping</h2>
<hr>
<div class="row">
    <div class="col-md-8">
    
    
            <h3>Unemployment</h3>
        <p>
            Studies show that The high unemployment rate in many countries has forced citizens to find other ways to make money—and some of those ways are illegal. Kidnapping a rich person can be a lucrative business. A cash-strapped unemployed person may believe that when he kidnaps someone who is rich, he may be able to become rich himself.</p>

        
</div>
<div class="col-sm-4" style="padding-top: 40px;">
    <img src="images\kidnapping\kidnapping.jpg" style="width: 100%; height: 83%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
   </div>
</div>
    <div class="row col-md-12">
      <h3>Poverty</h3>
        <p>
            Poverty can propel people toward crime as a way to make ends meet. Sometimes, a person who is poor might believe that kidnapping or other illegal acts could provide the necessary money to start a new life—a life that will no longer involve crime.
        </p>
        <h3>
            Illiteracy
        </h3>
        <p>
            Illiteracy is the inability to read or write. When people know how to read and write, they can gain the skills they need in order to become educated, get a job, and live a productive life. Literacy and education can also be an important foundation upon which to build a deeper understanding of moral judgment and decision making.
             </p>
        <h3>Politics </h3>
        <p>
           Corrupt politicians may arrange for the kidnapping of their opponents. Sometimes, they do this so that their opponents will make concessions or change their votes on the issues.
        </p>
        <h3> Greed </h3>
        <p>
            Some people are not contented with what they have and wish they could buy more and more things—whether it's fancy clothes, cars, houses, or jewelry. This kind of persons may turn to crime to make more money. A wicked businessman can kidnap his business rival for a large ransom to become richer.
        </p>
        
   </div>
   <div class="row">
     <div class="col-md-6">
       <h2>Punishment for Kidnapping (Sec.363):</h2>
       <hr>
        <p>
          Section 363 prescribes punishment for kidnapping. Whoever kidnaps any person from India or from lawful guardianship shall be punished with imprisonment up to 7 years and also liable for fine.
        </p>
     </div>
     <div class="col-md-6">
      <br>
       <img src="images\kidnapping\punishment.jpg" height="250" style=" width: 100%; height: 80%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
     </div>
   </div>
   <h1>Kidnapping Preventions  (Safety Measures)</h1>
   <hr>
   <br>
   <h2>Do Not Accept Rides Offered By Strangers</h2>
   <br>
  <div class="row">
  <div class="col-md-6">
     <img src="images\kidnapping\lift.jpg"  style=" width: 100%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
  </div>
  <div class="col-md-6">
  <p>
    Once you get into a stranger's car, you are at their mercy. They could either incapacitate you or hold you hostage and you might not have an opportunity to defend yourself.
  </p>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-6">
    <h2>Secure Your Home</h2>
    <p>
      Kidnappers don't always snatch their victims off the streets. They can sometimes begin the attack right in your own home. To prevent kidnapping in your own property, close your doors and gates and install locks or alarms. The more secure you are inside, the more difficult you will be to abduct.
    </p>
  </div>
   <div class="col-md-6">
    <br>
    <br>
    <img src="images\home.jpg" style="width: 90%; height: 75%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
  </div>
</div>
<br>
<h2>Let Someone Know Where You're Going</h2>
  <br>
<div class="row">
  <div class="col-md-6" style=" padding-left: 30px;">
    <img src="images\kidnapping\inform.jpg"   style=" width: 90%;  height: 76%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
  </div>
  <div class="col-md-6">
    <p>
      If you must meet a new acquaintance, make sure someone knows where you're going and who you're meeting. Leave word with a family member or friend where you're headed and if possible, give the name of the person you're about to meet and other details you might know.
    </p>
     <p>Meet them in a crowded place or somewhere other people can see you. Heavy human traffic is a major deterrent for kidnappers and may just save your life.
    </p>
  </div>
</div>
<br>
<h2>Tell Your Child to Never Talk to Strangers</h2>
<br>
<div class="row">
  <div class="col-md-8">
    <p>
      Train your children to avoid strangers, even if they seem friendly and offer gifts. If a stranger asks for help, tell your child to refuse and to call the attention of an adult immediately. If a gift is being offered, tell them not to accept anything.
    </p>
  </div>
  <div class="col-md-4">
    <img src="images\kidnapping\stranger.jpg" style="width: 100%; height: 80%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%" >
  </div>
</div>

</div>
</div>
</div>
    <button id="myBtn" title="Go to top"  style="font-size:25px;color:white">Register</button>
        
    <br> 
      <script>
  //Get the button
  var mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "block";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script> 
<br>
  <i onclick="topFunction()" id="myBtn" title="Go to top" class="fa fa-angle-double-up" style="font-size:36px;color:white"></i>
        <footer class="page-footer" style="background-color: black;">

  <!-- Copyright -->
    <div class="row footer-bottom">
        <div  style ="padding :25px;margin-right:0px; text-align: center; color: white;"class="col-md-10">
            Site developed and maintained by Team Code Gear,<a href="https://www.facebook.com/pages/gitam-kablana/384890248243377" style="color: white;">GITAM</a> , Haryana. Send your feedbacks to <a href="https://mail.google.com/mail/u/1/#search/codegearsih2020%40gmail.com"  style="color: white;">codegearsih2020@gmail.com</a> 
        </div>
    </div>
  </div>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html>