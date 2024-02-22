@extends('layouts.app')
@section('content')
    
{!! Form::model($student,['route'=>['students.update',$student->id],'method'=>'put']) !!}
@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    {!! Form::text('name', null,['class'=>'form-control','placeholder'=> 'Enter your name']) !!}
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">IDno</label>
    {!! Form::text('IDno', null,['class'=>'form-control','placeholder'=> 'Subject ID']) !!}
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Age</label>
    {!! Form::text('age', null,['class'=>'form-control','placeholder'=> 'Age']) !!}
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
{!! Form::close() !!}
@endsection