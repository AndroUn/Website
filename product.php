<html>
<head>
    <title> website</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="head">
<a href="index.php" style="cursor: pointer" ><img src="img/name.png"></a>
<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder=" ძებნა" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <button id="log" onclick="openForm()">შესვლა</button>
</div>
<div class="form-popup" id="myForm" action="php\sign-in.php">
        <form class="form-container" action="">
                <h1>შესვლა სისტემაში</h1>
                <input type="text" placeholder="სახელი" name="username">
                <input type="password" placeholder="პაროლი" name="psw">
                <p class="msg none">Lorem ipsum dolor sit amet.</p>
                <button type="submit" class="btn1 login-btn" value="submit">შესვლა</button>
                <button type="button" class="btn1-cancel" onclick="closeForm()"><i class="fa fa-times" aria-hidden="true"></i></button>
                არ გაქ აქქაუნტი? დარეგისტრირდი - <a href="register.php">რეგისტრაცია</a>
            </form>
        </div>
<div class="nav">    
<ul>
  <li><a href="index.php">მთავარი</a></li>
  <li><a href="komp.php">კომპიუტერის აქსესუარები</a></li>
  <li><a href="konsolgames.php">კონსოლების თამაშები</a></li>
  <li><a href="#contact">სხვა პროდუქცია</a></li>
  <li><a href="kompania.php">ჩვენს შესახებ</a></li>
</ul>
</div>
<body>

<div class="oglav">
  <p>მონიტორი Dell S3220DGF</p>
</div>

<!-- The four columns -->
<div class="roww">
  <div class="columnn">
    <img src="img\monik.png" alt="img1" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="columnn">
    <img src="img\dell.jpg" alt="img2" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="columnn">
    <img src="img\monik2.jpg" alt="img3" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="containerr">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" src="img\dell.jpg" style="width:100%">
  <div id="imgtext"></div>
</div>
<script>
/* Execute the magnify function: */
magnify("expandedImg", 3);
/* Specify the id of the image, and the strength of the magnifier glass: */
</script>

<div class="descr">
<div class="oglav">Dell S3220DGF</div>
<div class="cost">
<p>ფასი: 1599₾</p>
<p>ხელმისაწვდომობა: მარაგშია</p>
</div>
<button >ყიდვა</button>
<div class="oglav">მახასიათებლები</div>
<div class="cost">
<p>მწარმოებელი: DELL</p>
<p>დიაგონალი: 32”</p>
<p>გაფართოება: 2560 x 1440</p>
<p>რკალისებური ეკრანი: კი</p>
<p>ეკრანის ზედაპირი: მქრქალი</p>
<p>მატრიცის ტიპი: VA</p>
<p>მატრიცის რეაგირების დრო: 4 მწ</p>
<p>Refresh rate: 165 Hz</p>
<p>სიკაშკაშე: 400 cd/m2</p>
<p>კონტრასტულობა: 3000:1</p>
<p>ხედვის კუთხე: 178 x 178</p>
<p>პიქსელის ზომა: 0.2724მმ</p>
<p>ჩამონტაჟებული დინამიკები: არა</p>
</div>
<div class="oglav">გარანტია</div>
<div class="cost">გარანტია: 3 წელი</div>
</div>

<?php include "phpElements/footer.php";?>


<script src="js/product.js"></script>
<script src="js/script.js"></script>
</body>
</html>