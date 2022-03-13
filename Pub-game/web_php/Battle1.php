<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battlefield V</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index1.php">
                <i class="fas fa-gamepad"></i>
                &nbsp; Welcome <?php echo $_SESSION['name'];?> to Pub-Games
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1" href="index1.php">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3 active" aria-current="page" href="indexCate1.php">หมวดหมู่</a>
					
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="index.php">เว็บบอร์ด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact1.php">ติดต่อAdmin</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link nav-link-4" href="login.php">logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">Battlefield V</h2>
        </div>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="img/01-10-1.jpg" alt="Image" class="img-fluid">
          </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">
                      Battlefield V เกมแนว FPS ภาคต่อจากซีรีส์แนวสงครามของค่ายยักษ์ใหญ่อย่าง EA ที่คุณรู้จักกันดี โดยในภาคนี้ตัวเกมจะพาให้คุณเข้าไปสัมผัสในยุคสงครามโลกครั้งที่ 2 ท่ามกลางการต่อสู้ของเหล่ามหาอำนาจอย่างฝ่ายสัมพันธมิตร และ ฝ่ายอักษะ เพื่อชิงความเป็นหนึ่ง
                  </p>
                    <div class="text-center mb-5">
                        <a href="https://store.steampowered.com/app/1238810/Battlefield_V/" class="btn btn-primary tm-btn-big">Download</a>
                    </div>
<div class="mb-4">
  <p>RELEASE DATE: 9 Nov, 2018&nbsp;</p>
  <p>DEVELOPER: DICE&nbsp;</p>
  <p>PUBLISHER: Electronic Arts&nbsp;</p>
<p>&nbsp;</p>
</div>

                </div>
            </div>
        </div>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
          More Game </h2>
        </div>
        <div class="row mb-3 tm-gallery">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/03-1.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                      <h2>Knights College</h2>
         	  		 <a href="Knights1.php">view more</a>
         	 	</figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Knights College</strong></span>
                </div>
			</div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/02-4.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                      <h2>Candy Disaster</h2>
         	  		 <a href="Candy1.php">view more</a>
         	 			</figcaption>                    
                		</figure>
					<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Candy Disaster</strong></span>
                </div>
            </div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/03-4.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                      <h2>Leaf Blower Revolution </h2>
         	  		 <a href="Leaf1.php">view more</a>
         	 		</figcaption>                    
               	 </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Leaf Blower Revolution </strong></span>
                </div>
			</div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/02-1.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                       <h2>Down in Bermuda</h2>
         	  		 <a href="Down1.php">view more</a>
         	 			</figcaption>                    
                		</figure>
					<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Down in Bermuda</strong></span>
                </div>
		</div>
			
			<div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="indexCate1.php" class="btn btn-primary tm-btn-next">ดูเกมส์เพิ่มเติม</a>
            </div>            
        </div>
			
</div> 
    </div> 

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">About Pub-Games</h3>
                    <p>PUB-Games เป็นเว็บไซต์ที่รวบรวมข้อมูลสำหรับเกมส์ เพื่อให้ผู้ที่สนใจเกี่ยวกับเกมส์ หรือผู้ที่สนใจอยากเล่นเกมส์ที่คนเค้านิยมเล่นกันได้หาข้อมูลในเว็บนี้ได้อย่างง่ายได้เพียงแค่ใช้ลูกศรเลื่อนหา</p>
                </div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
          <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"></li>
                        <li class="mb-2"></li>
                        <li class="mb-2"></li>
                        <li class="mb-2"></li>
                    </ul>
</div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                  Copyright 2020 PUB-Games Company. All rights reserved.
              </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">PubGames</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>