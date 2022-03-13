<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
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
                &nbsp; Welcome <?php echo $_SESSION['name'];?> to Pub-Games</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1" href="index1.php">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2 active" aria-current="page" href="indexCate1.php">หมวดหมู่</a>
					
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="index.php">เว็บบอร์ด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact1.php">ติดต่อAdmin</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link nav-link-5" href="login.php">logout</a>
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
            <h2 class="col-6 tm-text-primary">
              Action
          </h2>
      </div>
		
        <div class="row tm-mb-90 tm-gallery">
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/01-1.jpg" alt="Image" class="img-fluid">
					<figcaption class="d-flex align-items-center justify-content-center">
            			<h2>Comanche</h2>
            			<a href="Coman1.php">view more</a>
          			</figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Comanche</strong></span>
                </div>
		  </div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
              <figure class="effect-ming tm-video-item">
                    <img src="img/01-2.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Darksiders Genesis</h2>
						<a href="Darksi1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Darksiders Genesis</strong></span>
                </div>
			</div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/01-3.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
						<h2>Need for Speed™ Heat</h2>
						<a href="Need1.php">View more</a>
                  </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Need for Speed™ Heat</strong></span>
                </div>
			</div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/01-4.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
					  	<h2>Phasmophobia</h2>
						<a href="Phasmo1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Phasmophobia</strong></span>
                </div>
			</div>
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/01-5.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
					  	<h2>Red Dead 2</h2>
						<a href="Red1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Red Dead 2</strong></span>
                </div>
			</div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/01-6.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
					  	<h2>GTA V</h2>
						<a href="GTA1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>GTA V</strong></span>
                </div>
			</div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-41.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">						
					  	<h2>Monster Hunter</h2>
						<a href="MonsterHunter1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Monster Hunter</strong></span>
                </div>
			</div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/01-8.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
					    <h2>PUB G</h2>
						<a href="PUBG1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>PUB G</strong></span>
                </div>
			</div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/01-9.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
						<h2>MAFIA</h2>
						<a href="MAFIA1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>MAFIA</strong></span>
                </div>
			</div>
            
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/01-10.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Battlefield V</h2>
						<a href="Battle1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Battlefield V</strong></span>
                </div>
			</div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/01-11.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Dead By Daylight</h2>
						<a href="DbD1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Dead By Daylight</strong></span>
                </div>
			</div>
            
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/01-12.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Blackwake</h2>
						<a href="Black1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Blackwake</strong></span>
                </div>
			</div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-07.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>DOOM Eternal</h2>
                        <a href="Doom1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>DOOM Eternal</strong></span>
                </div>
            </div>

         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-02.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Resident Evil 3</h2>
                        <a href="ResidentEvil31.php">View more</a>
                    </figcaption>                    
                </figure>
			 <div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Resident Evil 3</strong></span>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Half-Life: Alyx</h2>
                        <a href="Half1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>Half-Life: Alyx</strong></span>
                </div>
            </div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-05.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>One Punch Man</h2>
                        <a href="OneP1.php">View more</a>
                    </figcaption>                    
                </figure>
				<div class="d-flex justify-content-between tm-text-gray">
                    <span><strong>One Punch Man</strong></span>
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
                    <h3 class="tm-text-primary mb-4 tm-footer-title">เกี่ยวกับ PUB-Games</h3>
                    <p>PUB-Games เป็นเว็บไซต์ที่รวบรวมข้อมูลสำหรับเกมส์ เพื่อให้ผู้ที่สนใจเกี่ยวกับเกมส์ หรือผู้ที่สนใจอยากเล่นเกมส์ที่คนเค้านิยมเล่นกันได้หาข้อมูลในเว็บนี้ได้อย่างง่ายได้เพียงแค่ใช้ลูกศรเลื่อนหา</p>
                </div>
               
                
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2020 PUB-Games Company. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by PUB-Games</a>
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