<?php

require('inc/classes.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Innovative Zone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <style>
	  html{
		    scroll-behavior:smooth;
	  }
  body { 
	  font-family: 'Montserrat', sans-serif;
	
  }
	  #section1{
		  width: 100%;
		  height: 110vh;
		  background: url(img/as.jpg);
		  background-size: cover;
	  }
	  div.bt{
		position: absolute;
		  top: 87%;
		  left: 18%;
		  
	  }
	  div.bt button{
		  font-size: 20px;
		  font-weight: bold;
	  }
	  ul li.logo a{
		  float: left;
	  }
	  i#a,i#b,i#c,i#d {
  animation-name: example;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@keyframes example {
  0%   {transform:rotate(0deg);
	
	}
  100% {transform:rotate(360deg);}
}
	  p{
		  color: #999;
		  line-height: 25px;
	  }
	  #as,#as2,#as3,h3{
		  color: #fff;
	  }
	  #as,#as2,#as3{
		  font-size: 18px;
	  }
	  .footer-top{
		  background: #111;
		  padding: 40px 0;
	  }
	  .segment-one h3{
		  text-transform: uppercase;
		  color: #fff;
		  font-size: 25px;
	  }
	  .segment-two h2{
		  color: #fff;
		  text-transform: uppercase;
	  }
	  .segment-two h2:before,.segment-three h2:before,.segment-four h2:before{
		  content: '|';
		  color: #c65039;
		  padding-right: 10px;
	  }
	  .segment-two ul{
		  margin: 0;
		  padding: 0;
		  list-style-type: none;
	  }
	  .segment-two ul li{
		border-bottom: 1px solid rgba(255,255,255,0.3);
		 line-height: 40px;
	  }
	  .segment-two ul li a{
		  color: #999;
		  text-decoration: none;
	  }
	  .segment-three h2{
		  color: #fff;
		  text-transform: uppercase;
	  }
	  .segment-three a {
		  background: #494848;
		  width: 40px;
		  height: 40px;
		  display:inline-block;
		  border-radius: 50%;
	  }
	  .segment-three a i{
		  color: white;
		  font-size: 20px;
		  padding: 10px 12px;
	  }
	  .segment-four h2{
		  color: #fff;
		  text-transform: uppercase;
		  
	  }
	  .segment-four form input[type=email]{
		  width: 50%;
	  }
	  .segment-four form input[type=submit]{
		  background: #c65039;
		  border: none;
		  padding: 3px 10px;
		  color: #fff;
		  text-transform: uppercase;
	  }
	  .footer-bottom-text{
		  text-align: center;
		  background: #000;
		  line-height: 75px;
	  }
	 
	  .image__overlay {
    position: absolute;
    top: 0.1%;
    left: 10%;
    width: 303px;
    height: 170px;
    background: rgba(0, 0, 0, 0.6);
    color: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.25s;
	cursor: pointer;
}

.image__overlay--blur {
    backdrop-filter: blur(5px);
}

.image__overlay--primary {
    background:rgba(0,68,100,1.00);
}

.image__overlay > * {
    transform: translateY(20px);
    transition: transform 0.25s;
}

.image__overlay:hover {
    opacity: 1;
}

.image__overlay:hover > * {
    transform: translateY(0);
}

.image__title {
    font-size: 2em;
    font-weight: bold;
}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="bg-danger">
<div id="section1" class="container-fluid">
<nav class="navbar navbar-expand-sm navbar-light justify-content-end mr-1" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" alt="" width="240px" /></a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto  ">
                       <li class="nav-item"><a class="nav-link js-scroll-trigger  pr-4" href="#section1">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger pr-4" href="#section2">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger pr-4" href="#section3">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger pr-4" href="#section4">Clients</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger pr-4" href="#section5">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#section6">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div class="bt">
	  <button type="button" class="btn bg-white text-info">Get Started!</button>

</div>
</div>



