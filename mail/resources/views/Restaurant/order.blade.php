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

<h2 style="text-align:center">Product Card</h2>
@if(Auth::user()->user_type == 'Customer')
<form action = "{{route('order.store')}}" method = "POST">
  @csrf
<div class="card">
  <input type="hidden" value="{{$items->id}}" name="item_id">
  <input type="hidden" value="{{$items->user_id}}" name="restaurant_id">
  <h1>{{$items->name}}</h1>
  <p class="price">{{$items->price}}</p>
  <h3>{{$items->qty}}</h3>
  <button type="submit" class="btn btn-success">Order</button>
</form>
@endif
</body>
</html>
