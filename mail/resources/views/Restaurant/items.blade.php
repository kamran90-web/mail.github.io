<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
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
   @foreach($items as $item)

<h2 style="text-align:center"></h2>

<div class="card">
  
  <h1>{{$item->name}}</h1>
  <p class="price">{{$item->category}}</p>
  <h3>{{$item->price}}</h3>
  <h3>{{$item->qty}}</h3>
  
  <p><a href = "{{'/items/'.$item->id}}">Book Now</a><button></button></p>
  
</div>
@endforeach
</body>
</html>
