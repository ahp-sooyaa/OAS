@extends('layouts.user')

@section('content')
    <div class="container">

        <h1>Personal Information</h1>

        <hr>

        <form action="/profile" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div>
                <label class="btn btn-primary">
                    Choose a photo <input type="file" name="profileimg" hidden>
                </label>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="dateofbirth">Date of Birth</label>
                <input type="text" name="dob" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Phone no</label>
                <input type="text" name="phoneno" class="form-control">
            </div>
            <div class="form-row px-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="M" name="gender" id="" checked>
                    <label class="form-check-label" for="gender">Male</label>
                </div>
                <div class="form-check mx-2">
                    <input class="form-check-input" type="radio" value="F" name="gender">
                    <label class="form-check-label" for="gender">Female</label>
                </div>
            </div>

            <div class="form-group py-2">
                <button class="btn btn-primary form-control">Save</button>
            </div>
        </form>
    </div>

@endsection
