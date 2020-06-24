@extends('layouts.app')

@section('title','Selamat Datang Di Removie')
<style>
    .populer{
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #878287;}
</style>

<body>

@section('content')
<div class="container">
            <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                <h6 class="namaweb">REVIEW MOVIE</h6>
                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"aria-label="Search">
            </form>
        </div>
<div class="container">
<!-- Kategori -->
<center>
<section class="menusdrop container " style="position: relative; margin: 1px auto; padding-top: 40px;" >
<div class="dropdown" style="position: relative; margin: 5px auto; padding-top: 5px;">
  <button class="dropbtn bg-transparent text-dark">Comedy</button>
  <div class="dropdown-content">
    <a href="#">Barat</a>
    <a href="#">Asia</a>
    <a href="#">Indonesia</a>
  </div>
</div>
<div class="dropdown align-self-center" style="position: relative; margin: 10px auto; padding-top: 40px;">
  <button class="dropbtn bg-transparent text-dark">Animation</button>
  <div class="dropdown-content">
    <a href="#">Barat</a>
    <a href="#">Asia</a>
    <a href="#">Indonesia</a>
  </div>
</div>
<div class="dropdown" style="position: relative; margin: 10px auto; padding-top: 40px;">
  <button class="dropbtn bg-transparent text-dark">Action</button>
  <div class="dropdown-content">
    <a href="#">Barat</a>
    <a href="#">Asia</a>
    <a href="#">Indonesia</a>
  </div>
</div>
<div class="dropdown" style="position: relative; margin: 10px auto; padding-top: 40px;">
  <button class="dropbtn bg-transparent text-dark">Adventure</button>
  <div class="dropdown-content">
    <a href="#">Barat</a>
    <a href="#">Asia</a>
    <a href="#">Indonesia</a>
  </div>
</div>
<div class="dropdown" style="position: relative; margin: 10px auto; padding-top: 40px;">
  <button class="dropbtn bg-transparent text-dark">History</button>
  <div class="dropdown-content">
    <a href="#">Barat</a>
    <a href="#">Asia</a>
    <a href="#">Indonesia</a>
  </div>
</div>
<div class="dropdown" style="position: relative; margin: 10px auto; padding-top: 40px;">
  <button class="dropbtn bg-transparent text-dark">Horror</button>
  <div class="dropdown-content">
    <a href="#">Barat</a>
    <a href="#">Asia</a>
    <a href="#">Indonesia</a>
  </div>
</div>
</section>
</center>


<!-- Paling Populer -->
<section class="populer" style="position: relative; margin: 10px auto; padding-top: 40px;">
<hr>
<h2>&#124;&nbsp;Populer</h2>
<div class="card-deck ">
  <div class="card">
  <a href=""><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA_-tL18_rj9zEcjN6n41NEaJm-kRNF9UeOtvksZ4z_OW6jRA9" class="card-img-top" alt="..."></a> 
  </div>
  <div class="card">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA_-tL18_rj9zEcjN6n41NEaJm-kRNF9UeOtvksZ4z_OW6jRA9" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA_-tL18_rj9zEcjN6n41NEaJm-kRNF9UeOtvksZ4z_OW6jRA9" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA_-tL18_rj9zEcjN6n41NEaJm-kRNF9UeOtvksZ4z_OW6jRA9" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA_-tL18_rj9zEcjN6n41NEaJm-kRNF9UeOtvksZ4z_OW6jRA9" class="card-img-top" alt="...">
  </div>
</div><hr>
</section class="terbaru">
<section class="populer" style="position: relative; margin: 10px auto; padding-top: 40px;">
<hr>
<!-- Terbaru -->
<h2>&#124; Terbaru</h2>
<div class="card-deck ">
  <div class="card">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA_-tL18_rj9zEcjN6n41NEaJm-kRNF9UeOtvksZ4z_OW6jRA9" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA_-tL18_rj9zEcjN6n41NEaJm-kRNF9UeOtvksZ4z_OW6jRA9" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA_-tL18_rj9zEcjN6n41NEaJm-kRNF9UeOtvksZ4z_OW6jRA9" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA_-tL18_rj9zEcjN6n41NEaJm-kRNF9UeOtvksZ4z_OW6jRA9" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA_-tL18_rj9zEcjN6n41NEaJm-kRNF9UeOtvksZ4z_OW6jRA9" class="card-img-top" alt="...">
  </div>
</div>
</section><hr>
<div style="position: relative; margin: 10px auto; padding-top: 50px;"></div>
</div>
</body>
@endsection 







<html>
<head>
	<title>Membuat Rating Dengan HTML CSS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
  body{
	margin:0;
	padding: 0;
	background:#262626;
}
.rating{
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%) rotateY(180deg);
	display: flex;
}
.rating input{
	display: none;
}
.rating label{
	display: block;
	cursor: pointer;
	width: 50px;
	/*background: #ccc;*/
}
.rating label:before{
	content:'\f005';
	font-family: fontAwesome;
	position: relative;
	display: block;
	font-size: 50px;
	color: #101010;
}
.rating label:after{
	content:'\f005';
	font-family: fontAwesome;
	position: absolute;
	display: block;
	font-size: 50px;
	color: #fffa00;
	top:0;
	opacity: 0;
	transition: .5s;
	text-shadow: 0 2px 5px rgba(0,0,0,.5);
}
.rating label:hover:after,
.rating label:hover ~ label:after,
.rating input:checked ~ label:after
{
	opacity: 1;
}
  </style>
</head>
<body>
	<div class="rating">
		<input type="radio" name="star" id="star1"><label for="star1"></label>
		<input type="radio" name="star" id="star2"><label for="star2"></label>
		<input type="radio" name="star" id="star3"><label for="star3"></label>
		<input type="radio" name="star" id="star4"><label for="star4"></label>
		<input type="radio" name="star" id="star5"><label for="star5"></label>
	</div>
</body>
</html>