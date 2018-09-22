<!-- Monica Dessy Amanda 1301164452 -->
<!DOCTYPE html>
<html>
<head>
	<!-- Monica Dessy Amanda - 1301164452 -->
	<title>Cinema XX2 IF</title>

	<!-- Load your Bootstrap CSS Library Here -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/monica/bootstrap/css/bootstrap.min.css">
	
	<!-- Load your CSS Style Here! -->
	<style type="text/css">

		*,*:before,*:after {
  box-sizing: border-box;
}
html {
  font-size: 16px;
}

.plane {
  margin: 20px auto;
  max-width: 300px;
}

.cockpit {
  height: 250px; 
  position: relative;
  overflow: hidden;
  text-align: center;
  border-bottom: 5px solid #d8d8d8;
  &:before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    height: 500px;
    width: 100%;
    border-radius: 50%;
    border-right: 5px solid #d8d8d8;
    border-left: 5px solid #d8d8d8;
  }
  h1 {
    width: 60%;
    margin: 100px auto 35px auto;
  }
}

.exit {
  position: relative;
  height: 50px;
  &:before,
  &:after {
    content: "EXIT";
    font-size: 14px;
    line-height: 18px;
    padding: 0px 2px;
    font-family: "Arial Narrow", Arial, sans-serif;
    display: block;
    position: absolute;
    background: green;
    color: white;
    top: 50%;
    transform: translate(0, -50%);
  }
  &:before {
    left: 0;
  }
  &:after {
    right: 0;
  }
}

.fuselage {
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}

ol {
  list-style :none;
  padding: 0;
  margin: 0;
}

.row {
  
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;  
}

.seat {
  display: flex;
  flex: 0 0 14.28571428571429%;
  padding: 5px;
  position: relative;  
  &:nth-child(3) {
    margin-right: 14.28571428571429%;
  }
  input[type=checkbox] {
    position: absolute;
    opacity: 0;
  }
  input[type=checkbox]:checked {
    + label {
      background: #bada55;      
      -webkit-animation-name: rubberBand;
          animation-name: rubberBand;
      animation-duration: 300ms;
      animation-fill-mode: both;
    }
  }
  input[type=checkbox]:disabled {
    + label {
      background: #dddddd;
      text-indent: -9999px;
      overflow: hidden;
      &:after {
        content: "X";
        text-indent: 0;
        position: absolute;
        top: 4px;
        left: 50%;
        transform: translate(-50%, 0%);
      }
      &:hover {
        box-shadow: none;
        cursor: not-allowed;
      }
    }
  }
  label {    
    display: block;
    position: relative;    
    width: 100%;    
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    line-height: 1.5rem;
    padding: 4px 0;
    background: #F42536;
    border-radius: 5px;
    animation-duration: 300ms;
    animation-fill-mode: both;
    
    &:before {
      content: "";
      position: absolute;
      width: 75%;
      height: 75%;
      top: 1px;
      left: 50%;
      transform: translate(-50%, 0%);
      background: rgba(255,255,255,.4);
      border-radius: 3px;
    }
    &:hover {
      cursor: pointer;
      box-shadow: 0 0 0px 2px #5C6AFF;
    }
    
  }
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

.rubberBand {
  -webkit-animation-name: rubberBand;
          animation-name: rubberBand;
}
		#nav_logo {
			background-color: transparent;
		}
		#nav_list{
			margin-top: 18px;
			display: inline;
		}
		#nav_list ul li{
			display: inline;
			list-style: none;
			padding: 10px;
			color: black;
		}
		#nav_list ul li a{
			text-decoration: none;
			color: black;
		}
		#nav_list ul li a:hover{
			text-decoration: none;
			color: #f26c4f;
		}
		#nav_button{
			margin-top: 16px;
		}
		#nav_button img{
			width: 30px;
			height: auto;
		}
		#nav_button button{
			background-color: #191970;
			color: #ffffff;
			margin-left: 20px;
		}
		#nav_button button:hover{
			background-color: #f26c4f;
			color: #ffffff;
			margin-left: 20px;
		}
		#slide{
			margin-top: 87px;
		}
		#slide_caption{
			color: #000000;
		}
		#menu_atas{
			background-color: #191970;
			text-align: center;
			margin-top: 130px; 
			color: #ffffff;
		}
		#menu_kiri{
			/*margin-top: 10px;*/
			background-color: #dedfdb;
			text-align: right;
			padding-top: 30px;
			padding-bottom: 60px;
		}
		#menu_kanan{
			/*margin-top: 10px;*/
			background-color: #dedfdb;
			text-align: left;
			padding-top: 30px;
		}
		#kunjungi{
			margin-top: 50px;
			background-color: #191970;
			padding: 50px;
		}
		#footer{
			background-color: #dedfdb;
			text-align: center;
			padding: 20px;
		}
		body{
			background-color: #000000;
			font-family: impact;
		}
	</style>

<!--Load your JQuery here!-->
	<script src="<?php echo base_url(); ?>assets/monica/jquery/jquery-3.3.1.min.js"></script>

