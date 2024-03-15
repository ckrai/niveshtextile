@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          <div class="form-group" style="margin-top: 24px;">
              <a href="{{ route('upicon.list') }}" class="btn btn-success">Back</a>
            </div>

          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

        <legend style="color: #38c172; font-weight: bold;">Nivesh Update Form
        <a href="{{ route('upicon.list') }}" class="btn btn-success"  style="float: right; display: block; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 16px; margin-right: 5px;"> LIST</a>
          </legend>

        <form action="{{ route('upicon.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
          <h4> Details:-</h4>
          <div class="form-group row">
          <div class="col-6">
          <label for="">Applicant Name:</label>
          <input type="text" class="form-control" name="n_applicant" id="n_applicant" value="{{$applicant->n_applicant}}">
          <font style="color:red"> {{ $errors->has('n_applicant') ?  $errors->first('n_applicant') : '' }} </font>
          </div>
          <div class="col-6">
          <label for="">Constitution:</label>
          <input type="text" class="form-control" name="constitution" id="constitution" value="{{$applicant->constitution}}">
          <font style="color:red"> {{ $errors->has('constitution') ?  $errors->first('constitution') : '' }} </font>
        </div>
        <div class="col-4">
          <label for="">Textile Industry:</label>
          <input type="text" class="form-control" name="textile_industry" id="textile_industry" value="{{$applicant->textile_industry}}">
        </div>
        <div class="col-4">
          <label for="">Nature of Textile:</label>
          <input type="text" class="form-control" name="nature_of_textile" id="nature_of_textile" value="{{$applicant->nature_of_textile}}">
        </div>
        <div class="col-4">
          <label for="">Proposed Capital:</label>
          <input type="text" class="form-control" name="proposed_capital" id="proposed_capital" value="{{$applicant->proposed_capital}}">
        </div>
        <div class="col-4">
          <label for="">Project Side Address:</label>
          <input type="text" class="form-control" name="p_side_address" id="p_side_address" value="{{$applicant->p_side_address}}">
        </div>
        </div>

        <div class="form-group" style="margin-top: 24px;">
          <input type="submit" class="btn btn-success" value="Update">
        </div>
          </form>
        </div>
    </div>
</div>
@endsection
 