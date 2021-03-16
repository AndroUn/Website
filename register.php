<html>
<head>
    <title> website</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
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
  <li><a href="test.php">სხვა პროდუქცია</a></li>
  <li><a href="kompania.php">ჩვენს შესახებ</a></li>
</ul>
</div>
<?php include "phpElements/slider.php";?>

<form id="regForm" >
  <h1>რეგისტრაცია</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <p><input placeholder="სახელი და გვარი....." oninput="this.className = ''" name="full_name"></p>
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="კონტაკტური ნომერი..." oninput="this.className = ''" name="number"></p>
  </div>
  <div class="tab">
    <p><input placeholder="სახელი..." oninput="this.className = ''" name="username"></p>
    <p><input placeholder="გვარი..." oninput="this.className = ''" name="password" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
<?php include "phpElements/footer.php";?>


<script src="js/register.js"></script>
<script src="js/script.js"></script>
</body>
</html>