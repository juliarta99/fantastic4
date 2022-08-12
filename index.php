<?php
require 'functions.php';

if (isset ($_POST ["submit"]))

      if( comment($_POST) > 0 ) {
            echo "<script>
                        alert('Pesan telah terkirim!')
                  </script>";
      } else {
            echo mysqli_error($conn);
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Fantastic4</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>
      <!-- nav START -->
      <nav>
            <div class="header">
                  <div class="logo"><a href="">Fantastic<b>4</b></a></div>
                  <div class="menu">
                        <ul>
                              <li class="nav-link"><a href="#home">Home</a></li>
                              <li class="nav-link"><a href="#profile">Profile</a></li>
                              <li class="nav-link"><a href="#myschool">MySchool</a></li>
                              <li class="nav-link"><a href="#comment">Contact</a></li>
                        </ul>
                  </div>
            </div>
            <div class="humberger">
                  <span></span>
                  <span></span>
                  <span></span>
            </div>
      </nav>
      <script src="humberger.js"></script>
      <!-- nav END -->

      <!-- Home Start -->
      <section id="home">
            <div class="hero">
                  <img src="img/backgound.png" class="foto-bersama" alt="">
                  <div class="deskripsi">
                  <h1 class="nama">Fantastic4</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione consequatur recusandae nisi autem ut, blanditiis facilis? Officia iure animi reiciendis necessitatibus praesentium, ex mollitia culpa? Sed adipisci numquam dolores laboriosam?</p>
                  </div>
            </div>
      </section>
      <!-- Home END -->

      <!-- profile start -->
      <section id="profile">
            <h3 class="profile_title">Profile Fantastic4</h3>
            <div class="underline_profile"></div>
            <div class="profile">
                  <div class="card">
                        <a href="biodata/agus.html"><img src="img/agus.png" class="img_content" alt="agus"></a>
                        <div class="profile_content">
                        <span>Nama: I Putu Agus Yudi Januarta 
                              <br>Alamat: Jln. Belimbing,No.69,Angantaka <br> 
                              <a href="biodata/agus.html" class="contact">Selengkapnya</a>
                        </span>
                        </div>
                  </div>
                  <div class="card">
                        <a href="biodata/yogik.html"><img src="img/yogi.png" class="img_content" alt="yogi"></a>
                        <div class="profile_content">
                        <span>Nama: I Putu Yogi Aditya Wirawan 
                              <br>Alamat: Jln. Nangka Selatan,Gg.XI <br> 
                              <a href="biodata/yogik.html" class="contact">Selengkapnya</a>
                        </span>
                        </div>
                  </div>
                  <div class="card">
                        <a href="biodata/rifqi.html"><img src="img/rifqi.png" class="img_content" alt="rifqi"></a>
                        <div class="profile_content">
                        <span>Nama: Rifqi Maulana Ali
                              <br>Alamat: Jln. Ayani,Gg.III,No.6<br> 
                              <a href="biodata/rifqi.html" class="contact">Selengkapnya</a>
                        </span>
                        </div>
                  </div>
                  <div class="card">
                        <a href="biodata/juli.html"><img src="img/julii.png" class="img_content" alt="juliarta"></a>
                        <div class="profile_content">
                        <span>Nama: Si Ngurah Putu Juliarta
                              <br>Alamat: Gg. Larosa, No.49, Sempidi <br> 
                              <a href="biodata/juli.html" class="contact">Selengkapnya</a>
                        </span>
                        </div>
                  </div>
            </div>
      </section>
      <!-- profile END -->

      <!-- MySchool Start-->
      <section id="myschool">
            <div class="school">
                  <div class="desk_school">
                        <a href="https://www.smkn1denpasar.sch.id/"><img src="img/skensa.jpg" class="img_school" alt="smk n 1 denpasar"></a>
                        <h2 class="nama_school">SMK NEGERI 1 DENPASAR</h2>
                        <p class="deskripsi_school">SMK Negeri 1 Global Denpasar dahulu bernama STM Negeri 1 Denpasar berdiri tanggal 24 September 1962 dengan Nomor SK: 17/Djapt/B1/1962 atas prakarsa Pemerintah Tingkat I Bali, dimaksudkan adalah untuk membantu mempercepat pelaksanaan pembangunan di daerah tingkat I Bali. pertama kali memiliki jurusan Mesin dan Bangunan dengan jumlah siswa angkatan pertama hanya 45 orang dengan guru pengajar dari guru ST, SMA, Proyek bandara Ngurah Rai dan Bali Beach Hotel dan Departemen PU dengan lokasi gedung di jalan Gunung Agung Denpasar. <a href="https://id.wikipedia.org/wiki/SMK_Negeri_1_Denpasar"> Lihat lebih lengkapnya =></a></p>
                  </div>
            </div>
      </section>
      <!-- MySchool END -->

      <!-- contact -->
      <div class="comment" id="comment">
      <form action="" method="post">
            <div class="title-comment">Contact</div>

            <label for="nama" class="lbl">Nama :</label>
            <input type="text" name="nama" id="nama" placeholder="Contoh: Budi" required>

            <label for="email" class="lbl">Email :</label>
            <input type="email" name="email" id="email" placeholder="Contoh: youremail@gmail.com" required>
            

            <label for="text" class="lbl">Message :</label>
            <input type="text" name="comment" id="comment" placeholder="Contoh: Yogik aku suka kamu" class="isi-comment" required>

            <button type="submit" name="submit" id="submit" value="submit">Submit</button>
      </form>
      </div>
      
      <!-- copyrigt start -->
      <footer id="copyright">
            <div class="copyright_content">
			&copy; 2022 <b>Fantastic4</b> All Rights Reserverd.
		</div>
      </footer>
      <!-- copyright END -->
</body>
</html>