<div id="section2" class="container-fluid bg-grey" style="padding-top:25px;padding-bottom:15px">
  <section class="page-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <p>We provide a wide range of solutions and services</p>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Website Development</h4>
                        <p class="text-muted">Developing a website is fun and anyone can do this but very few understand how to build websites.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-robot fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Mobile App Development</h4>
                        <p class="text-muted">In this modern era, businesses should not ignore to have a business mobile app.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-pen-nib fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Graphics Designing</h4>
                        <p class="text-muted">We provide logo designs, brouchers, letterheads, pumplets, buissness cards for your company.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                           <i class="fab fa-digital-ocean fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Digital Marketing</h4>
                        <p class="text-muted">Are you looking for ways to make your pitch inspirational to social media audience.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-search-plus fa-stack-1x fa-inverse"></i>
                            
                        </span>
                        <h4 class="my-3">SEO</h4>
                        <p class="text-muted">Our SEO services have lent a hand to many clients to amplify the visibility of their website on the internet.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Hosting Services</h4>
                        <p class="text-muted">With over a billion people using the internet, the opportunities for your internet business are unlimited.</p>
                    </div>
                    </div>
                </div>
            
        </section>
</div>



	
<div id="section3" class="container-fluid" style="padding-top:25px;padding-bottom:15px; background-color: #F8F8F8">
  <section class="page-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <p>We provide a wide range of solutions and services</p>
                    
                    
                </div>
                
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-4" >
 
                    <ul class="navbar-nav">
                       <?php
						   $show_all= new showPortfolio();
						   $val=$show_all->showAllCategories();
						   foreach($val as $cate){
							  
							?>
                      
                       <li class="nav-item" id="navigation">
                        
                          <a class="nav-link active ajax-link" href="#portfolio" onClick ="GetId(<?php echo $cate['id']; ?>)"><?php echo $cate['title'];  ?>
                          </a>
                       </li>
                        <?php
						 }
						?>
                       </ul>
                       
                </nav>
                
                 <div class="row text-center" id="all">
                   
                    </div>
                    
                </div>
            
        </section>
</div>

</div>

<script>
	
	function GetId(userid){
			$.ajax({
				url:"displayajax.php",
			    type:"post",
			    data:{
				userid:userid
			},
			success:function(result,status){
				$('#all').html(result);
			}
			})
		}
	</script>




<div id="section4" class="container-fluid bg-grey" style="padding-top:25px;padding-bottom:15px">
  <section class="page-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Clients</h2>
                    <p>We have worked for various companies. Find our regular and famous clients</p>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <span>
                          <img src="img/1.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/2.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/3.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/4.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/5.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/6.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/7.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/8.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/9.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/10.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/11.png" width="200px" height="200px">
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span>
                          <img src="img/12.png" width="200px" height="200px">
                        </span>
                    </div>
                    </div>
                </div>
            
        </section>
</div>




<div id="section55" class="container-fluid" style="padding-top:25px;padding-bottom:25px; background-color: antiquewhite">
  <section class="page-section">
            <div class="container">
                <div class="row text-center">
                     <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                           
                            <i id="a" class="fas fa-tasks fa-stack-1x fa-inverse text-success"></i>
                        </span>
                        <h4 class="text-success">635</h4>
                        <p class="text-success">PROJECT COMPLETED</p>
                    </div>
                    
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                           
                            <i id="b" class="far fa-clock fa-stack-1x fa-inverse text-success"></i>
                        </span>
                        <h4 class="text-success">590</h4>
                        <p class="text-success">WORKING HOURS</p>
                    </div>
                    
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                           
                            <i id="c" class="fas fa-star fa-stack-1x fa-inverse text-success"></i>
                        </span>
                        <h4 class="text-success">2560</h4>
                        <p class="text-success">POSITIVE FEEDBACKS</p>
                    </div>
                    
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            
                            <i id="d" class="fas fa-heart fa-stack-1x fa-inverse text-success"></i>
                        </span>
                        <h4 class="text-success">1150</h4>
                        <p class="text-success">HAPPY CLIENTS</p>
                    </div>
                    
                    
                    </div>
                </div>
            
        </section>
