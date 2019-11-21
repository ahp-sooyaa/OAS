@extends('layouts.user')

@section('content')

<div class="container">
  <h2>View Merits</h2>
  <table width="100%" class="table table-striped">
    <thead>
      <tr>
        <td>Roll-no</td>
        <td>Name</td>
        <td>Father Name</td>
        <td>Obtained Marks</td>
        <td>Total Marks</td>
      </tr>
    </thead>
    <tbody>
      @foreach($merits as $merit)
      <tr>
        <td>{{$merit->roll_no}}</td>
        <td>{{$merit->name}}</td>
        <td>{{$merit->father_name}}</td>
        <td>{{$merit->obtained_marks}}</td>
        <td>{{$merit->total_marks}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
