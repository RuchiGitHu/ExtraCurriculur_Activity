
<html>
<head>
<title></title>

  <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous">
  
<!--    <link rel="stylesheet" type="text/css" href="css/mycss.css">
 --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
 <!--************************ CSS CSS CSS CSS CSS CODING START  -->

 </head>

<!--************************ CSS CSS CSS CSS CSS CODING END  -->

<body>
<div class="header" id="topheader">

<style >
html{
  scroll-behavior:smooth;
}
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Source Serif Pro', serif;}
a{ text-decoration: none;}
a:hover{
  text-decoration: none;
}
li {
list-style:none;
}
p{
  font-size: 0.9rem;
  line-height: 1.6;
  font-weight: 400;
  color: #606060;

}
.extradiv h2, .servicediv h2{
  font-size: 0.9rem;
  margin:20px 0 15px 0;
  font-weight: bold;
  line-height: 1.1;
  word-spacing: 4px;

}
.em{
  color: black;
}
i{
color: #2fccd0;

}




/*
******************** actual css classes start   *******************/
.header {
            
width: 100%;
  height: 100vh;
  background-image: linear-gradient(rgba(0,168,255,0.3), rgba(0,168,255,0.3)), url(../images/f.jpg);
  background-repeat: no-repeat;
  background-size: 100% 100%;
     clip-path: polygon(100% 0%,100% 75%, 50% 100%, 0 75%, 0 0%); 
       position: relative;
}
.mine{
  position:absolute;
      top: 7px;
      left: 3px;
      z-index: 1;
/*     background-image: linear-gradient(rgba(0,168,255,0.3), rgba(0,168,255,0.3));
    background-color: linear-gradient(rgba(0,168,255,0.3), rgba(0,168,255,0.3));*/
}
.header:before{
  content:"";
  position: absolute;
  top: 0%;
  bottom: 0%;
  left: 0%;
  right: 0%;
}
/*.navbar:before{
  content:"";
  position: absolute;
  top: 5%;
  bottom: 0%;
  left: 0%;
  right: 0%;
}*/
.nav-item a{
  color:#000000!important;
  font-weight: bold;
}
.nav-item{
 /* border: 1px solid #fff;*/
  border-radius:100px;
  margin: 0.5px;
  padding: 12px, 35px;
  outline: none;
  color: #fff;
  font-size:1rem;
  font-weight: 400;
  line-weight:1.4;
  text-align: center;
}
.navbar-brand{
   color:#000000!important;
  font-weight: bold;
}
.header-section{
  width:100%;
  height:50%;
  
  color: black;
  text-align: center;
  position: relative;
}
.center-div{
  width:100%;
  height:auto;
  position: center;
  color: black;
  top: 50%;
  left: 50%;
  font-family: 'Dancing Script', cursive;

}
/*.nav-item:hover{
  color:#50d1c0;
  background:#fff;
  text-decoration: none;
  box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
}*/
/*******************  extra header three div css START   ********************/
.header-extradiv{
  width: 100%;
  height: auto;
  margin: 100px 0;
 text-align: center;
}
.extradiv{
  background: #fff;
  border: medium none;
  padding: 50px!important;
  border-radius: 3px;
  transition:0.3s;
}
.extradiv:hover{
  box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
transform: translateY(-40px);

}
/*******************  extra header three div css END   ********************/
/*******************   service offers css START   ******************************/
.serviceoffers{
  background: #f7f7f9;
  padding: 50px 0;
  margin-bottom: 50px;
 
}
.names{
  margin-bottom: 50px;

}
.names h2{
  font-size:1.5rem;
  font-weight:600;
  text-transform: uppercase;
  color: #2e2e2e;
font-size:0.9rem;
text-transform: uppercase;
font-weight:bold;
}
.service-icons{
  display: flex;
  justify-content: center;
  align-items: center;
}
.progress{
  height: 0.6rem!important;
  margin-bottom: 25px!important;
  background: #606060;
}
.serviceoffers{
  background: #d6d7d1;
  padding: 50px 0;
  margin: 50px;
}
.headings{
  margin-bottom:50px;
}
.headings h1{
  font-size:1.5rem;
  font-weight:600;
  text-transform: uppercase;
}
.names h1{
  color:#2e2e2e;
font-size:0.9rem;
text-transform: uppercase;
font-weight:bold;
}

/*******************   service offers css END   ******************************/

