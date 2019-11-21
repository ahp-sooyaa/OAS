@extends('layouts.user')

@section('content')
<div class="container">
  <h1>Welcome {{$students->name}}</h1>

  <hr>
  @if(session('success'))
    <div class="alert alert-success">
       {{ session('success') }}
    </div>
  @endif

  Name: {{$students->name}} <br>
  Date of Birth: {{$students->dateofbirth}} <br>
  Address: {{$students->address}} <br>
  Phone: {{$students->phone}} <br>
  gender: {{$students->gender}}

@endsection
