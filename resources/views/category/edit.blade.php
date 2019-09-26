@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          {!! Form::model($category,['method'=>'PATCH','action'=>['CategoryController@update',$category->id]]) !!}
          @csrf
            <div class="form-group">
              <label for="name">Name:</label>
              {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter category name']) !!}
            </div>
            <button type="submit" class="btn btn-primary float-right">Save</button>
          {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection
