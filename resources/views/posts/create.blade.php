@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          {!! Form::open(['method'=>'POST','action'=>'PostController@store','files'=>'true']) !!}
          @csrf
            <div class="form-group">
              <label for="name">Category:</label>
              {!! Form::select('category_id',[''=>'Select category']+$categories,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              <label for="name">Name:</label>
              {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter car name']) !!}
            </div>
            <div class="form-group">
              <label for="name">Price:</label>
              {!! Form::text('price',null,['class'=>'form-control','placeholder'=>'Enter price']) !!}
            </div>
            <div class="form-group">
              <label for="name">Year:</label>
              {!! Form::text('year',null,['class'=>'form-control','placeholder'=>'Enter year']) !!}
            </div>
            <div class="form-group">
              <label for="name">Mileage:</label>
              {!! Form::text('mileage',null,['class'=>'form-control','placeholder'=>'Enter mileage']) !!}
            </div>
            <div class="form-group">
              <label for="name">Photo: </label>
              {!! Form::file('photo',null,['class'=>'form-control']) !!}
            </div>
            <button type="submit" class="btn btn-primary float-right">Save</button>
          {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection
