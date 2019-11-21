@extends('layouts.user')

@section('content')
  <div class="container">
    <h1>Colleges and Universities in Myanmar</h1>

    <form action="/search" method="get">
      <div class="input-group">
        <input type="search" class="form-control" name="search">&nbsp;
        <span class="input-group-prepand">
          <button type="submit" class="btn btn-primary">Search</button>
        </span>
      </div>
    </form>

    <br>

    <table width='100%' class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Town</th>
          <th>Admission Mark</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($unis as $uni)
          <tr>
            <td>{{$uni->id}}</td>
            <td><a href="/universities/{{$uni->id}}">{{$uni->name}}</a></td>
            <td>{{$uni->address}}</td>
            <td>{{$uni->admission_marks}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{$unis->links()}}
  </div>
@endsection
