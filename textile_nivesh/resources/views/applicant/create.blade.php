
@extends('layouts.app')
@push('style')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> -->
@endpush
@section('script')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
@endsection
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
.navbar-nav {
    float: right;
    margin: 0;
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
       <!--  <div class="form-group row">
    <a><label class="col-form-label" style="color: black; font-weight: bold; text-align: center; font-size: 16px;">UNIQUE: </label>{{ Auth::user()->unique_id }}</a><br/>

    <a><label class="col-form-label" style="color: black; font-weight: bold; text-align: center; font-size: 16px;">Name: </label>{{ Auth::user()->name }}</a><br/>

    <a><label class="col-form-label" style="color: black; font-weight: bold; text-align: center; font-size: 16px;">Email: </label>{{ Auth::user()->email }}<br/></a><br/>

    <a><label class="col-form-label" style="color: black; font-weight: bold; text-align: center; font-size: 16px;">Mobile: </label>{{ Auth::user()->mobile }}</a><br/>
    
  </div> -->
  <div class="form-group" style="margin-top: 24px;">
  <a href="{{ route('applicant.list') }}" class="btn btn-success">Go to Dashboard</a>
  <legend style="color: #337ab7; font-weight: bold; text-align: center;">Nivesh Textile Form</legend>

      <!-- <strong>User details: </strong><br> -->
<strong style="text-align:center; font-size:18px;">ID: </strong>{{ Auth::user()->unique_id }} <br>
<strong style="color: black; font-weight: bold; font-size:18px; text-align: center;">Name: </strong>{{ Auth::user()->name }}<br>
<strong style="color: black; font-weight: bold; font-size:18px; text-align: center;">Email: </strong>{{ Auth::user()->email }}<br>
<strong style="color: black; font-weight: bold; font-size:18px; text-align: center;">Phone: </strong>{{ Auth::user()->mobile }}<br>
<strong style="color: black; font-weight: bold; font-size:18px; text-align: center;">Address: </strong>{{ Auth::user()->address }} <br><br>

      <!-- <h4 style="color: black; font-weight: bold; text-align: center;">UNIQUE:  {{ Auth::user()->unique_id }}</h4> 
       <h5 style="color: black; font-weight: bold; text-align: center;">Name:  {{ Auth::user()->name }}</h5> 
       <h5 style="color: black; font-weight: bold; text-align: center;">Email:  {{ Auth::user()->email }}</h5> 
       <h5 style="color: black; font-weight: bold; text-align: center;">Mobile:  {{ Auth::user()->mobile }}</h5>
       <h5 style="color: black; font-weight: bold; text-align: center;">Address:  {{ Auth::user()->address }}</h5> -->
      </div>
      @if(session()->has('message'))
        <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
      @endif
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Sorry!</strong> There were more problems with your input field.<br><br>
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
      </div>
      @endif
          
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div> 
      @endif
      <body>    
  <table id="example1" class="table table-bordered table-hover">
    <thead>
      <tr class="tag_sec">
       <th class="text-center">S.No</th>
       <th class="text-center col-md-5">Details<br><h6>Documentation</h6></a></th>
       <!-- <th class="text-center">Documentation</th> -->
       <th class="text-center col-md-3">File Upload</th>
       <th class="text-center col-md-2">Remark</th>
       <th class="text-center">Action</th>
       </tr>
    </thead>
    <tbody>
        <tr class="text-center">
        <th class="text-center">1</th>
         <th class="text-center">Business Documents<br><h6>Certificate of Incorporation, Registered partnership deep deed, Trust/Society registration deed.</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="n_applicant">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input type="hidden" name="remark_field" value="remark_n_applicant">
            <input type="text" class="form-control fw-normal mb-1" name="remark" id="remark">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="n_applicant">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_n_applicant">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button>
          </form>
          </td> -->
        </tr>
        <tr class="text-center">
         <th class="text-center">2</th>
         <th class="text-center">Constitution of the Applicant<br><h6>Company/ Partnership firm/ Others</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="constitution">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_constitution">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
        </tr>
        <tr class="text-center">  
        <th class="text-center">3</th>
        <th class="text-center">Textile Industry<br><h6>Industrial grading as per NIC/ID & R Act</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="textile_industry">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_textile_industry">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
          <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="textile_industry">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="hidden" name="remark_field" value="remark_textile_industry">
            <input type="text" class="form-control" name="remark" id="remark">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td> -->
        </tr>
        <tr class="text-center">
         <th class="text-center">4</th>
         <th class="text-center">Nature of Textile Industry<br><h6>New / Expanded / Diversified</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="nature_of_textile">  
          <select class="form-control dropdown-toggle" id="file" name="file" >
          <option value="">Select One</option>
          <option value="New">New</option>
          <option value="Expanded">Expanded</option>
          <option value="Diversified">Diversified</option>            
          </select>
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_nature_of_textile">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="nature_of_textile">
            <select class="form-control dropdown-toggle" id="file" name="file" >
            <option value="">Select One</option>
            <option value="New">New</option>
            <option value="Expanded">Expanded</option>
            <option value="Diversified">Diversified</option>            
            </select>
            <input type="hidden" name="remark_field" value="remark_nature_of_textile">
            <input type="text" class="form-control" name="remark" id="remark">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td> -->
        </tr>
        <tr class="text-center">
          <th class="text-center">5</th>
          <th class="text-center">Proposed Capital<br><h6>Industrial grading as per NIC/ID & R Act </h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="proposed_capital">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_proposed_capital">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="proposed_capital">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_proposed_capital">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td> -->
        </tr>
        <tr class="text-center">
         <th class="text-center">6</th>
         <th class="text-center">Project Side Address<br><h6>Industrial grading as per NIC/ID & R Act</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="p_side_address">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_p_side_address">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
          <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="p_side_address">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_p_side_address">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td> -->
        </tr>
        <tr class="text-center">
         <th class="text-center">7</th>
         <th class="text-center">GSTIN of the Applicant<br><h6>GSTIN Certificate</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="gstin">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_gstin">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
        <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="gstin">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_gstin">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>   -->    
        </tr>
        <tr class="text-center">
         <th class="text-center">8</th>
         <th class="text-center">Establishment copy of  Textile Industrial Undertaking<br><h6>UAM (for registration or permit for MSME)/IL/IEM (for large) (attached copy)</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="estab_copy_undertaking">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_estab_copy_undertaking">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="estab_copy_undertaking">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_estab_copy_undertaking">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>   --> 
        </tr>
        <tr class="text-center">
         <th class="text-center">9</th>
         <th class="text-center">Date from which the capital investment has been started or is proposed to be started<br><h6>A CA certificate for Date on which capital investment has commenced and For Commercial production started </h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="date_from_capital_invest">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_date_from_capital_invest">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="date_from_capital_invest">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_date_from_capital_invest">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  --> 
        </tr>
        <tr class="text-center">
         <th class="text-center">10</th>
         <th class="text-center">Whether capital investment is proposed to be done in phases<br><h6>A Phase wise CA certificate for Date on which capital investment has commenced</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="whether_capital_invest">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_whether_capital_invest">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
        <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="whether_capital_invest">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_whether_capital_invest">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>   -->
        
        </tr>
        <tr class="text-center">
        <th class="text-center">11</th>
        <th class="text-center">Total amount of all financial facilities<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="total_amount">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_total_amount">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="total_amount">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_total_amount">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  --> 
        
        </tr>
        <tr class="text-center">
         <th class="text-center">12</th>
         <th class="text-center">Details of applied financial facilities Subsidy in land allotment by government agencies<br><h6>Land Lease agreement or Sale deed</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="details_applied_financial">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_details_applied_financial">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="details_applied_financial">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_details_applied_financial">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>   -->
         
        </tr>
        <tr class="text-center">
         <th class="text-center">13</th>
         <th class="text-center">Exemption from Stamp duty<br><h6>Stamp duty paid by Firm</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="exemption_stamp_duty">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_exemption_stamp_duty">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="exemption_stamp_duty">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_exemption_stamp_duty">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  --> 
        </tr>
        <tr class="text-center">
         <th class="text-center">14</th>
         <th class="text-center">Exemption from State Tax Department (Reimbursement of Net State GST)<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="exemption_state_tax">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_exemption_state_tax">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
        <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="exemption_state_tax">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_exemption_state_tax">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>   -->
        </tr>
        <tr class="text-center">
         <th class="text-center">15</th>
         <th class="text-center">Additional reimbursement of 10% GST to those textile units <br><h6>(more than 1000 in textile industrial undertakings located in Paschimchal or more than 750 in Bundelkhand, Purvanchal & Madhyanchal workers of native Uttar Pradesh & minimum 25% above poverty line  or 50% women workers or 25% scheduled caste / tribe / class workers)</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="additional_reimbursement">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_reimbursement">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
        <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="additional_reimbursement">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_reimbursement">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>   -->
        
        </tr>
        <tr class="text-center">
         <th class="text-center">16</th>
         <th class="text-center">Capital Subsidy <br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="capital_subsidy">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_capital_subsidy">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
          <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="capital_subsidy">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_capital_subsidy">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  
        </tr> -->
        <tr class="text-center">
        <th class="text-center">17</th>
        <th class="text-center">Interest Subsidy<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="intrest_subsidy">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_intrest_subsidy">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
        <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="intrest_subsidy">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_intrest_subsidy">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>   -->
        </tr>
        <tr class="text-center">
         <th class="text-center">18</th>
         <th class="text-center">0.5 Additional interest subsidy to those textile units in which  SC/ST/ Divyang/Women should have minimum 75% ownership<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="additional_intrest_subsidy">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_intrest_subsidy">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
          <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="additional_intrest_subsidy">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_intrest_subsidy">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>   -->
        
        </tr>
        <tr class="text-center">
        <th class="text-center">19</th>
        <th class="text-center">Margin Money Grant<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="margin_money_grant">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_margin_money_grant">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
        <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="margin_money_grant">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_margin_money_grant">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  --> 
        
        </tr>
        <tr class="text-center">
         <th class="text-center">20</th>
         <th class="text-center">Additional 5% margin money grant, infrastructure interest subsidy to SC/ST entrepreneurs<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="additional_5_per_margin">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_5_per_margin">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
          <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="additional_5_per_margin">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_5_per_margin">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
        
        </tr>
        <tr class="text-center">
         <th class="text-center">21</th>
         <th class="text-center">Infrastructure Interest Subsidy<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="infra_intrest_subsidy">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_infra_intrest_subsidy">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
          <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="infra_intrest_subsidy">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_infra_intrest_subsidy">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
        
        </tr>
        <tr class="text-center">
         <th class="text-center">22</th>
         <th class="text-center">Additional 2.5% infrastructure interest subsidy. To those textile units in which SC/ST/Divyang/Women have minimum 75% ownership<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="additional_per_infra">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_per_infra">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="additional_per_infra">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_per_infra">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
        </tr>
        <tr class="text-center">
         <th class="text-center">23</th>
         <th class="text-center">Additional 25% working capital subsidy, for SC/ST/Divyang/Women<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="additional_25_per_working">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_25_per_working">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
          <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="additional_25_per_working">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_25_per_working">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
       
        </tr>
        <tr class="text-center">
         <th class="text-center">24</th>
         <th class="text-center">EPF Reimbursement (100 or more unskilled workers)<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="epf_reimbursement">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_epf_reimbursement">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="epf_reimbursement">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_epf_reimbursement">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
       
        </tr>
        <tr class="text-center">
        <th class="text-center">25</th>
        <th class="text-center">10 Additional EPF Reimbursement (200 direct skilled & Unskilled Workers)<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="additional_epf_reimbursement">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_additional_epf_reimbursement">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
        <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="10_additional_epf_reimbursement">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_10_additional_epf_reimbursement">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
       
        </tr>
        <tr class="text-center">
         <th class="text-center">26</th>
         <th class="text-center">Reimbursement of Freight<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="reimbursement_of_freight">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_reimbursement_of_freight">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
          <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="reimbursement_of_freight">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_reimbursement_of_freight">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
        
        </tr>
        <tr class="text-center">
         <th class="text-center">27</th>
         <th class="text-center">Gap Filling Grant in Government of India Scheme for Skill Development<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="gap_filling_grant">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_gap_filling_grant">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="gap_filling_grant">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_gap_filling_grant">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
        
        </tr>
        <tr class="text-center">
         <th class="text-center">28</th>
         <th class="text-center">Exemption from Electricity Duty<br><h6>As per Application</h6> </th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="exemption_from_electricity">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_exemption_from_electricity">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="exemption_from_electricity">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_exemption_from_electricity">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
      
        </tr>
        <tr class="text-center">
         <th class="text-center">29</th>
         <th class="text-center">Exemption from Mandi Duty<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="exemption_from_mandi">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_exemption_from_mandi">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="exemption_from_mandi">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_exemption_from_mandi">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
      
        </tr>
        <tr class="text-center">
         <th class="text-center">30</th>
         <th class="text-center">Acknowledgment of  U.A.M./I.E.M./IL<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="acknowledgment_of_uam">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_acknowledgment_of_uam">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="acknowledgment_of_uam">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_acknowledgment_of_uam">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
        
        </tr>
        <tr class="text-center">
        <th class="text-center">31</th>
        <th class="text-center">Audited Accounts of the unit with all schedules (Current Financial year as well as last 5 years)<br><h6>Audited Accounts</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="audited_accounts_unit">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_audited_accounts_unit">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
        <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="audited_accounts_unit">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_audited_accounts_unit">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
       
        </tr>
        <tr class="text-center">
         <th class="text-center">32</th>
         <th class="text-center">Detailed Project Report<br><h6>As per Application</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="dpr">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_dpr">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="dpr">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_dpr">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
        
        </tr>
        <tr class="text-center">
         <th class="text-center">33</th>
         <th class="text-center">CA Certificate for Existing Gross Assets <br><h6>Chartered Accountant's Certificate</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="cac_for_existing_gross">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_cac_for_existing_gross">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
         <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="cac_for_existing_gross">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_cac_for_existing_gross">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
       
        </tr>
        <tr class="text-center">
         <th class="text-center">34</th>
         <th class="text-center">CA Certificate for Gross Fixed assets of the existing textile industrial undertaking in support of the aggregate block<br><h6>Chartered Accountant's Certificate</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="cac_for_fixed_gross">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_cac_for_fixed_gross">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
          <!-- <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="cac_for_fixed_gross">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_cac_for_fixed_gross">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
       
        </tr>
        <tr class="text-center">
        <th class="text-center">35</th>
        <th class="text-center">Affidavit (As per Annexure-I on a stamp paper of Rs.10)<br><h6>Affidavit</h6></th>
        <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input type="hidden" name="field" value="affidavit">
            <input type="file" class="form-control-file fw-normal mb-1" name="file" id="file">
        </td>
        <td><input class="form-control fw-normal mb-1" type="text" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_affidavit">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Upload</button></td>
        </form>
       <!--  <td colspan="3">
          <form action="javascript:void(0)" method="post" class="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="field" value="affidavit">
            <input type="file" class="form-control-file" name="file" id="file"> 
            <input type="text" class="form-control" name="remark" id="remark">
            <input type="hidden" name="remark_field" value="remark_affidavit">
            <button class="btn btn-primary" name="upload1" id="upload1" type="submit">Submit</button>
          </form>
          </td>  -->
        </tr>
        </tbody>
  </table>
    
</body>

  <script type="text/javascript">
    $(document).ready(function (e) {
      $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
      });
    $('.upload_form').submit(function(e) {
        //alert(23);
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
    type:'post',
    url: "{{ url('applicants/save')}}",
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
      success: (data) => {
      //this.reset();
      alert('File has been uploaded successfully');
      console.log(data);
      },
    error: function(data){
    console.log(data);
      }
      });
    });
  });
  </script>
  </div>
  </div>
</div>
@endsection
 