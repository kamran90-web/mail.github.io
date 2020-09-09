<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 400px;
  max-height:150px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
  <h1>Foodshala</h1>
  <a href = "/restro"><button class = "btn btn-primary">Sign Up as Restaurant</button></a>
  <a href = "/customer"><button class = "btn btn-primary">Sign Up as Customer</button></a>
   @foreach($users as $user)

<h2 style="text-align:center;height:20px;"></h2>

<div class="card">
  
  <h1>{{$user->name}}</h1>
  <button><a href = "{{'restro/'.$user->id}}">Explore</a></button>
                       
  
</div>
@endforeach
</body>
</html>







                       
