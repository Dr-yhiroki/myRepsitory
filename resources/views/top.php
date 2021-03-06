<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/custom.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>PORTFOLIO</b></h4>
    <p class="w3-text-grey">Template by W3.CSS</p>
  </div>
  <div class="w3-bar-block">
    <a href="/" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>TOP</a>
    <a href="/cart" class="w3-bar-item w3-button w3-padding"><i class="fa fa-shopping-cart fa-fw w3-margin-right" aria-hidden="true"></i>CART</a>
    <div class="box">
      <label for="index1" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list fa-fw w3-margin-right" aria-hidden="true"></i>商品分類</label>
      <input type="checkbox" id="index1" class="on-off">
      <div>
        <ul>
          <a href="/all" class="w3-bar-item w3-button w3-padding"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>ALL</a>
          <a href="/LCDTV" class="w3-bar-item w3-button w3-padding"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>液晶テレビ</a>
          <a href="/refrigerator" class="w3-bar-item w3-button w3-padding"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>冷蔵庫</a>
          <a href="/air_conditioner" class="w3-bar-item w3-button w3-padding"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>エアコン</a>
          <a href="/vacuum_cleaner" class="w3-bar-item w3-button w3-padding"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>掃除機</a>
          <a href="/computer" class="w3-bar-item w3-button w3-padding"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>パソコン</a>
          <a href="/fan" class="w3-bar-item w3-button w3-padding"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>扇風機</a>
        </ul>
      </div>
    </div>

    </div>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>ショールーミングへようこそ</b></h1>

    </div>
  </header>

  <!-- First Photo Grid-->
  <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom">
        <div class="w3-container w3-white">
          <a href="/all"><img src="/photo/0.jpg" alt="" style="width:100%" class="w3-hover-opacity"></a>
          <p>ALL</p>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <div class="w3-container w3-white">
          <a href="/LCDTV"><img src="/photo/1.jpg" alt="" style="width:100%" class="w3-hover-opacity"></a>
          <p>液晶テレビ</p>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <div class="w3-container w3-white">
          <a href="/refrigerator"><img src="/photo/2.jpg" alt="" style="width:100%" class="w3-hover-opacity"></a>
          <p>冷蔵庫</p>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <div class="w3-container w3-white">
          <a href="/air_conditioner"><img src="/photo/4.jpg" alt="" style="width:100%" class="w3-hover-opacity"></a>
          <p>エアコン</p>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <div class="w3-container w3-white">
          <a href="/vacuum_cleaner"><img src="/photo/6.jpg" alt="" style="width:100%" class="w3-hover-opacity"></a>
          <p>掃除機</p>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <div class="w3-container w3-white">
          <a href="/computer"><img src="/photo/9.jpg" alt="" style="width:100%" class="w3-hover-opacity"></a>
          <p>パソコン</p>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <div class="w3-container w3-white">
          <a href="fan"><img src="/photo/10.jpg" alt="" style="width:100%" class="w3-hover-opacity"></a>
          <p>扇風機</p>
        </div>
      </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>


  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>email@email.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Chicago, US</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>512312311</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

  <!-- Footer -->


  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