<!-- Load your Bootstrap JS Library Here -->
	<script src="<?php echo base_url(); ?>assets/monica/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<!-- NAVBAR -->
	<nav class="navbar fixed-top" style="background-color: #dedfdb">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 col-lg-2" id="nav_logo">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/logo_pth.jpg" style="width: 100%;">
				</div>
				<div class="col-6 col-lg-7" id="nav_list">
					<ul>
						<li><a href="<?php echo site_url('home') ?>"> Now Playing </a></li>
						<li><a href="<?php echo site_url('menu') ?>"> Alur Order </a></li>
						<li><a href="<?php echo site_url('order') ?>"> Order Now! </a></li> 
					</ul>
				</div>
				<!-- //Karina Aulia Dini 1301164342 -->
				    <div class="col-6 col-lg-3" id="nav_button">
          <?php if(empty($this->session->nama)) : ?>
            <a href="<?php echo site_url('login') ?>">
              <button type="button" class="btn btn-md" id="login" >Login</button></a>
      <!--       <a href="<?php echo site_url('join') ?>">
              <button type="button" class="btn btn-md" id="join" >Join Us</button></a> -->
          <?php else: ?>
            <?php echo $this->session->nama ?>
            <img src="<?php echo base_url(); ?>assets/karin/profil.jpg">
            
                <button type="button" onclick="location.href='<?php echo site_url('login/logout');?>'" class="btn btn-sm" id="logout">Log Out</button>
          <?php endif; ?>
		</div>
	</nav>
	<!-- end karin -->
<!-- SLIDE 
	<div class="container-fluid" id="slide">
		<div class="row">	
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			  	</ol>
			  	<div class="carousel-inner">
			    	<div class="bg-size-cover carousel-item active">
			      		<img class="d-block w-100" src="<?php echo base_url(); ?>assets/monica/gambar/slide/slide1.jpg" alt="First slide">
			      		<span style="text-shadow: 3px 2px white; font-family: cooper black;">
	 						<div class="carousel-caption d-none d-md-block" id="slide_caption">
	    						<h5 style="font-size: 40px;">KESIBUKKAN KULIAH MENGGANGGU WAKTU ANDA</h5>
	    						<p style="font-size: 25px;">Tapi ingin ngemil bersama teman</p>	
	    						<a href="<?php echo site_url('order') ?>">
	    							<button type="button" class="btn btn-lg" id="Order" style="background-color: #abe64d; color: white">Order
	    							</button>
	    						</a>
	  						</div>	
  						</span>
			    	</div>
			    	<div class="bg-size-cover carousel-item">
			      		<img class="d-block w-100" src="<?php echo base_url(); ?>assets/monica/gambar/slide/slide2.jpg" alt="Second slide">
			      		<span style="text-shadow: 3px 2px white; font-family: cooper black;">
				      		<div class="carousel-caption d-none d-md-block" id="slide_caption">
	    						<h5 style="font-size: 40px;">SEKALI KLIK, MAKANAN PEDAGANG KAKI LIMA ADA DILOKASI ANDA</h5>
	    						<p style="font-size: 25px;">Dengan Cemal-cemil</p>
	    						<a href="<?php echo site_url('menu') ?>">
	    							<button type="button" class="btn btn-lg" id="menu" style="background-color: #abe64d; color: white">Mal-mil Food
	    							</button>
	    						</a>
	  						</div>	
  						</span>
			    	</div>
			    	<div class="bg-size-cover carousel-item">
			      		<img class="d-block w-100" src="<?php echo base_url(); ?>assets/monica/gambar/slide/slide3.jpg" height: 463.4px alt="Third slide">
			      		<span style="text-shadow: 3px 2px white; font-family: cooper black;">
				      		<div class="carousel-caption d-none d-md-block" id="slide_caption">
	    						<h5 style="font-size: 40px;">MINUMAN ES? BISA DIANTAR TANPA TAKUT MELELEH!</h5>
	    						<p style="font-size: 25px;">Dengan Cemal-cemil</p>
	    						<a  href="<?php echo site_url('menu') ?>">
	    							<button type="button" class="btn btn-lg" id="menu" style="background-color: #abe64d; color: white">Mal-mil Ice
	    							</button>
	    						</a>
	  						</div>	
	  					</span>
			   		</div>
			   		<div class="bg-size-cover carousel-item">
			      		<img class="d-block w-100" src="<?php echo base_url(); ?>assets/monica/gambar/slide/slide4.jpg" height: 463.4px alt="Fourth slide">
			      		<span style="text-shadow: 3px 2px white; font-family: cooper black;">
				      		<div class="carousel-caption d-none d-md-block" id="slide_caption">
	    						<h5 style="font-size: 40px;">LEBIH DARI 100+ PKL BERGABUNG DENGAN KAMI</h5>
	    						<p style="font-size: 25px;">Ingin bergabung dengan kami juga?</p>
	    						<a href="<?php echo site_url('join') ?>">
		    						<button type="button" class="btn btn-lg" id="join" style="background-color: #abe64d; color: white">Join Us
		    						</button>
	    						</a>
	  						</div>	
	  					</span>
			   		</div>
			  	</div>
			  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			 	</a>
			  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			</div>
		</div>
	</div>
	<p class="typist" style="text-align: center; font-size: 25px;"></p>-->
