@extends('layouts.user')

@section('content')
<div class="container">
  <h1>Application form for {{$uni->name}}</h1>

  <hr>

  @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
  @endif
  @if(session('success'))
    <div class="alert alert-success">
       {{ session('success') }}
    </div>
  @endif

  University Name: {{$uni->name}} <br>
  Address: {{$uni->address}} <br>
  Admission Marks: {{$uni->admission_marks}} <br>
  Admission Start Date: {{$uni->start_date}} <br>
  Admission End Date: {{$uni->end_date}} <br>
  Description: {{$uni->description}} <br> <br>

  <em>Please upload your transcript and passport for admission form!</em> <br>

<form class="" action="/applieduniversity" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type="hidden" name="stu_id" value="{{$stu_id}}">
  <input type="hidden" name="uni_id" value="{{$uni->id}}">
  Transcript :
  <label class="btn btn-primary">
      Choose a photo <input type="file" name="transcript" hidden>
  </label> <br>
  Passport :
  <label class="btn btn-primary">
      Choose a photo <input type="file" name="passport" hidden>
  </label> <br>

  <button type="submit" class="btn btn-primary">Apply</button> <br>
</form>
</div>

<!--<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });

    });

</script>-->
@endsection