/*********************  kids experince start *****************************/
.happykids{
  width:100%;
  height: 100vh;
  padding: 80px 0;

}
.box{
  text-align: center;
  border: 1px solid rgba(0,0,0,0.2);
  box-shadow: 0 5px 10px 0 rgba(0,0,0,0.3);
  border-radius: 10px;
  transition: 0.1s ease;
}
.box:hover{
  background:#16c9f6;
}
.box:hover p{
  color:white;
}
.carousel-indicators{
  position: absolute;
  right:0;
  bottom: -60px!important;
}
.carousel-indicators li{
  background-color: #16c9f6!important;
}
.box a{
  position: relative;
}
.box a img{
  width: 100px;
  height:100px;
  border-radius: 50%;
  margin-top: 20px;
}
.box a:after{
  content: "\f10d";
font-family: fontAwesome;
width: 40px;
height: 40px;
background: linear-gradient(to right,#1e5799 0%,#3ccdbb 0%, #16c9f6 100%);
color: white;
position: absolute;
top: 120%;
left: 70%;
border-radius: 50%;
display: flex;
justify-content: center;
align-items: center;
}
.box h1{
  font-size:18px;
  font-weight: 700;
  color:#000;
  margin-bottom: 10px;
}
.box h2{
  font-size: 13px;
  font-weight: 400px;
  color:#666666;
  margin-bottom: 20px;

}

/*
********************  kids experince END *****************************/
/*******************   Contact us START   ******************************/
.contactus{
  width:100%;
  height: 100vh;
  padding: 80px 0;
  position: relative;

}
.contactus:before{
  content:"";
  position: absolute;
  top:0;
  left:0;
  bottom:0;
  right:0;
  background: linear-gradient(330deg, #16c9f6 55%, #fff 0%);
  z-index:-1;
}
.form-button button{
   border: 1px solid #50d1c0;
   border-radius: 100px;
   margin:0 5px;
   padding: 12px 35px;
   outline: none;
   color: #50d1c0;
   font-size: 1rem;
   font-weight: 400;
   line-height: 1.4;
   text-align:center;
   background: transparent;
}
 form:hover .form-button button
{
  background:#fff;
  color: black;
  box-shadow:0 0 20px rgba(0,0,0,0.3);
}
::placeholder{
  font-size:0.85rem;
}


/*******************   Contact US END   ******************************/
/**********************  FOOTER START  *************************/
.footersection{
  width: 100%;
  height: auto;
  padding: 70px 0 20px 0;
  background: #00abff;
  position:relative;

}
.footersection p{
  color: #fff;

}
.footersection li a{
  font-size:0.9rem;
  line-height:1.6;
  font-weight: 400;
  color:#fff;
  text-transform: capitalize;

}
.footersection h3{
  text-transform: uppercase;
  color: black;
  margin-bottom: 25px;
font-size: 1.2rem!important;
font-weight:600;
text-shadow:0 2px 5px rgba(0,0,0,0.3);
}
#myBtn {
  display: none;
  position: fixed;
bottom: 20px;
 right: 40px;
z-index: 99;
border: none;
color: black;
background: #00abff;
padding:10px;
border-radius: 10px;
}
#myBtn:hover{
  background: white;

}


/**********************  FOOTER END *************************/
/**********************  MEDIA QUERY *************************/
@media(max-width: 768px){
   .nav-item{
    text-align:center!important;
  }
  .happykids, .contactus{
    height:auto;
    margin:30px 0;
  }
.contactus p {
  padding: 0 50px;
}
.footer-div:nth-child(2){
text-align:left!important;
}
.footer-div{
  margin: 30px 0;
}
}



</style>


<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>

      

   <li class="nav-item">
        <a class="nav-link" href="active.php">ACTIVITIES</a>
      </li>


<li class="nav-item">
        <a class="nav-link" href="benefits.php">BENEFITS</a>
      </li>


<li class="nav-item">
        <a class="nav-link" href="photo.php">PHOTO-GALLERY</a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
    </ul>
  </div>
</nav>
<div class=" mine">
<img src="../images/sc.png" width="200" height="189" align="left">
</div>

<section class= "header-section">
<div class="center-div">
<h3><em>Welcome to the </em></h3>
<h2 class="font-weight-bold" >ST.AUGUSTINE CO-ED SCHOOL ACTIVITIES</h2>



</div>
</section>
</div>
<!--*****************     HAEDER PART END *****************-->
<!-- *********************  three extra header div START  ***************** -->
<section class="header-extradiv">
<div class="container">
<div class="row">

  <div class="extradiv col-lg-4 col-md-4 col-12">
