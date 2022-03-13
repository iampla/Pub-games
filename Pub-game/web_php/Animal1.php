<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Crossing</title>
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
            <h2 class="col-12 tm-text-primary">Animal Crossing จับมือกับ ColourPop ออกคอลเลคชันเครื่องสำอางล่าสุด อิงโทนสีจากตัวละครในเกม</h2>
        </div>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="img/img-041.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">
						<a href="https://www.nintendolife.com/news/2021/01/colourpop_announces_animal_crossing_makeup_line" target="_news" rel="news">เครื่องสำอางแบรนด์ ColourPop ผุดไอเดียร่วมกับเกม Animal Crossing: New Horizons ออกเครื่องสำอางชุดใหม่</a> เตรียมเปิดให้สั่งจองกันในวันที่ 28 มกราคมนี้<br><br>
                        คอลเลคชัน ColourPop x Animal Crossing: New Horizons จะประกอบไปด้วยเครื่องสำอางดังต่อไปนี้<br>

							อายแชโดว์ 4 ชุดสีจากตัวละครในเกม<br>
							&emsp;&nbsp;- “5-Star Island” ในธีมของ Isabelle<br>
							&emsp;&nbsp;- “Nook, Inc.” ในธีมของ Timmy และ Tommy<br>
							&emsp;&nbsp;- “What a Hoot” ในธีมของ Blathers และ Celeste<br>
							&emsp;&nbsp;- “Labelle of the Ball” ในธีมของพี่น้อง Able<br>
							&emsp;&nbsp;- บลัชออน 2 ตลับ<br>
							&emsp;&nbsp;- มินิลิปแพ็คคู่ 3 แบบ<br>
							&emsp;&nbsp;- Super Shock อายแชโดว์ 1 ชุด<br>
							&emsp;&nbsp;- เจลกากเพชร 1 ชุด<br><br>
							ปัจจุบันยังไม่มีการเปิดเผยรายละเอียดของเมคอัปแต่ละตัวไปมากกว่านี้ แต่หากใครสนใจ ก็สามารถที่จะเข้า<a href="https://colourpop.com/pages/animal-crossing-signup" target="_news" rel="news">ไปลงทะเบียนกันไว้ก่อนได้ทางเว็บไซต์</a> เพื่อให้ทราบข้อมูลก่อนการวางขายล่วงหน้าก่อนใคร
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
                    <img src="img/img-11.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>เผยรายละเอียด Bayonetta 3</h2>
                        <a href="Bayonetta 31.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">15 Dec 2020</span>
                    <span>12,460 views</span>
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
                    <img src="img/img-031.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Persona 5 Strikers</h2>
                        <a href="Persona5Strikers1.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">3 Jan 2021</span>
                    <span>6,460 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-10.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>วงในเผย Overwatch 2</h2>
                        <a href="Over1.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">20 Dec 2020</span>
                    <span>16,100 views</span>
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