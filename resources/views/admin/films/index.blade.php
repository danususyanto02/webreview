@extends('layouts.admin')
@section('content')

<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}
</style>
@section('content')
<body>
<nav>
<div class="wrapper">
<nav>
    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Data Film</a></li>
            <li><a href="/admin/user"><i class="fas fa-user"></i>Data User</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>TEST</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>TEST</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>TEST</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Test</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>TEST</a></li>
        </ul> 
    </div>
    </nav>
    <div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Film</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('film.create') }}">Buat halaman film review baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th scope="col">No</th>
            <th scope="col">judul</th>
            <th scope="col">sinopsis</th>
            <th scope="col">gambar</th>
            <th scope="col">Action</th>
        </tr>
        @foreach ($films as $film)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $film->judul }}</td>
            <td>{{ $film->sinopsis }}</td>
            <td>{{ $film->gambar}}</td>
            <td>
                <form action="{{ route('film.destroy',$film->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('film.show',$film->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('film.edit',$film->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $films->links() !!}
      
    </div>
</body>
</html>
@endsection