<a href="#"><i class="fa-3x fa fa-desktop" aria-hidden="true"></i></a>
<h2><i>EXPLORING ACTIVITIES</i></h2>
<p>You and your child can imagine you are scientists, observing and documenting what you see.</p>
</div>

  <div class="extradiv col-lg-4 col-md-4 col-12">
<a href="#"><i class="fa-3x fa fa-trophy" aria-hidden="true"></i></a>
<h2><i>ARCHIEVERS</i></h2>
<p>You and your child can imagine you are scientists, observing and documenting what you see.</p>
</div>

  <div class="extradiv col-lg-4 col-md-4 col-12">
<a href="#"><i class="fa-3x fa fa-magic" aria-hidden="true"></i></a>
<h2><i>MAGIC</i></h2>
<p>You and your child can imagine you are scientists, observing and documenting what you see.</p>
</div>
</div>
</div>
</section>
<!-- *********************  three extra header div END  ***************** -->
<!-- ************************  offer section START   ******************************** -->
<section class="serviceoffers"  id="servicediv">
<div class="container heading text=center">
<h2 class="text-center font-weight-bold"> What we offer</h2>
<p class="text-center">Annual function is the showcase of the entire year.It is the most awaited programme for all students and parents. The program is commenced by lighting of the ceremonial lamp by distinguished personages and the school principal.</p>

</div>
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0">

<div class="names my-3" class="names" >
<h2>DANCING</h2>
<div class="progress w-52">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:85%">85%
</div></div>

<div class="names my-3" class="names">
<h2>SINGING</h2>
<div class="progress w-52">
<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">70%
</div></div></div>

<div class="names my-3" class="names">
<h2>ACTING</h2>
<div class="progress w-52">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width:85%">85%
</div></div></div>

<div class="names my-3" class="names">
<h2>QUIZ</h2>
<div class="progress w-52">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:90%">90%
</div></div></div>

<div class="names my-3" class="names">
<h2>DRAMA</h2>
<div class="progress w-60">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:70%">70%
</div></div></div>
</div>
</div>

<div class="col-lg-6 col-md-12 col-12 servicediv">
<div class="row">
<div class="col-lg-2 col-2 service-icons">
<i class="fa-3x fa fa-desktop" aria-hidden="true"></i>
</div> 
<div class="col-lg-10 col-10" class="names">
<h2>Interest</h2>
<p>Sports is One of the most well-known after school activities. ...</p>
</div>
</div>

<div class="row">
<div class="col-lg-2 col-2 service-icons">
<i class="fa-3x fa fa-wifi" aria-hidden="true"></i>
</div> 
<div class="col-lg-10 col-10" class="names">
<h2>Knowledge</h2>
<p>" As the proverb says, "Give a man a fish, and he will eat for a day; teach a man to fish, and he will eat for a lifetime."</p>
</div>
</div>

<div class="row">
<div class="col-lg-2 col-2 service-icons">
<i class="fa-3x fa fa-phone" aria-hidden="true"></i>
</div> 
<div class="col-lg-10 col-10" class="names">
<h2>HELP</h2>
<p>For any communucation, Please CONTACT US</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ************************  offer section END   ******************************** -->
<!-- 
********** our kids experience *********** -->
<section class="happykids">
<div class="container heading text-center">
<h2 class="text-center font-weight-bold"> OUR HAPPY KIDS </h2>
<p class="text-capitalize pt-1"> Kids are happy when they do activities they liked the most and learn from it.</p>
</div>



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner container">
    <div class="carousel-item active">
      
<div class="row">

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="../images/e.jpg" class="img-fluidi img-thumbnali"></a>
<h1>MANOJ</h1>
<h2>instrument practice.....</h2>
<p class="m-4">We had a great chance to be in touch with our classical tradition on indipendance day</p>

</div>
</div>


<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="../images/i.jpeg" class="img-fluidi img-thumbnali"></a>
<h1> NAMAN</h1>
<h2>Happy Janmasthmi.....</h2>
<p class="m-4">A oppertunity when i costume as a Lord krishna first time in school.</p>

</div>
</div>
 
 <div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="../images/j.jpeg" class="img-fluidi img-thumbnali"></a>
<h1>GARGI</h1>
<h2>DANCE on Independance day.....</h2>
<p class="m-4">It was a great feeling when i dance on patriotic song, such a nice feeling i feel towards nation.</p>

</div>
</div>


</div>
    </div>
    <div class="carousel-item">
      <div class="row">

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="../images/k.jpeg" class="img-fluidi img-thumbnali"></a>
<h1>PRANAV</h1>
<h2>Happy Janmasthmi.....</h2>
<p class="m-4">I had a lot of fun when I costume as a LITTILE KRISHNA. i also dance on a song of krishna, it was good     </p>

