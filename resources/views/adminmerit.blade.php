@extends('layouts.admin')

@section('content')
  <div class="container">
    <h2>Admin merit</h2>
    <hr>
    @if(session('success'))
      <div class="alert alert-success">
         {{ session('success') }}
      </div>
    @endif
    <form action="/admin/adminmerit" method="post">
      {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Roll NO</label>
            <input type="text" name="roll_no" class="form-control">
        </div>
        <div class="form-group">
            <label for="dateofbirth">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Father Name</label>
            <input type="text" name="fathername" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Obtained Marks</label>
            <input type="text" name="obtainedmark" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Total Marks</label>
            <input type="text" name="totalmark" class="form-control">
        </div>
        <div class="form-group py-2">
            <button class="btn btn-primary form-control">Save</button>
        </div>
    </form>
  </div>
@endsection
