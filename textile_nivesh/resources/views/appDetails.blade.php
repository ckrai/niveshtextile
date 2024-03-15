@extends('layouts.app')
@section('content')
<div class="container">

  <div class="col-md-12"> 
    <div class="form-group">
      <!-- <a href="{{ route('login') }}" class="btn btn-success" style="float: left;">Back</a> -->
      <a href="{{ route('login') }}" class="btn btn-success" style="float: right;">Back</a>
    </div>   
    
      @forelse ($users as $u)

  <div class="form-group row">
    <legend style="color: #38c172; font-weight: bold; text-align:center;">UNIT Details</legend>
    <h4 style="color: black; font-weight: bold; text-align: center;">ID:<a>{{$u->unique_id}}</a></h4>
    <div class="col-2"><strong>ID: </strong>{{$u->unique_id}}</div>
      <div class="col-3"><strong>Name: </strong>{{$u->name}}</div>
      <div class="col-2"><strong>Mobile: </strong>{{ $u->mobile }}</div>
      <div class="col-2"><strong>Email-id: </strong>{{ $u->email }}</div>
      <div class="col-3"><strong>Address: </strong>{{$u->address}}</div>

      <legend style="color: #38c172; font-weight: bold; text-align: center;">FORM Details</legend>

      <!-- <div class="col-4"><strong>Applicant: </strong><a download href="{{url('assets/'. $u->n_applicant)}}">{{ $u->n_applicant }}</a><br/><a style="font-size: 12px;">Date: {{ $u->created_at->format('d-m-Y') }}</a></div>
      <div class="col-4"><strong>Constitution: </strong><a download href="{{url('assets/'. $u->constitution)}}">{{ $u->constitution }}</a><br/><a style="font-size: 12px;">Date: {{ $u->created_at->format('d-m-Y') }}</a></div> -->
      
      <div class="col-3"><strong>Form status: </strong>{{ $u->status_log }}</div>
  </div>
	  @empty
	    <p class="btn btn-outline-danger">No record found, Please enter valid input!</p>
	  @endforelse
  	<br/>                   
  </div>
<br/>
</div>
@endsection
   