</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="../images/o.jpeg" class="img-fluidi img-thumbnali"></a>
<h1>ANANYA</h1>
<h2>Poster Compitition.....</h2>
<p class="m-4">When i participate in this compitition, i learnt that winning is not the only thing. i was happy bacause i participate and learnt new skill.</p>

</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="../images/q.jpeg" class="img-fluidi img-thumbnali"></a>
<h1>Anuj</h1>
<h2>Thali Decoration Compitition....</h2>
<p class="m-4">I learnt from it to how we can explore things in a beautifully manner just by adding some things on it.</p>

</div>
</div>


</div>


    </div>
    <div class="carousel-item">
      
      <div class="row">

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="../images/t.png" class="img-fluidi img-thumbnali"></a>
<h1>RIYA</h1>
<h2>Happy Teachers Day.....</h2>
<p class="m-4">“ Teaching is a very noble profession that shapes the character, caliber, and future of an individual.</p>

</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="../images/u.png" class="img-fluidi img-thumbnali"></a>
<h1>SADAF</h1>
<h2>singing Compitition....</h2>
<p class="m-4">I got a first position in this singing compitition. it transfom me with full of cofidence towards myself.</p>

</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="box">
<a href="#"><img src="../images/l.jpeg" class="img-fluidi img-thumbnali"></a>
<h1>ANAY</h1>
<h2>Dance Compition....</h2>
<p class="m-4">When i participate in this compitition, i learnt that winning is not the only thing. i was happy bacause i participate and learnt new skill.</p>

</div>
</div>


</div>


    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</section>
<!-- 
********** our kids experience *********** -->
<!-- 
******************** contact us START ***************** -->
<section class="contactus" id="contactid">
<div class="container heading text-center">
<h2 class="text-center font-weight-bold"> CONTACT US </h2>
<p class="text-capitalize pt-1"> For any feedback or query, please contact...</p>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">


<form action="userinfo.php" method="post">
  <div class="form-group">
    <input type="text" name="id" class="form-control" id="username" required autocomplete="off" placeholder="Enter Your Name">
  </div>
  
  <div class="form-group">
    <input type="email" name="user_email" class="form-control" id="email" required autocomplete="off" placeholder="Enter Your Email">
  </div>

  
  <div class="form-group">
    <input type="number" name="number" class="form-control" id="mobile" required autocomplete="off" placeholder="Enter Your Mobile Number">
  </div>

     <div class="form-group">
  <textarea type="comment" name="massage" class="form-control" rows="4" id="comment" placeholder="Enter Your Massage"></textarea>
</div>

<div class="d-flex justify-content-center form-button">
  <button type="submit" class="btn btn-primary"><a action="userinfo.php" method="post">Submit</a></button>
  </div>

</form>



</div>
</div>
</section>
<!-- 
******************** contact us START ***************** -->
<!-- 
***************  footer START ************************* -->
<footer class="footersection" id="footerdiv">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 col-12 footer-div text-center">
<div>
<h3> ABOUT SCHOOL</h3>
<p>The vision of the school is to become a Centre of Excellence and to create global citizens and visionary leaders who function as catalysts in different spheres of life and this could be achieved by drawing the best from each student by providing an enabling and caring environment.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-12 footer-div text-center">
<div>
<h3>NAVIGATION LINK</h3>
<li><a href="index.php">HOME</a></li>
<li><a href="#">SERVICES</a></li>
<li><a href="benefits.php">BANEFITS</a></li>
<li><a href="about.php">ABOUT</a>
</li>
</div>
</div>

<div class="col-lg-4 col-md-12 col-15 footer-div text-center">
<div>
<h3> NEWS LETTER</h3>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque nulla ipsum, pretium ac ultrices non, tincidunt id quam. Mauris dignissim dolor quis risus molestie et ,</p>
</div>
</div>
</div>
<div class="mt-5 text-center">
<p>Copyright 02019 ALL rights reserved | This template is made for my PROJECT</p>
</div>
<div class="scrolltop float-right">
<i class="fa fa-arrow-up" onclick="topfunction()" id="myBtn"></i>

</div>
</div>
</footer>
<!-- 
*****************   footer END   ************************ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
 mybutton=document.getElementById("myBtn");
 window.onscroll = function(){scrollFunction()};
function scrollFunction(){
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ){
    mybutton.style.display= "block";

  }else{
    mybutton.style.display= "none";
  }
}
function topfunction(){
  document.body.scrollTop=0;
  document.documentElement.scrollTop=0;
}
</script>

</body>
</html>
