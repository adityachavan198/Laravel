@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img class="rounded-circle" src="https://media.licdn.com/dms/image/C5103AQE7xUNj5WZ2TQ/profile-displayphoto-shrink_200_200/0?e=1582156800&v=beta&t=71C6k_b1YK0HADP7ZAClQxk23k3nCn5-4iXAPSx_w0g">

    </div>
    <div class="col-9 pt-5">
      <div class="">
        <h1>{{ $user->name }}</h1>
      </div>
      <div class="d-flex">
        <div class="pr-5"> <strong>153</strong> posts</div>
        <div class="pr-5"> <strong>23k</strong> followers</div>
        <div class="pr-5"> <strong>212</strong> following</div>
      </div>
      <div class="pt-4 font-weight-bold">https://adityarchavan.com</div>
      <div class="">Computer Engineering Student at University of Mumbai</div>
      <div class="">
        <a href="https://adityarchavan.com/">https://adityarchavan.com</a>
      </div>
    </div>
  </div>

  <div class="row" pt-5>
    <div class="col-4">
      <img src="https://images.pexels.com/photos/3353994/pexels-photo-3353994.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="w-100" alt="">

    </div>
    <div class="col-4">
      <img src="https://images.pexels.com/photos/2318555/pexels-photo-2318555.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="w-100" alt="">
    </div>
    <div class="col-4">
      <img src="https://images.pexels.com/photos/3353994/pexels-photo-3353994.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="w-100" alt="">
    </div>
  </div>

</div>
@endsection
