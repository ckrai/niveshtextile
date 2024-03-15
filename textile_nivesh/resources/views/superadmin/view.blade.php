
@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="{{ asset('js/app.js') }}" type="text/js"></script>

@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          
          <div class="form-group" style="margin-top: 24px;">
          <a href="{{ route('superadmin.list') }}" class="btn btn-success">Back</a>
          <a href="{{ route('superadmin.list') }}" class="btn btn-success" style="float: right; display: block;"> BC LIST</a>
          </div>
          <legend style="color: #38c172; font-weight: bold;">Nivesh Form Details</legend>
          
        <h4><b>Detail:-</b></h4>
        <div class="form-group row">
        <div class="col-4"><strong>Applicant Name: </strong>{{ $applicant->n_applicant }}</div>
        <div class="col-4"><strong>Constitution: </strong>{{$applicant->constitution}}</div>
        <div class="col-4"><strong>Textile Industry: </strong>{{$applicant->textile_industry}}</div>
        <div class="col-4"><strong>Nature of textile: </strong>{{ $applicant->nature_of_textile }}</div>
        <div class="col-4"><strong>proposed capital: </strong>{{$applicant->proposed_capital}}</div>
        <div class="col-4"><strong>Project side address: </strong>{{$applicant->p_side_address}}</div>
        </div>
                       
        </div>
    </div>
</div>
@endsection
 