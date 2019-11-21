@extends('layouts.user')

@section('content')
<div class="container">
  <h2>Your applied universities will be shown here.</h2>

  @if(session('fail'))
    <div class="alert alert-danger">
       {{ session('fail') }}
    </div>
  @endif

  <table width="100%" class="table table-striped">
    <thead>
      <tr>
        <td>University Name</td>
        <td>Address</td>
        <td>Admission Marks</td>
        <td>Applied Date</td>
        <td>Status</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $uni)
      <tr>
        <td>{{$uni->name}}</td>
        <td>{{$uni->address}}</td>
        <td>{{$uni->admission_marks}}</td>
        <td>{{$uni->created_at}}</td>
        <td>{{$uni->checked}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
