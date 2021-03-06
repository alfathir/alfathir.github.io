<!DOCTYPE html>
<html lang="id">
<title>AlFathir | Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="asset/img/fotoku.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#biodata" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>BIODATA</p>
  </a>
  <a href="#project" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PROJECT</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#biodata" class="w3-bar-item w3-button" style="width:25% !important">BIODATA</a>
    <a href="#project" class="w3-bar-item w3-button" style="width:25% !important">PROJECT</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> AlFathir.</h1>
    <p>Front End Web Developer.</p>
    <img src="asset/img/fotoku.jpg" alt="boy" class="w3-image" width="500" height="500">
  </header>

  <!-- Biodata -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="biodata">
    <h2 class="w3-text-light-grey"><i class="fa fa-user fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Biodata</h2>
    <hr style="width:200px" class="w3-opacity">
    <div class="w3-section">
      <p><i class="fa fa-id-card fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> M. Habiburrohman Al-Fathir</p>
      <p><i class="fa fa-birthday-cake fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Lamongan, 07/02/2007</p>
      <p><i class="fa fa-map-marker-alt fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> -6.985968, 112.381847</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> +6285270371952 / +6285606023770</p>
      <p><i class="fa fa-at fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> admin@alfathir.my.id</p>
    </div><br>
    <h3 class="w3-padding-16 w3-text-light-grey"><i class="fa fa-hat-wizard fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Keahlian</h3>
    <p class="w3-wide">Front End Web Developer</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">Web Design</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:65%"></div>
    </div>
    <p class="w3-wide">Other Design</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:60%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">5+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">10+</span><br>
        Project Selesai
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">9+</span><br>
        Pelanggan Senang
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">20+</span><br>
        Pertemuan
      </div>
    </div>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download CV
    </button>
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey"><i class="fa fa-dollar-sign fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Harga</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Free</li>
          <li class="w3-padding-16">Landing Page (Hanya Header) <i class="fa fa-check fa-fw w3-text-green w3-medium w3-margin-left"></i></li>
          <li class="w3-padding-16">Asset Gambar Berformat JPG Dengan Resolusi Penuh <i class="fa fa-check fa-fw w3-text-red w3-medium w3-margin-left"></i></li>
          <li class="w3-padding-16">Asset Icon Berformat SVG <i class="fa fa-check fa-fw w3-text-red w3-medium w3-margin-left"></i></li>
          <li class="w3-padding-16">Fast Respons <i class="fa fa-check fa-fw w3-text-red w3-medium w3-margin-left"></i></li>
          <li class="w3-padding-16">
            <h2>Free</h2>
            <span class="w3-opacity">Forever</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Order!</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">Full Page Website (Sesuai Request) <i class="fa fa-check fa-fw w3-text-green w3-medium w3-margin-left"></i></li>
          <li class="w3-padding-16">Asset Gambar Berformat JPG Dengan Resolusi Penuh <i class="fa fa-check fa-fw w3-text-green w3-medium w3-margin-left"></i></li>
          <li class="w3-padding-16">Asset Icon Berformat SVG <i class="fa fa-check fa-fw w3-text-green w3-medium w3-margin-left"></i></li>
          <li class="w3-padding-16">Fast Respons <i class="fa fa-check fa-fw w3-text-green w3-medium w3-margin-left"></i></li>
          <li class="w3-padding-16">
            <h2>Harga Menyesuaikan</h2>
            <span class="w3-opacity">Per Project</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Order!</button>
          </li>
        </ul>
      </div>

    <!-- End Grid/Pricing tables -->
    </div>
    
    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>  
    <img src="asset/img/soon" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Name</span> Lorem ipsum dolor sit.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, placeat.</p><br>
    
    <img src="asset/img/soon" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Name</span> Lorem ipsum dolor sit amet.</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="project">
    <h2 class="w3-text-light-grey">My Project</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="/w3images/wedding.jpg" style="width:100%">
        <img src="/w3images/rocks.jpg" style="width:100%">
        <img src="/w3images/sailboat.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="/w3images/underwater.jpg" style="width:100%">
        <img src="/w3images/chef.jpg" style="width:100%">
        <img src="/w3images/wedding.jpg" style="width:100%">
        <img src="/w3images/p6.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey"><i class="fa fa-phone-alt fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker-alt fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> -6.985968, 112.381847</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> +6285270371952 / +6285606023770</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> admin@alfathir.my.id</p>
    </div><br>
    <p>Kirim Pesan Ke Saya:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Nama" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Pesan" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> KIRIM PESAN
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>

  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>