
@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          <div class="form-group" style="margin-top: 24px;">
              <a href="{{ route('bcuser.list') }}" class="btn btn-success">Back</a>
            </div>

          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

          <legend style="color: green; font-weight: bold;">BC Update Form 
           <a href="{{ route('bcuser.list') }}" style="float: right; display: block;color: white; background-color: green; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 17px;"> CUSTOMER LIST</a>
          </legend>

          <form action="{{ route('bcuser.update',$bcuser->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <h3>Personal Detail</h3>
            <div class="form-group row">
              <div class="col-6">
              <label for="">FE Name:</label>
              <input type="text" class="form-control" name="fe_name" value="{{ $bcuser->fe_name }}" />
             </div>
              <div class="col-6">
              <label for="f_name">BC Name:</label>
              <input type="text" class="form-control" name="bc_name" value="{{$bcuser->bc_name}}" />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-6">
              <label for="">Email:</label>
              <input type="email" class="form-control" name="email" value="{{ $bcuser->email }}" />
             </div>
            <div class="col-6">
              <label for="">Phone</label>
              <input type="text" class="form-control" name="phone" value="{{ $bcuser->phone}}" />
             </div>
            </div>
            <div class="form-group row">
              <div class="col-6">
              <label for="">Aadhaar No</label>
              <input type="text" class="form-control" name="aadhaar" value="{{ $bcuser->aadhaar}}" />
             </div>
            <div class="col-6">
              <label for="">PAN No</label>
              <input type="text" class="form-control" name="pan" value="{{ $bcuser->pan}}" />
             </div>
            </div>
            <h4>Comunication Address:</h4>
            <div class="form-group row">
            <div class="col-6">
              <label for="address" class="form-label">Address:</label>
              <input type="text" class="form-control" id="address" name="address" value="{{ $bcuser->address}}">
            </div>
            <div class="col-6">
              <label for="address2" class="form-label">Address 2:</label>
            <input type="text" class="form-control" id="address2" name="address2" value="{{ $bcuser->address2}}">
            </div></div>
            <div class="form-group row">
             <div class="col-md-6">
              <label for="city" class="form-label">City/Town:</label>
              <input type="text" class="form-control" id="city" name="city" value="{{ $bcuser->city}}">
            </div>
            <div class="col-md-6">
              <label for="post_office" class="form-label">Post Office:</label>
              <input type="text" class="form-control" id="post_office" name="post_office" value="{{ $bcuser->post_office}}">
            </div></div>
            <div class="form-group row">
            <div class="col-md-6">
              <label for="state" class="form-label">State:</label>
              <input type="text" class="form-control" id="state" name="state" value="{{ $bcuser->state}}">
            </div>
            <div class="col-md-6">
              <label for="pin_code" class="form-label">Pin Code:</label>
            <input type="text" class="form-control" id="pin_code" name="pin_code" value="{{ $bcuser->pin_code}}">
              </div>
            </div>

            <div id="Professional" class="tabcontent">
            <h3 >Professional Detail:</h3>
            <div class="form-group row">
            <div class="col-6">
              <label for="">Bank Name:</label>
              <input type="text" class="form-control" name="bank_name" value="{{ $bcuser->bank_name}}">
            </div>
            <div class="col-6">
              <label for="">KO Code:</label>
              <input type="text" class="form-control" name="ko_code" value="{{ $bcuser->ko_code}}">
            </div>
            <div class="col-6">
              <label for="">Branch Name:</label>
              <input type="text" class="form-control" name="branch_name" value="{{ $bcuser->branch_name}}">
            </div>
            <div class="col-6">
              <label for="">Account No:</label>
              <input type="text" class="form-control" name="account_no" value="{{ $bcuser->account_no}}">
            </div>
            <div class="col-6">
              <label for="">IFSC Code:</label>
              <input type="text" class="form-control" name="ifsc_code" value="{{ $bcuser->ifsc_code}}">
            </div>
            <div class="col-6">
              <label for="">Amount:</label>
              <input type="text" class="form-control" name="p_ammount" value="{{ $bcuser->p_ammount}}">
            </div>
            <div class="col-6">
            <label for="">Saving Account No:</label>
             <input type="text" class="form-control" name="emi_period" value="{{ $bcuser->emi_period}}">
            </div>
            <div class="col-6">
              <label for="">Payment Status:</label>
              <input type="text" class="form-control" name="emi_ammount" value="{{ $bcuser->emi_ammount}}">
            </div>
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
 