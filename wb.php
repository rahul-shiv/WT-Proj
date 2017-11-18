<html>
<head>
<link rel="stylesheet" type="text/css" href="stuff.css">
<style>

body {margin:0;}


.before {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.before span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.before span:after {
  content: '«';
  position: relative;
  opacity: 0;
  top: 0;
  right: 0px;
  transition: 0.5s;
}

.before:hover span {
  padding-left: 25px;
}

.before:hover span:after {
  opacity: 1;
  right: 130px;
}

.after {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  float: right;
}

.after span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.after span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: 0px;
  transition: 0.5s;
}

.after:hover span {
  padding-right: 25px;
}

.after:hover span:after {
  opacity: 1;
  right: -30px;
}


</style>

<link rel="stylesheet" href="w3.css">
</head>
<body>

<div class="nav">

    <ul>
      <li><big><strong><a class="active" href="proj.html">HOME</a></big></strong></li>
      <li class="dropdown">
        <a href="#men" class="dropbtn">MEN</a>
        <div class="dropdown-content">
          <a href="mt.html">T-Shirts</a>
          <a href="ms.html">Shirts</a>
          <a href="mb.html">Bottoms</a>
          <a href="mspo.html">Sportswear</a>
          <a href="ma.html">Accessories</a>
          <a href="mf.html">Footwear</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="#women" class="dropbtn">WOMEN</a>
        <div class="dropdown-content">
            <a href="we.html">Ethnicwear</a>
            <a href="wt.html">Tops</a>
            <a href="ws.html">Skirts and Dresses</a>
            <a href="wb.html">Bottomwear</a>
            <a href="wa.html">Accessories</a>
            <a href="wf.html">Footwear</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="#shoes" class="dropbtn">FOOTWEAR</a>
        <div class="dropdown-content">
          <a href="wf.html">Women's Footwear</a>
          <a href="mf.html">Men's Footwear</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="#acc" class="dropbtn">ACCESSORIES</a>
        <div class="dropdown-content">
          <a href="wa.html">Women's Accessories</a>
          <a href="ma.html">Men's Accessories</a>
        </div>
      </li>
    </ul>
</div>
<div class="sidebar">
<ul>
    <li><a  href="we.html">Ethnic Wear</a></li>
    <li><a href="wt.html">Tops</a></li>
    <li><a href="ws.html">Skirts and Dresses</a></li>
    <li><a class="active" href="wb.html">Bottomwear</a></li>
    <li><a href="wa.html">Accessories</a></li>
    <li><a  href="wf.html">Footwear</a></li>
</ul>
</div>
<div class="main">
<!-- <p><strong>Note:</strong> We use href="#" for test links. In a real web site this would be URLs.</p> -->
<div class="mySlides">
    <div class="blk">
      <div class="container">
        <img src="WB/wb1.jpg">
        <div class="bottom-left"><del>Rs.899</del></div>
        <div class="bottom-right">Rs.799</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WB/wb2.jpg">
        <div class="bottom-left"><del>Rs.799</del></div>
        <div class="bottom-right">Rs.479</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WB/wb3.jpg">
        <div class="bottom-left"><del>Rs.899</del></div>
        <div class="bottom-right">Rs.749</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WB/wb4.jpg">
        <div class="bottom-left"><del>Rs.599</del></div>
        <div class="bottom-right">Rs.499</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WB/wb5.jpg">
        <div class="bottom-right">Rs.699</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WB/wb6.jpg">
        <div class="bottom-left"><del>Rs.1399</del></div>
        <div class="bottom-right">Rs.839</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WB/wb7.jpg">
        <div class="bottom-left"><del>Rs.1199</del></div>
        <div class="bottom-right">Rs.599</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WB/wb8.jpg">
        <div class="bottom-left"><del>Rs.1099</del></div>
        <div class="bottom-right">Rs.879</div>
      </div>
    </div>

</div>
<div class="mySlides">
  <div class="blk">
    <div class="container">
      <img src="WB/wb9.jpg">
      <div class="bottom-left"><del>Rs.899</del></div>
      <div class="bottom-right">Rs.799</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb10.jpg">
      <div class="bottom-left"><del>Rs.1899</del></div>
      <div class="bottom-right">Rs.1329</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb11.jpg">
      <div class="bottom-left"><del>Rs.2099</del></div>
      <div class="bottom-right">Rs.1469</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb12.jpg">
      <div class="bottom-left"><del>Rs.1499</del></div>
      <div class="bottom-right">Rs.1199</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb13.jpg">
      <div class="bottom-left"><del>Rs.995</del></div>
      <div class="bottom-right">Rs.447</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb14.jpg">
      <div class="bottom-left"><del>Rs.1999</del></div>
      <div class="bottom-right">Rs.1599</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb15.jpg">
      <div class="bottom-left"><del>Rs.1499</del></div>
      <div class="bottom-right">Rs.749</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb16.jpg">
      <div class="bottom-left"><del>Rs.1499</del></div>
      <div class="bottom-right">Rs.1049</div>
    </div>
  </div>
</div>
<div class="mySlides">
  <div class="blk">
    <div class="container">
      <img src="WB/wb17.jpg">
      <div class="bottom-left"><del>Rs.1199</del></div>
      <div class="bottom-right">Rs.959</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb18.jpg">
      <div class="bottom-left"><del>Rs.1399</del></div>
      <div class="bottom-right">Rs.839</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb19.jpg">
      <div class="bottom-left"><del>Rs.799</del></div>
      <div class="bottom-right">Rs.479</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb20.jpg">
      <div class="bottom-left"><del>Rs.2099</del></div>
      <div class="bottom-right">Rs.1469</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb21.jpg">
      <div class="bottom-left"><del>Rs.1775</del></div>
      <div class="bottom-right">Rs.798</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb22.jpg">
      <div class="bottom-left"><del>Rs.899</del></div>
      <div class="bottom-right">Rs.494</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb23.jpg">
      <div class="bottom-right">Rs.899</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb24.jpg">
      <div class="bottom-right">Rs.2695</div>
    </div>
  </div>
</div>
<div class="mySlides">
  <div class="blk">
    <div class="container">
      <img src="WB/wb25.jpg">
      <div class="bottom-left"><del>Rs.899</del></div>
      <div class="bottom-right">Rs.584</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb26.jpg">
      <div class="bottom-left"><del>Rs.1695</del></div>
      <div class="bottom-right">Rs.932</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb27.jpg">
      <div class="bottom-left"><del>Rs.1899</del></div>
      <div class="bottom-right">Rs.1139</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb28.jpg">
      <div class="bottom-left"><del>Rs.1495</del></div>
      <div class="bottom-right">Rs.822</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb29.jpg">
      <div class="bottom-left"><del>Rs.2499</del></div>
      <div class="bottom-right">Rs.1624</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb30.jpg">
      <div class="bottom-left"><del>Rs.2499</del></div>
      <div class="bottom-right">Rs.1624</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb31.jpg">
      <div class="bottom-left"><del>Rs.1995</del></div>
      <div class="bottom-right">Rs.997</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WB/wb32.jpg">
      <div class="bottom-left"><del>Rs.1199</del></div>
      <div class="bottom-right">Rs.959</div>
    </div>
  </div>
</div>
<button class="before"style="vertical-align:middle" onclick="plusDivs(-1)"><span>Previous</span></button>
<button class="after" style="vertical-align:middle" onclick="plusDivs(1)"><span>Next</span></button>

</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_black_fixed by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:36 GMT -->
</html>
