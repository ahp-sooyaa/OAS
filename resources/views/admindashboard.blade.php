@extends('layouts.admin')

@section('content')
<div class="container">
  @if(session('success'))
    <div class="alert alert-success">
       {{ session('success') }}
    </div>
  @endif
  <h2>Admin dashboard</h2>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>University Name</th>
        <th>Admission Mark</th>
        <th>Transcript</th>
        <th>Passport</th>
        <th>Applied Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $uni)
      <tr>
        <td>{{$uni->name}}</td>
        <td>{{$uni->name}}</td>
        <td>{{$uni->admission_marks}}</td>
        <td><img src="../../images/{{$uni->transcript}}" width="50px" height="50px"></td>
        <td><img src="../../images/{{$uni->passport}}" width="50px" height="50px"></td>
        <td>{{$uni->created_at}}</td>
        <td>
          <form action="/admin/dashboard" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="admission_id" value="{{$uni->id}}">
            <button type="submit" class="btn btn-primary">Approve</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
