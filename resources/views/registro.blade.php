<!DOCTYPE html>
<html>
 <head>
  <title>Simple Login System in Laravel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style type="text/css">
      input{max-height:35px;}
      h3{text-align: center;padding:5px;margin:50px auto;}
        .box{
            width:600px;
            margin:50px auto;
            border:1px solid #ccc;
        }
  </style>
 </head>
 <header>
     <h3>Registrate en nuestra web</h3>
 </header>
<br />
  <div class="container box">
    <form method="post" action="{{ url('/main/registro') }}">
        {{ csrf_field() }}
        <div class="d-flex justify-content-between">
                    <input type="name" name="name" placeholder="Introduzca su Nombre" class="form form-control p-3 m-1" />
        </div>
        <div class="d-flex justify-content-between">
                    <input type="email" name="email" placeholder="Introduzca su Email" class="form form-control p-3 m-1" />
                    <input type="password" name="password"  placeholder="Introduzca su Contraseña"  class="form-control p-1 m-1" />
        </div>
        <div class="d-flex justify-content-between form-group m-2 p-1">
            <input type="submit" name="login" class="btn btn-primary" value="Login" />
            <input type="reset" name="reset" class="btn btn-danger" value="Resetear" />
        </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
