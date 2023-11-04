<!DOCTYPE html>
<html>
    <style>
.btn{
    background-color: blue;
    color: white;
}
    </style>
<head>
    <title>Login Page</title>
    @include('navigation')

</head>
<body img src="C:\Users\Gabrielle\Documents\School\Integ\activity5\resources\views\nature-1024x682.jpeg" alt="nature">
    <h1 style="text-align: center">Login Page</h1>
    <form>
        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1">Password   :</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>
