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



