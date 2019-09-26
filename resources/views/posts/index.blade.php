@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Year</th>
                  <th scope="col">Mileage</th>
                  <th scope="col">Approve</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cars as $car)
                <tr>
                  <th scope="row">{{$car->id}}</th>
                  <td>{{$car->name}}</td>
                  <td>{{$car->price}}</td>
                  <td>{{$car->year}}</td>
                  <td>{{$car->mileage}}</td>
                  @if($car->approved == 0)
                  <td><a href="{{ url('posts/' . $car->id.'/edit') }}" class="btn btn-primary">Approve</a></td>
                  @else
                  <td>Approved!</td>
                  @endif
                <td>
                  {!! Form::open(['method'=>'DELETE', 'action'=>['PostController@destroy',$car->id]]) !!}
                  {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                  {!! Form::close() !!}
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div style="margin: 0 auto">
              {{ $cars->links() }}
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
