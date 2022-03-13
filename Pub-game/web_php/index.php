<?php
include('auth.php');
include 'config.php';
$sql = "select qu_id,topic,create_date from question order by qu_id desc";
$query = mysqli_query($conn,$sql);

$_SESSION['name'] = $_SESSION['username'];
$_SESSION['email'] = $_SESSION['emailname'];
 ?> 
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="language" content="en">
  <title>Pub-Games</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/templatemo-style.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index1.php">
                <i class="fas fa-gamepad"></i>
                
          &nbsp; Welcome <?php echo $_SESSION['name'];?> to Pub-Games</a>
          <div class = "form">
                  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1" href="index1.php">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="indexCate1.php">หมวดหมู่</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-active 3"aria-current="page" href="index.php">เว็บบอร์ด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4 " href="contact1.php">ติดต่อAdmin</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link nav-link-5" a href = "login.php" >logout</a> </a>
                </li>
            </ul>
            </div>
        </div>
  </div>
    </nav>
    <img src="img/hero1.jpg" width="1700px" >
    
    <div class="container-fluid tm-container-content tm-mt-60">
			
			<div class="row mb-4 align-center">
           	  <blockquote>
           	    <h1 class="col-6 tm-text-primary"> <strong>เว็บบอร์ด </strong></h1>
       	      </blockquote>
            </div>
  <a class = "ask" href="add_topic.php">ตั้งคำถาม</a>
  <table border="1" cellpadding="10"width="1700" >
    <thead>
      <tr>
        <th>ลำดับ</th>
        <th>หัวข้อคำถาม</th>
        <th>วันที่สร้าง</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; while($result = mysqli_fetch_assoc($query)){ ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td>
            <a class="topic" href="view_topic.php?id=<?php echo $result['qu_id']; ?>"><?php echo $result['topic']; ?></a>
          </td>
          <td><?php echo $result['create_date']; ?></td>
        </tr>
        <?php $i++; } ?>
      </tbody>
    </table>
    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">เกี่ยวกับ PUB-Games </h3>
                    <p>PUB-Games เป็นเว็บไซต์ที่รวบรวมข้อมูลสำหรับเกมส์ เพื่อให้ผู้ที่สนใจเกี่ยวกับเกมส์ หรือผู้ที่สนใจอยากเล่นเกมส์ที่คนเค้านิยมเล่นกันได้หาข้อมูลในเว็บนี้ได้อย่างง่ายได้เพียงแค่ใช้ลูกศรเลื่อนหา</p>
                </div>
</div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2020 PUB-Games Company. All rights reserved.
              </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    designed by PUB-Games 
                </div>
            </div>
        </div>
    </footer>
    
  </body>
  </html>
  <?php
  mysqli_close($conn);
