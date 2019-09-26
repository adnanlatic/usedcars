@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="row">
            <a href="{{url('category/create')}}" class="btn btn-primary float-right">Add new</a>
          </div>
          <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Update</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr>
                  <th scope="row">{{$category->id}}</th>
                  <td>{{$category->name}}</td>
                  <td><a href="{{ url('category/' . $category->id.'/edit') }}" class="btn btn-primary">Edit</a></td>
                <td>
                  {!! Form::open(['method'=>'DELETE', 'action'=>['CategoryController@destroy',$category->id]]) !!}
                  {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                  {!! Form::close() !!}
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
@endsection
