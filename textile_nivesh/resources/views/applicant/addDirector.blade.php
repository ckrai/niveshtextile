
@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="3.3.6/css/bootstrap.min.css">
    <!-- <link href="http://meyerweb.com/eric/tools/css/reset/reset.css" rel="stylesheet" />-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
@endpush
@section('content')
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.topnav a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.topnav a:hover {
  background-color: #000;
}

.topnav a.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .topnav a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
          <div class="form-group" style="margin-top: 24px;">
              <a href="{{ route('applicant.list') }}" class="btn btn-success">Back</a>
          </div>
         @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <strong>{{ \Session::get('success') }}</strong>
                    </div>
                @endif
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
      <!-- <legend style="color: green; font-weight: bold;">Nivesh textile form</legend> -->

<body>

 <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Enter Director Details</h5>
      </div>
      <div class="card-body">

        <form action="{{route('applicant.saveDir')}}" method="post" enctype="multipart/form-data">
          @csrf
          {{  csrf_field()  }}
          <div class="row">
           <div class="col-4">
            <h5 class="form-label" for="">Director Name</h5>
            <a disabled  name="applicant_id" id="applicant_id"/></a>
              <input type="text" class="form-control" name="director_name" id="director_name" placeholder="Enter name" />
          </div>
          <div class="col-4">
            <h5 class="form-label" for="">Mobile</h5>
              <input type="text" id="director_mobile" name="director_mobile" class="form-control" placeholder="123-456-7890" />
          </div>
          <div class="col-4">
            <h5 class="form-label" for="">Email</h5>
              <input type="email" id="director_email" name="director_email" class="form-control" placeholder="Enter email-id" aria-label="" />
              <h6 class="form-text"> You can use letters, numbers & periods </h6>
            </div>
          </div>
          <div class="row">
          <div class="col-4">
            <h5 class="form-label" for="">Director DIN</h5>
              <input type="text" id="director_din" name="director_din" class="form-control phone-mask" placeholder="Enter Director DIN no" />
          </div>
          <div class="col-4">
            <h5 class="form-label" for="">Director DIN Doc </h5>
            <input type="file" id="director_din_doc" name="director_din_doc" class="form-control-file"/>
          </div>
          </div>
          <div class="row">
          <div class="col-4">
            <h5 class="form-label" for="">Director PAN</h5>
              <input type="text" id="director_pan" name="director_pan" class="form-control" placeholder="Enter Director PAN no"/>
          </div>
           <div class="col-4">
            <h5 class="form-label" for="">Director PAN Doc</h5> 
            <input type="file" id="director_pan_doc" name="director_pan_doc" class="form-control-file"/>
          </div>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
          </body>
        </div>
    </div>
</div>
@endsection
 