</div>

<div id="section5" class="container-fluid" style="padding-top:40px;padding-bottom:20px; background-color: #F8F8F8">
 <div class="container">
  
   <div class="row text-center">
                    <div class="col-md-6">
                       
                        <h4 class="my-3  mt-4"><img src="img/logo.png" width="400px;"></h4>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-center">About Innovative Zone </h1>
                        <p class="text-muted mt-4 text-justify">Innovative Zone (Software Development Company In Pakistan) was founded in 2011 as an AOP. Innovative Zone started its formal operations in January 2013 as a private limited company registered under companies ordinance 1964. Currently, the company employs several dedicated web app developers and mobile app developers from all across Pakistan. Our mission is to be the leader in digital media arena by investing our time and knowledge in strategically well-located markets.</p>
                    </div>
	 </div>
</div>
</div>

<div id="section6" class="container-fluid" style="padding-top:25px;padding-bottom:15px;">
  <section class="page-section">
            <div class="container">
               <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    
                </div>
                <div class="row text-center">
                     <div class="col-md-6">
                        <span class="fa-stack fa-3x">
                         
                            <i class="fas fa-map-marker-alt fa-stack-1x fa-inverse text-primary"></i>
                        </span>
                        <h4>Address</h4>
                        <p>Whinstone, STP, Service Road North, F-9/4 , <br>

Karachi , Pakistan (44000)</p>
                    </div>
                    
                    <div class="col-md-6">
                        <span class="fa-stack fa-3x">
                          
                            <i class="fas fa-phone-alt fa-stack-1x fa-inverse text-primary"></i>
                        </span>
                        <h4>Phone</h4>
                        <p> (+92)51-8754527 <br>

 (+92)33345656990</p>
                    </div>
                    
                    <div class="col-md-6">
                        <span class="fa-stack fa-3x">
                            <i class="fas fa-envelope-open-text fa-stack-1x fa-inverse text-primary"></i>
                        </span>
                        <h4>Email Address</h4>
                        <p>info@innovative.co <br>

info@innovativezone.com</p>
                    </div>
                    
                    <div class="col-md-6">
                        <span class="fa-stack fa-3x">
                            
                            <i class="fas fa-globe fa-stack-1x fa-inverse text-primary"></i>
                        </span>
                        <h4>Our Websites</h4>
                        <p>www.innovative.com <br>

www.innovativezone.com</p>
                    </div>
                    
                    
                    </div>
                </div>
            
        </section>
</div>




<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-sx-12 segment-one md-mb-30 sm-mb-30">
					<h3>Portfolio</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tenetur consectetur adipisicing elit. Inventore tenetur corporis dolorem debitis blanditiis, eum ad deleniti maxime cupiditate ipsum vel dolores id deserunt et repellat Corporis.</p>
				</div>
				
				<div class="col-md-3 col-sm-6 col-sx-12 segment-two md-mb-30 sm-mb-30">
					<h2 id="as">Useful Links</h2>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Clients</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						
					</ul>
				</div>
				
				<div class="col-md-3 col-sm-6 col-sx-12 segment-three sm-mb-30">
				<h2 id="as2">Follow Us</h2>
				<p>Please follow us on our Social Media Profile in order to keep updated.</p>
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
				<a href="#"><i class="fab fa-pinterest-p"></i></a>
				</div>
				
				<div class="col-md-3 col-sm-6 col-sx-12 segment-four sm-mb-30">
				<h2 id="as3">Our Newsletter</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium libero est mollitia nulla minus necessitatib illo, mollitia, maiores praesentium iusto commodi voluptates perspiciatis corporis nobis, labore.</p>
				
				<form action="#">
					<input type="email">
					<input type="submit" value="Subscribe">
				</form>
				</div>
			</div>
		</div>	
	</div>
	<p class="footer-bottom-text">All right reserved by &copy; Innovative Zone 2020</p>
</footer><br>



</body>
</html>
