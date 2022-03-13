<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona 5 Strikers</title>
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
            <h2 class="col-12 tm-text-primary">Persona 5 Strikers เผยตัวอย่าง Gameplay ล่าสุด เตรียมวางจำหน่ายเวอร์ชันอังกฤษ 23 ก.พ. นี้!</h2>
        </div>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="img/img-031.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">
						&nbsp;&nbsp;<a href="https://youtu.be/yDaG0fE6HHw" target="_youtube" rel="stream">Atlus ได้ปล่อยตัวอย่าง Gameplay ที่เน้นไปที่ระบบการต่อสู้ของ Persona 5 Strikers ออกมาแล้วเป็นที่เรียบร้อย</a><br><br>
						&emsp;&nbsp;&nbsp;สำหรับภาค Spin-off นี้ พัฒนาโดยทีมงาน Omega Force ผู้สร้าง Dynasty Warriors จึงแน่นอนว่าจะไม่ได้มาในระบบ Turn-based แบบ Persona 5 ต้นฉบับ หากแต่การโจมตีปกติของผู้เล่น จะสามารถทำความเสียหายกับศัตรูจำนวนมากได้พร้อมกัน อันเป็นสไตล์เดียวกันกับที่สตูดิโอถนัด<br>
						&emsp;&nbsp;&nbsp;จากตัวอย่าง “All-Out-Action” เราจะได้เห็นตัวละครและอาร์ตสไตล์ที่คุ้นเคย ถูกนำเสนอผ่าน Gameplay ที่วุ่นวายกว่าเดิม ผสานแนว Hack ‘n’ Slash เข้ากับ RPG อย่างลงตัว เน้นการเลือกใช้ความสามารถและ Persona ของแต่ละคนให้เข้ากับสถานการณ์<br>
						&emsp;&nbsp;&nbsp;Persona 5 Strikers เวอร์ชันอังกฤษ เตรียมวางจำหน่ายบน PlayStation 4, Nintendo Switch และ PC วันที่ 23 กุมภาพันธ์นี้ และสำหรับใครที่สั่งจองแบบ Deluxe Edition ก็จะได้เล่นกันก่อนเลยตั้งแต่วันที่ 19 กุมภาพันธ์
                    </p>
                  
              </div>
				
            </div>
        </div>

        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                ข่าวล่าสุด
            </h2>

        </div>
        <div class="row tm-mb-90 tm-gallery">
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-011.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Elite Strike</h2>
                        <a href="es11.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">15 Jan 2021</span>
                    <span>1,906 views</span>
                </div>
            </div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-021.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Path of Exile</h2>
                        <a href="PathofExile1.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">10 Jan 2021</span>
                    <span>3,100 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-09.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Naughty Dog รับสมัครงาน</h2>
                        <a href="NaughtyDog1.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">30 Dec 2020</span>
                    <span>9,906 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-12.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Sony แก้ไขวิดีโองาน CES 2021</h2>
                        <a href="Sony1.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">12 Dec 2020</span>
                    <span>11,402 views</span>
                </div>
            </div>

			        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
          
                <a href="index - MN1.php" class="btn btn-primary tm-btn-next">ดูเพิ่มเติม</a>
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