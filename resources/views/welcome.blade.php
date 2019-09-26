@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="row">
            <select name="">
              <option value="">Choose category</option>
              @foreach($categories as $category)
              <option value="{{$category->name}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <div style="padding:20px" class="form-inline">
            @if($cars)
            @foreach($cars as $car)
            <div class="card" style="width: 20rem;">
              <img src="cars/{{$car->photo}}" width="250px" height="150px" class="card-img-top" alt="...">
              <div class="card-body">
                <ul>
                  <li>Name: {{$car->name}}</li>
                  <li>Price: {{$car->price}}</li>
                  <li>Year: {{$car->year}}</li>
                  <li>Mileage: {{$car->mileage}}</li>
                </ul>
              </div>
            </div>
            @endforeach
            @endif
          </div>
          <div class="col-md-4 offset-md-4">
             {{$cars->links()}}
          </div>
        </div>
    </div>
</div>
@endsection
