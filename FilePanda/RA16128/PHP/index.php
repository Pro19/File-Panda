<html>
<title>File Panda</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../CSS/main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #666;
  line-height: 1.8;
}
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bgimg-1 {
  background-image: url("../ART/white-background-geo-shapes.jpg");
  min-height: 100%;
}
.bgimg-2 {
  background-image: url("../ART/blue-data-text-loop.gif");
  min-height: 400px;
}
.bgimg-3 {
  background-image: url("../ART/abstract-line-color-dot.gif");
  min-height: 400px;
}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
<body>
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="../PHP/login.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> LOGIN OR SIGNUP</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">LOGIN</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">FILE PANDA</span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT FILE PANDA</h3>
  <p class="w3-center"><em>Hello!</em></p>
  <p>Welcome to File Panda! This is a free file hosting service. Just make a new account and begin sharing! We never track you or your files. They are just kept with us.
  We don't mind what you share and with whom you share. Panda won't ask anything :)</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Pranshu Mishra</b></p><br>
      <img src="../ART/pranshu-shades.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="300">
    </div>
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to my website. My name is Pranshu Mishra. I am a student at SRM Institute of Science and Technology. This website was
	  made as a project for the Web Programming class.</p>
    </div>
  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Unlimited</span><br>
    Storage Space
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Download link</span><br>
    sharing and creation
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Many</span><br>
    Happy Users
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">(/^▽^)/</span><br>
  </div>
</div>
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">NEWS</span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <script type="text/javascript" language="javascript" src="https://www.rssdog.com/index.php?url=http%3A%2F%2Frss.cnn.com%2Frss%2Fedition_world.rss&amp;mode=javascript&amp;showonly=&amp;maxitems=5&amp;showdescs=1&amp;desctrim=0&amp;descmax=0&amp;tabwidth=50%25&amp;showdate=1&amp;xmlbtn=1&amp;linktarget=_blank&amp;textsize=inherit&amp;bordercol=%23d4d0c8&amp;headbgcol=%23999999&amp;headtxtcol=%23ffffff&amp;titlebgcol=%23f1eded&amp;titletxtcol=%23000000&amp;itembgcol=%23ffffff&amp;itemtxtcol=%23000000&amp;ctl=0">
  </script>
  <script type="text/javascript" language="javascript" src="https://www.rssdog.com/index.php?url=http%3A%2F%2Ffeeds.bbci.co.uk%2Fnews%2Fentertainment_and_arts%2Frss.xml&amp;mode=javascript&amp;showonly=&amp;maxitems=5&amp;showdescs=1&amp;desctrim=0&amp;descmax=0&amp;tabwidth=50%25&amp;showdate=1&amp;xmlbtn=1&amp;linktarget=_blank&amp;textsize=inherit&amp;bordercol=%23d4d0c8&amp;headbgcol=%23999999&amp;headtxtcol=%23ffffff&amp;titlebgcol=%23f1eded&amp;titletxtcol=%23000000&amp;itembgcol=%23ffffff&amp;itemtxtcol=%23000000&amp;ctl=0">
  </script>
  <h3 class="w3-center"><b>WEBSITE IS STILL UNDER CONSTRUCTION</b></h3>
</div>
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>-->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">Why don't you give us a little hi?</h3>
  <p class="w3-center"><em>We would love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="../ART/map-srm.png" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> SRMIST, Chennai, Tamil Nadu, INDIA<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: 8383037086<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: pranshu188@gmail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note.<br>And please give a valid e-mail if you expect a reply.</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Valid E-mail" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Your message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
  </div>
</footer>
 
<script>
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>