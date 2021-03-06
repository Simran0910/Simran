<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <style>
*, *::before, *::after {
    box-sizing: inherit;
}

main {
    position: relative;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    min-height: 640px;
}

body{
  overflow-x: hidden;
}
.topnav {
  overflow: hidden;
  background-color: #1a75ff;
}
h1 {
  font-family: 'Rowdies', cursive;
    color: black;
    font-size: 60px;
}
h2 {
   font-family: 'Rowdies', cursive;
    color: black;
}
hr{
  height:2px;
  border-width:auto;
  color:#b50d29;
  background-color:#b50d29;
}
.title{
  font-family: 'Rowdies', cursive;
    color: black;
  
}
p{
  font-family: 'Slabo 27px', serif;
  font-size: 24px;
}
li{
  font-size: 20px;
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
/*.container {
    border: 1px solid #e6e6e6;
    padding: 10px;
    box-shadow: 7px 9px #b3b3b3;
    font-family: 'Nunito', sans-serif;
}*/
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

.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 7px 9px #b3b3b3;
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
  text-align: center;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding: 40px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 40px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
 


a {
    text-decoration: none;
}

::selection {
    color: #fff;
    background-color: #005AEE;
}

/* ======================== */
/* Just Copy The Code Below */

/* ------------- */
/* Content Style */
/* ------------- */

.card-container {
    position: relative;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 40px;
    width: 100%;
    max-width: 1200px;
    height: auto;
    margin: 20px;
    font-family: 'neuzeit-grotesk', sans-serif;
    font-weight: 300;
    font-style: normal;
    font-size: 1em;
    line-height: 1.5;
    color: #303336;
}

.card {
    height: 470px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 40px 40px -20px #8fc7d544;
    overflow: hidden;
}

.card .card-top {
    height: 236px;
    font-family: 'neuzeit-grotesk', sans-serif;
    font-weight: 300;
    font-style: normal;
    font-size: 1em;
    line-height: 1.5;
    color: #303336;
    background-color: #d1e8ee;
    overflow: hidden;
}

.card .card-top a {
    display: block;  
    height: 100%;  
}

.card .card-top a .imgi {
    width: 100%;
    height: inherit;
    object-fit: cover;
    object-position: center; 
    transition: 300ms;
}

.card .card-content {
    padding: 30px;
}

.card .card-content .tag {
    font-weight: 700;
    letter-spacing: 2px;
}

.card .tag-travel {
    color: #33459b;
}

.card .tag-nature {
    color: #339b4b;
}

.card .tag-architecture {
    color: #9b3d33;
}

.card .title {
    color: #303336;
    font-weight: 700;
    transition: 300ms;
}

.card .asas {
    color: #7B8591;
    margin-top: 20px;
}


/* ---------------------------- */
/* Content Style | Hover Effect */
/* ---------------------------- */

.card .card-top a img:hover {
    opacity: .75;
}

.card .title:hover {
    color: #303336bb;
}

/* Just Copy The Code Above */
/* ======================== */


/* Display this style when screen-width is lower than 1240px */
@media only screen and (max-width: 1240px) {

    main {
        display: block;
        height: auto;
        min-height: max(640px, 100vh);
        padding: 80px 0;
    }

    .card-container {
        grid-template-columns: 1fr 1fr;
        height: auto;
        margin: 0;
        padding: 40px;
    }

    .card {
        height: auto;
    }

}

/* Display this style when screen-width is lower than 768px */
@media only screen and (max-width: 768px) {

    .card-container {
        grid-template-columns: 1fr;
    }

}

/* Display this style when screen-width is lower than 425px */
@media only screen and (max-width: 425px) {

    .card-container {
        padding: 20px;
    }

}



body:hover .designer {
    opacity: 1;
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
  
<nav class="navbar navbar-expand-md  navbar-dark" style=" width: 100%; background-color: black; padding-top: 0px; padding-bottom: 0px;">
  
 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="#">Home</a>
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
      </li>         
         <li class="nav-item">
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
<div class="row" style="background-image: url(https://lh3.googleusercontent.com/proxy/ESNStzCCEUUYQ4HY-7lL3lItMapDGJvL9akCzOf4oQYipmFdRDtvEAkGl-lrwsRb9fjCWZWLtTcwyC5BpVhFJ1MgeLUow5wyUXJzwO_4);">
  <img src="https://www.itnonline.com/sites/default/files/Philips%20cybersecurity%20blog%20internet-1862315_1280.png" style="width: 100%; height: 200px;">

</div>

<div class="container-fluid" style="background-color: white;">

  <h1><b>Cyber Crime</b></h1>
  <hr>
 <div class="row" style="margin: 20px;">
   <div class="col-sm-8">
    <p> Cyber crimes can be defined as the unlawful acts where the computer is used either as a tool or a target or both.  The term is a general term that covers crimes like phishing, credit card frauds, bank robbery, illegal downloading, industrial espionage, child pornography, kidnapping children via chat rooms, scams, cyber terrorism, creation and/or distribution of viruses, Spam and so on.<br>
      Cyber crime is a broad term that is used to define criminal activity in which computers or computer networks are a tool, a target, or a place of criminal activity and include everything from electronic cracking to denial of service attacks. It also covers the traditional crimes in which computers or networks are used to enable the illicit activity.

    </p>
   </div>
   <div class="col-sm-4">
     
  <img src="https://looppacificassets.s3.amazonaws.com/styles/no_watermark/s3/thumbnails/image/08qn_ixp_cybercrime.jpg?itok=lry9Kq1V" alt="cybercrime" style="width:100%; height: 200px;">
  
</div>
   </div>
 </div>
   <div class="container-fluid" style="background-color: white;">
<div class="row">
  <h1>Types Of Cyber Crime</h1>
    <hr>
  <div class="col-md-12">
     <main>
        <section class="card-container">
        <div class="card">
            <div class="card-top">
                <a href=""><img class="imgi" src="https://s3.ap-southeast-1.amazonaws.com/images.deccanchronicle.com/dc-Cover-hptf2qosh451dlphv0vp6ckn74-20170114095742.Medi.jpeg" alt="Unsplash Photo"></a>
            </div>
            <div class="card-content">
                <a href=""><h3 class="title">Pornography</h3></a>
                <p class="asas">Child pornography is a form of child sexual exploitation.Images of child pornography are also referred to as child sexual abuse images.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-top">
                <a href=""><img class="imgi" src="https://static.vecteezy.com/system/resources/thumbnails/000/173/700/original/Free_Phishing_Vector.jpg" alt="Unsplash Photo"></a>
            </div>
            <div class="card-content">
              
                <a href=""><h3 class="title">Phishing</h3></a>
                <p class="asas">Phishing targets are contacted by email, telephone or text message by someone posing as a legitimate institution to lure individuals into providing sensitive data.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-top">
                <a href=""><img class="imgi" src="https://hotelpartner.hrs.com/fileadmin/Business_Lounge/Hacker_Angriff/hrs-hacker-attack-head.jpg" alt="Unsplash Photo"></a>
            </div>
            <div class="card-content">
                
                <a href=""><h3 class="title">Hacking</h3></a>
                <p class="asas">Hacking refers to activities that seek to compromise digital devices. Hackers are motivated by personal gain, to make a statement.</p>
            </div>
        </div>
            <div class="card">
            <div class="card-top">
                <a href=""><img class="imgi" src="https://mk0resourcesinfm536w.kinstacdn.com/wp-content/uploads/clickjacking12062013.gif" alt="Unsplash Photo"></a>
            </div>
            <div class="card-content">
                
                <a href=""><h3 class="title">Web-Jacking</h3></a>
                <p class="asas">Web jacking is simply when someone clones your website, and tricks you to believe the cloned site is yours. The malicious link is placed somewhere on your webpage waiting for a click.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-top">
                <a href=""><img class="imgi" src="https://img.etimg.com/thumb/width-1200,height-900,imgsize-356319,resizemode-1,msid-66291991/wealth/save/how-fraudsters-use-psychological-tricks-to-dupe-people-online.jpg" alt="Unsplash Photo"></a>
            </div>
            <div class="card-content">
                
                <a href=""><h3 class="title">Forgery</h3></a>
                <p class="asas">The misuse of computer networks, the internet, and various avenues within the online community in order to defraud potential victims of identity theft is classified as electronic – or online forgery.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-top">
                <a href=""><img class="imgi" src="https://images.squarespace-cdn.com/content/v1/56ce4b7e555986b2d65547fc/1561053847033-3DHEWUYGJTKOUY7NMOTT/ke17ZwdGBToddI8pDm48kFL9AUzaE4A7xYy2YyXQ9mFZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpyYXqLliTsaedGzLfsVbA-ybYgewnL6h8SID8FqCKLFfK2czJxMfVQcYNaZc9b1HZ0/sexting.jpg" alt="Unsplash Photo"></a>
            </div>
            <div class="card-content">
               
                <a href=""><h3 class="title">Sexting</h3></a>
                <p class="asas">Sexting is sending, receiving, or forwarding sexually explicit messages, photographs, or images, primarily between mobile phones, of oneself to others. It may also include the use of a computer or any digital device.</p>
            </div>
        </div>
            <div class="card">
            <div class="card-top">
                <a href=""><img class="imgi" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQa0p9RZpCdxgl1bh6hbiEp5Un2y20FQUeulw&usqp=CAU" alt="Unsplash Photo"></a>
            </div>
            <div class="card-content">
                
                <a href=""><h3 class="title">Threatning</h3></a>
                <p class="asas">A mess</p>
            </div>
        </div>
            <div class="card">
            <div class="card-top">
                <a href=""><img class="imgi" src="https://www.minclaw.com/wp-content/uploads/2018/11/social-media-defamation-1080x600.jpg" alt="Unsplash Photo"></a>
            </div>
            <div class="card-content">
               
                <a href=""><h3 class="title">Defamation</h3></a>
                <p class="asas">Defamation is the oral or written communication of a false statement about another that unjustly harms their reputation and usually constitutes a tort or crime</p>
            </div>
        </div>
            <div class="card">
            <div class="card-top">
                <a href=""><img class="imgi" src="https://www.codetwo.com/admins-blog/wp-content/uploads/2017/06/2017-06-22-Prevent_Spoofing_Blog_Image.jpg" alt="Unsplash Photo"></a>
            </div>
            <div class="card-content">
                <a href=""><h3 class="title">Email Spoofing</h3></a>
                <p class="asas">The core email protocols do not have any mechanism for authentication, making it common for spam and phishing emails to use such spoofing to mislead.</p>
            </div>
        </div>
    </section>
    <!-- Just Copy The Code Above -->
    <!-- ======================== -->
</main>
  </div>
  
</div>
</div>
   <div class="container-fluid" style="background-color: white;">
<h1><b>Cyber Crime Safety Tips</b></h1>
<hr>

<div class="row">
  <div class="col-md-6" style="padding-left: 140px;">
    <button id="myBtn-1" style="width: 500px;" ><p> >> Cyber safety tips for Children</p></button>
     <div id="myModal-1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" style="float: right;">&times;</span>
    <h2><b>Cyber Crime Safety Tips</b></h2>
   <ul>
     <li>Never share your personal details like house address, phone number, date of birth and place of birth etc. on any online platform such as Facebook,Instagram, Blogs, Twitter, Chat-rooms etc.</li>
     <li> Make sure that indecent/offending/harassing emails/chatts posts are not be responded. Rather keep them in records in the form of screenshots and inform your parent/guardian to report it to the police. The account should be immediately blocked.</li>
     <li>When you feel uncomfortable with any SM post/mail/chatting, immediately share your concern with your parents or any trustworthy person</li>
     <li>Never share your account passwords with anyone.</li>
     <li>Be aware that information on the internet is not always reliable.</li>
     <li>Make a strong password with alpha-numeric symbols and special characters.</li>
     <li>Don’t add people as online friends unless you know them in real life or have parent permission.</li>
     <li>Never agree to meet an online friend unless and until you are do so under your parent's/guardian's guidance and supervision.</li>
     <li>Treat others online the way you’d like to be treated yourself. Real life etiquettes and manners apply equally to the virtual space.</li>
   </ul>
  </div>
</div>
<br>
<br>
<button id="myBtn-2" style="width: 500px;"><p> >> Cyber safety tips for women</p></button>
     <div id="myModal-2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" style="float: right;">&times;</span>
    <h2><b>Cyber Crime Safety Tips</b></h2>
   <ul>
     <li>Never share your personal details like house address, phone number, date of birth and place of birth etc. on any online platform such as Facebook,Instagram, Blogs, Twitter, Chat-rooms etc.</li>
     <li> Make sure that indecent/offending/harassing emails/chatts posts are not be responded. Rather keep them in records in the form of screenshots and inform your parent/guardian to report it to the police. The account should be immediately blocked.</li>
     <li>When you feel uncomfortable with any SM post/mail/chatting, immediately share your concern with your parents or any trustworthy person</li>
     <li>Never share your account passwords with anyone.</li>
     <li>Be aware that information on the internet is not always reliable.</li>
     <li>Make a strong password with alpha-numeric symbols and special characters.</li>
     <li>Don’t add people as online friends unless you know them in real life or have parent permission.</li>
     <li>Never agree to meet an online friend unless and until you are do so under your parent's/guardian's guidance and supervision.</li>
     <li>Treat others online the way you’d like to be treated yourself. Real life etiquettes and manners apply equally to the virtual space.</li>
   </ul>
  </div>
</div>
<br>
<br>
<button id="myBtn-3" style="width: 500px;"><p> >> Cyber safety tips for Senior Citizen</p></button>
     <div id="myModal-3" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" style="float: right;">&times;</span>
    <h2><b>Cyber Crime Safety Tips</b></h2>
   <ul>
     <li>Never share your personal details like house address, phone number, date of birth and place of birth etc. on any online platform such as Facebook,Instagram, Blogs, Twitter, Chat-rooms etc.</li>
     <li> Make sure that indecent/offending/harassing emails/chatts posts are not be responded. Rather keep them in records in the form of screenshots and inform your parent/guardian to report it to the police. The account should be immediately blocked.</li>
     <li>When you feel uncomfortable with any SM post/mail/chatting, immediately share your concern with your parents or any trustworthy person</li>
     <li>Never share your account passwords with anyone.</li>
     <li>Be aware that information on the internet is not always reliable.</li>
     <li>Make a strong password with alpha-numeric symbols and special characters.</li>
     <li>Don’t add people as online friends unless you know them in real life or have parent permission.</li>
     <li>Never agree to meet an online friend unless and until you are do so under your parent's/guardian's guidance and supervision.</li>
     <li>Treat others online the way you’d like to be treated yourself. Real life etiquettes and manners apply equally to the virtual space.</li>
   </ul>
  </div>
</div>
<br>
<br>
<button id="myBtn-4" style="width: 500px;"><p> >> Cyber safety tips for Parents</p></button>
     <div id="myModal-4" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" style="float: right;">&times;</span>
    <h2><b>Cyber Crime Safety Tips</b></h2>
   <ul>
     <li>Never share your personal details like house address, phone number, date of birth and place of birth etc. on any online platform such as Facebook,Instagram, Blogs, Twitter, Chat-rooms etc.</li>
     <li> Make sure that indecent/offending/harassing emails/chatts posts are not be responded. Rather keep them in records in the form of screenshots and inform your parent/guardian to report it to the police. The account should be immediately blocked.</li>
     <li>When you feel uncomfortable with any SM post/mail/chatting, immediately share your concern with your parents or any trustworthy person</li>
     <li>Never share your account passwords with anyone.</li>
     <li>Be aware that information on the internet is not always reliable.</li>
     <li>Make a strong password with alpha-numeric symbols and special characters.</li>
     <li>Don’t add people as online friends unless you know them in real life or have parent permission.</li>
     <li>Never agree to meet an online friend unless and until you are do so under your parent's/guardian's guidance and supervision.</li>
     <li>Treat others online the way you’d like to be treated yourself. Real life etiquettes and manners apply equally to the virtual space.</li>
   </ul>
  </div>
</div>


  </div>
 
  <div class="col-md-5" style="padding-left: 90px;">
          <button id="myBtn-5" style="width: 500px;"><p> >> Cyber safety tips for Businesspersons</p></button>
     <div id="myModal-5" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" style="float: right;">&times;</span>
    <h2><b>Cyber Crime Safety Tips</b></h2>
   <ul>
     <li>Never share your personal details like house address, phone number, date of birth and place of birth etc. on any online platform such as Facebook,Instagram, Blogs, Twitter, Chat-rooms etc.</li>
     <li> Make sure that indecent/offending/harassing emails/chatts posts are not be responded. Rather keep them in records in the form of screenshots and inform your parent/guardian to report it to the police. The account should be immediately blocked.</li>
     <li>When you feel uncomfortable with any SM post/mail/chatting, immediately share your concern with your parents or any trustworthy person</li>
     <li>Never share your account passwords with anyone.</li>
     <li>Be aware that information on the internet is not always reliable.</li>
     <li>Make a strong password with alpha-numeric symbols and special characters.</li>
     <li>Don’t add people as online friends unless you know them in real life or have parent permission.</li>
     <li>Never agree to meet an online friend unless and until you are do so under your parent's/guardian's guidance and supervision.</li>
     <li>Treat others online the way you’d like to be treated yourself. Real life etiquettes and manners apply equally to the virtual space.</li>
   </ul>
  </div>
</div>
</div>
<br>
<br>
<button id="myBtn-6" style="width: 500px;"> <p> >> Social Media Safety Tips</p></button>
     <div id="myModal-6" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" style="float: right;">&times;</span>
    <h2><b>Cyber Crime Safety Tips</b></h2>
   <ul>
     <li>Never share your personal details like house address, phone number, date of birth and place of birth etc. on any online platform such as Facebook,Instagram, Blogs, Twitter, Chat-rooms etc.</li>
     <li> Make sure that indecent/offending/harassing emails/chatts posts are not be responded. Rather keep them in records in the form of screenshots and inform your parent/guardian to report it to the police. The account should be immediately blocked.</li>
     <li>When you feel uncomfortable with any SM post/mail/chatting, immediately share your concern with your parents or any trustworthy person</li>
     <li>Never share your account passwords with anyone.</li>
     <li>Be aware that information on the internet is not always reliable.</li>
     <li>Make a strong password with alpha-numeric symbols and special characters.</li>
     <li>Don’t add people as online friends unless you know them in real life or have parent permission.</li>
     <li>Never agree to meet an online friend unless and until you are do so under your parent's/guardian's guidance and supervision.</li>
     <li>Treat others online the way you’d like to be treated yourself. Real life etiquettes and manners apply equally to the virtual space.</li>
   </ul>
  </div>
</div>
<br>
<br>
<button id="myBtn-7" style="width: 500px;"><p> >> Social Media Precautions For Businessperons</p></button>
     <div id="myModal-7" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" style="float: right;">&times;</span>
    <h2><b>Cyber Crime Safety Tips</b></h2>
   <ul>
     <li>Never share your personal details like house address, phone number, date of birth and place of birth etc. on any online platform such as Facebook,Instagram, Blogs, Twitter, Chat-rooms etc.</li>
     <li> Make sure that indecent/offending/harassing emails/chatts posts are not be responded. Rather keep them in records in the form of screenshots and inform your parent/guardian to report it to the police. The account should be immediately blocked.</li>
     <li>When you feel uncomfortable with any SM post/mail/chatting, immediately share your concern with your parents or any trustworthy person</li>
     <li>Never share your account passwords with anyone.</li>
     <li>Be aware that information on the internet is not always reliable.</li>
     <li>Make a strong password with alpha-numeric symbols and special characters.</li>
     <li>Don’t add people as online friends unless you know them in real life or have parent permission.</li>
     <li>Never agree to meet an online friend unless and until you are do so under your parent's/guardian's guidance and supervision.</li>
     <li>Treat others online the way you’d like to be treated yourself. Real life etiquettes and manners apply equally to the virtual space.</li>
   </ul>
  </div>
</div>
<br>
<br>
<button id="myBtn-8" style="width: 500px;"><p> >> Cyber Safety For Net Banking Users</p></button>
     <div id="myModal-8" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" style="float: right;">&times;</span>
    <h2><b>Cyber Crime Safety Tips</b></h2>
   <ul>
     <li>Never share your personal details like house address, phone number, date of birth and place of birth etc. on any online platform such as Facebook,Instagram, Blogs, Twitter, Chat-rooms etc.</li>
     <li> Make sure that indecent/offending/harassing emails/chatts posts are not be responded. Rather keep them in records in the form of screenshots and inform your parent/guardian to report it to the police. The account should be immediately blocked.</li>
     <li>When you feel uncomfortable with any SM post/mail/chatting, immediately share your concern with your parents or any trustworthy person</li>
     <li>Never share your account passwords with anyone.</li>
     <li>Be aware that information on the internet is not always reliable.</li>
     <li>Make a strong password with alpha-numeric symbols and special characters.</li>
     <li>Don’t add people as online friends unless you know them in real life or have parent permission.</li>
     <li>Never agree to meet an online friend unless and until you are do so under your parent's/guardian's guidance and supervision.</li>
     <li>Treat others online the way you’d like to be treated yourself. Real life etiquettes and manners apply equally to the virtual space.</li>
   </ul>
  </div>
</div>
  </div>
</div>
</div>
<div class="container-fluid" style="background-color: white;">

<div class="row">
  <div class="col-md-12">
    <h1>Cyber Security</h1>
    <hr>
    <p>
      Cyber security refers to the body of technologies, processes, and practices designed to protect networks, devices, programs, and data from attack, damage, or unauthorized access. Cyber security may also be referred to as information technology security.
    </p>
    <h2>THE Importance Of Cyber Security</h2>
    <hr>
    <p>
      Cyber security is important because government, military, corporate, financial, and medical organizations collect, process, and store unprecedented amounts of data on computers and other devices. A significant portion of that data can be sensitive information, whether that be intellectual property, financial data, personal information, or other types of data for which unauthorized access or exposure could have negative consequences. Organizations transmit sensitive data across networks and to other devices in the course of doing businesses, and cyber security describes the discipline dedicated to protecting that information and the systems used to process or store it. As the volume and sophistication of cyber attacks grow, companies and organizations, especially those that are tasked with safeguarding information relating to national security, health, or financial records, need to take steps to protect their sensitive business and personnel information. As early as March 2013, the nation’s top intelligence officials cautioned that cyber attacks and digital spying are the top threat to national security, eclipsing even terrorism.
    </p>
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
<!--modal 1---->
<script>
// Get the modal
var modal = document.getElementById("myModal-1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn-1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal-2");

// Get the button that opens the modal
var btn = document.getElementById("myBtn-2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal-3");

// Get the button that opens the modal
var btn = document.getElementById("myBtn-3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal-4");

// Get the button that opens the modal
var btn = document.getElementById("myBtn-4");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!--modal 1---->
<script>
// Get the modal
var modal = document.getElementById("myModal-5");

// Get the button that opens the modal
var btn = document.getElementById("myBtn-5");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal-6");

// Get the button that opens the modal
var btn = document.getElementById("myBtn-6");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal-7");

// Get the button that opens the modal
var btn = document.getElementById("myBtn-7");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal-8");

// Get the button that opens the modal
var btn = document.getElementById("myBtn-8");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>