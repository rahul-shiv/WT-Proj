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
    <li><a class="active" href="wt.html">Tops</a></li>
    <li><a href="ws.html">Skirts and Dresses</a></li>
    <li><a href="wb.html">Bottomwear</a></li>
    <li><a href="wa.html">Accessories</a></li>
    <li><a  href="wf.html">Footwear</a></li>
</ul>
</div>
<div class="main">
<!-- <p><strong>Note:</strong> We use href="#" for test links. In a real web site this would be URLs.</p> -->
<div class="mySlides">
    <div class="blk">
      <div class="container">
        <img src="WT/wt1.jpg">
        <div class="bottom-left"><del>Rs.865</del></div>
        <div class="bottom-right">Rs.778</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WT/wt2.jpg">
        <div class="bottom-left"><del>Rs.1099</del></div>
        <div class="bottom-right">Rs.659</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WT/wt3.jpg">
        <div class="bottom-left"><del>Rs.699</del></div>
        <div class="bottom-right">Rs.559</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WT/wt4.jpg">
        <div class="bottom-left"><del>Rs.865</del></div>
        <div class="bottom-right">Rs.778</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WT/wt5.jpg">
        <div class="bottom-left"><del>Rs.949</del></div>
        <div class="bottom-right">Rs.664</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WT/wt6.jpg">
        <div class="bottom-left"><del>Rs.3599</del></div>
        <div class="bottom-right">Rs.1979</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WT/wt7.jpg">
        <div class="bottom-left"><del>Rs.549</del></div>
        <div class="bottom-right">Rs.439</div>
      </div>
    </div>
    <div class="blk">
      <div class="container">
        <img src="WT/wt8.jpg">
        <div class="bottom-left"><del>Rs.1299</del></div>
        <div class="bottom-right">Rs.649</div>
      </div>
    </div>

</div>
<div class="mySlides">
  <div class="blk">
    <div class="container">
      <img src="WT/wt9.jpg">
      <div class="bottom-left"><del>Rs.699</del></div>
      <div class="bottom-right">Rs.384</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt10.jpg">
      <div class="bottom-left"><del>Rs.599</del></div>
      <div class="bottom-right">Rs.359</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt11.jpg">
      <div class="bottom-left"><del>Rs.649</del></div>
      <div class="bottom-right">Rs.519</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt12.jpg">
      <div class="bottom-left"><del>Rs.949</del></div>
      <div class="bottom-right">Rs.664</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt13.jpg">
      <div class="bottom-left"><del>Rs.1999</del></div>
      <div class="bottom-right">Rs.1399</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt14.jpg">
      <div class="bottom-left"><del>Rs.1695</del></div>
      <div class="bottom-right">Rs.1186</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt15.jpg">
      <div class="bottom-left"><del>Rs.1299</del></div>
      <div class="bottom-right">Rs.649</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt16.jpg">
      <div class="bottom-left"><del>Rs.1299</del></div>
      <div class="bottom-right">Rs.909</div>
    </div>
  </div>
</div>
<div class="mySlides">
  <div class="blk">
    <div class="container">
      <img src="WT/wt17.jpg">
      <div class="bottom-left"><del>Rs.1099</del></div>
      <div class="bottom-right">Rs.659</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt18.jpg">
      <div class="bottom-left"><del>Rs.7499</del></div>
      <div class="bottom-right">Rs.449</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt19.jpg">
      <div class="bottom-left"><del>Rs.599</del></div>
      <div class="bottom-right">Rs.179</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt20.jpg">
      <div class="bottom-left"><del>Rs.1399</del></div>
      <div class="bottom-right">Rs.979</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt21.jpg">
      <div class="bottom-left"><del>Rs.1499</del></div>
      <div class="bottom-right">Rs.749</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt22.jpg">
      <div class="bottom-left"><del>Rs.1099</del></div>
      <div class="bottom-right">Rs.659</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt23.jpg">
      <div class="bottom-left"><del>Rs.699</del></div>
      <div class="bottom-right">Rs.489</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt24.jpg">
      <div class="bottom-left"><del>Rs.999</del></div>
      <div class="bottom-right">Rs.549</div>
    </div>
  </div>
</div>
<div class="mySlides">
  <div class="blk">
    <div class="container">
      <img src="WT/wt25.jpg">
      <div class="bottom-left"><del>Rs.599</del></div>
      <div class="bottom-right">Rs.359</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt26.jpg">
      <div class="bottom-left"><del>Rs.549</del></div>
      <div class="bottom-right">Rs.329</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt27.jpg">
      <div class="bottom-left"><del>Rs.1299</del></div>
      <div class="bottom-right">Rs.779</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt28.jpg">
      <div class="bottom-left"><del>Rs.5490</del></div>
      <div class="bottom-right">Rs.3568</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt29.jpg">
      <div class="bottom-left"><del>Rs.1001</del></div>
      <div class="bottom-right">Rs.1430</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt30.jpg">
      <div class="bottom-left"><del>Rs.699</del></div>
      <div class="bottom-right">Rs.384</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt31.jpg">
      <div class="bottom-left"><del>Rs.699</del></div>
      <div class="bottom-right">Rs.279</div>
    </div>
  </div>
  <div class="blk">
    <div class="container">
      <img src="WT/wt32.jpg">
      <div class="bottom-left"><del>Rs.599</del></div>
      <div class="bottom-right">Rs.299</div>
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
