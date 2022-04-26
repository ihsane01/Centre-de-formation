@extends('layouts.app')
@section('welcom')

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100&family=Dancing+Script&family=Ms+Madi&family=Square+Peg&family=Whisper&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<body>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./css/univer5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

     <a href="{{route('user_listeformations')}}" ><button  id="close-image" >
        <h3 >ESPACE ETUDIANT  </h3>
       </button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./css/univer.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">


       <a href="{{route('user_listeformations')}}"><button  id="close-image" >
        <h3>ESPACE ETUDIANT  </h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./css/univer3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       

       <a href="{{route('user_listeformations')}}" ><button  id="close-image" >
        <h3>ESPACE ETUDIANT  </h3>
         </button></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    <style>
li {
text-decoration: none; 
display: block;
text-align: center;
color: rgb(121, 5, 82);
 }
    
      #close-image {

  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #117A65;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

#close-image:hover {background-color: #0E6251}

#close-image:active {
  background-color: #0E6251;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
    
    #info {
        height: 1400px;
        background-color: #f1f2f6;
        padding: 1px 2%;
}

 
    #info h2 {
        padding-top: 60px;
       text-transform: uppercase; /* majuscule*/
    text-align: center;
    padding: top 30px;
    font-size: 2em;

    }
    
    #info1 {
        background: url(./css/centre.jpg);
        background-size: cover;
       
    }
    #info2 {
        background: url(./css/photoshop.jpg);
        background-size: cover;
    }
    #info3 {
        background: url(./css/formation.jpg);
        background-size: cover;
    }
    #info4 {
        background: url(./css/bb.jpeg);
        background-size: cover;
    }
    #info li {
        margin: 65px 100px 0 100px;
        height: 226px;
        width: 55%;
        max-width: 550px;
        float: left;
        box-shadow: 26px 26px 32px 0px rgba(0,0,0,0.75);
    }
    #info p {
        height: 45px;
        width: 235px;
        background-color :#117A65 ;
        float: right ;
        margin:50px -180px 0 0;
        font-size: 1.5em;
        text-align : center;
      
        box-shadow: 26px 26px 32px 0px rgba(0,0,0,0.75);
        color:white;
        font-size:40px;
     
font-family: 'Ms Madi', cursive;
    }

    #info #info2, #info #info4 {
        float: right;
    }

    #info2 p, #info4 p {
        float:left;
        color:white;
        background-color: #1A5276;
        margin-left: -180px;
        box-shadow: -4px 4px 0 1px  rgba(0, 0, 0, 0.75);
    }

.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}








    </style>
    
        <section id="info">
            
            <h2> Et tant à découvrir </h2>
            <ul>
                <li id="info1">
                    <p>Development</p>
                </li>
                <li id="info2">
                    <p> Web design </p>
                </li>
                <li id="info3">
                    <p>Langue </p>
                </li>
                <li id="info4">
                    <p>Skills </p>
                </li>
            </ul>
         
        </section>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row"style="display:flex">
                   
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p style="margin-right : 100px">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>

                </div>
                  <div class="col-sm-6 col-md-3 item">
                                   <h3 style="margin-left : 100px">Our location</h3>  <iframe  style="margin-left : 100px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.6018461818494!2d-5.89657818525219!3d35.73600938457417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b87d71f995045%3A0xc35a87c33b565280!2sFaculty%20of%20Sciences%20and%20Technologies%20Tangier!5e0!3m2!1sen!2sma!4v1650805751236!5m2!1sen!2sma" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

              

            </div>
             
            </div>
                                                                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
 <p class="copyright">Company Name © 2018</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
 </div>
    
    
    </div>
</body>
    </div>
   
    <style>
@import url('https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100&family=Dancing+Script&display=swap');
</style>
<style>

.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}
li{
  font-color:white;
}
</style>




</body>
@endsection