<!-- OUR MENU -->
	<div class="container" id="menu">
		<div class="row">
			<div class="col-6 col-lg-12" id="menu_atas">
				<h1> PILIH KURSI </h1>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-lg-4" id="menu_kiri"> 
				<img src="<?php echo base_url(); ?>assets/monica/gambar/film/2.jpg" style="height: 500px;">
			</div>
			<div class="col-6 col-lg-8" id="menu_kanan"> 
				<div class="plane">
  <div class="cockpit">
    <h1>Please select a seat</h1>
  </div>
  <div class="exit exit--front fuselage">
    
  </div>
  <ol class="cabin fuselage">
    <li class="row row--1">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="1A" />
          <label for="1A">1A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1B" />
          <label for="1B">1B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1C" />
          <label for="1C">1C</label>
        </li>
        <li class="seat">
          <input type="checkbox" disabled id="1D" />
          <label for="1D" style="color: red;">1D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1E" />
          <label for="1E">1E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1F" />
          <label for="1F">1F</label>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="2A" />
          <label for="2A">2A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2B" />
          <label for="2B">2B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2C" />
          <label for="2C">2C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2D" />
          <label for="2D">2D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2E" />
          <label for="2E">2E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2F" />
          <label for="2F">2F</label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="3A" />
          <label for="3A">3A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3B" />
          <label for="3B">3B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3C" />
          <label for="3C">3C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3D" />
          <label for="3D">3D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3E" />
          <label for="3E">3E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3F" />
          <label for="3F">3F</label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4A" />
          <label for="4A">4A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4B" />
          <label for="4B">4B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4C" />
          <label for="4C">4C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4D" />
          <label for="4D">4D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4E" />
          <label for="4E">4E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4F" />
          <label for="4F">4F</label>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="5A" />
          <label for="5A">5A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5B" />
          <label for="5B">5B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5C" />
          <label for="5C">5C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5D" />
          <label for="5D">5D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5E" />
          <label for="5E">5E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5F" />
          <label for="5F">5F</label>
        </li>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="6A" />
          <label for="6A">6A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6B" />
          <label for="6B">6B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6C" />
          <label for="6C">6C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6D" />
          <label for="6D">6D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6E" />
          <label for="6E">6E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6F" />
          <label for="6F">6F</label>
        </li>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="7A" />
          <label for="7A">7A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7B" />
          <label for="7B">7B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7C" />
          <label for="7C">7C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7D" />
          <label for="7D">7D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7E" />
          <label for="7E">7E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7F" />
          <label for="7F">7F</label>
        </li>
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="8A" />
          <label for="8A">8A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8B" />
          <label for="8B">8B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8C" />
          <label for="8C">8C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8D" />
          <label for="8D">8D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8E" />
          <label for="8E">8E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8F" />
          <label for="8F">8F</label>
        </li>
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9A" />
          <label for="9A">9A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9B" />
          <label for="9B">9B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9C" />
          <label for="9C">9C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9D" />
          <label for="9D">9D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9E" />
          <label for="9E">9E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9F" />
          <label for="9F">9F</label>
        </li>
      </ol>
    </li>
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="10A" />
          <label for="10A">10A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10B" />
          <label for="10B">10B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10C" />
          <label for="10C">10C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10D" />
          <label for="10D">10D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10E" />
          <label for="10E">10E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10F" />
          <label for="10F">10F</label>
        </li>
      </ol>
    </li>
  </ol>
  <div class="exit exit--back fuselage">
    
  </div>
</div>
<div class="col-6 col-lg-3" id="nav_button" style="margin-left: 550px;">
<button type="button" class="btn btn-md" id="login" >Pesan</button><br><br>
<button type="button" class="btn btn-md" id="login" >Batal</button><br><br>
</div>
			</div>

		</div>
	</div>
<!-- KUNJUNGI -->
	<div class="container-fluid" id="kunjungi">
		<center>	
		<h3 style="color: #ffffff; margin-bottom: 30px;"> KUNJUNGI </h3>
		<div class="row">
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4">
				<a href="https://www.facebook.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_facebook.png" id="logo_fb" style="width: 50px;">
				</a>
				<a href="https://www.instagram.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_instagram.png" id="logo_ig" style="width: 50px;">
				</a>
				<a href="https://www.youtube.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_youtube.png" id="logo_yt" style="width: 50px;">
				</a>
				<a href="https://www.twitter.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_twitter.png" id="logo_tw" style="width: 50px;">
				</a>
			</div>
			<div class="col-lg-4">
			</div>
		</div>
	</center>
	</div>
<!-- FOOTER -->
	<div class="container-fluid" id="footer">
		<div class="row" id="footer">
			<div class="col-lg-4">
				<h6> Ketentuan Layanan </h6>
				<h6> Kebijakan Privasi</h6>
			</div>
			<div class="col-lg-4">
				<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/logo.png" style="width: 30%;">
			</div>
			<div class="col-lg-4">
				<h6> @2018 CINEMA XX2 IF </h6>
			</div>
		</div>
	</div>
</body>
</html>