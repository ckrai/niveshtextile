@extends('layouts.app')
@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
@endsection
@push('style')
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">  
    <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            {{ __('You are logged in Applicant!') }} 
        </div>
    </div>
    <br/>
    <div class="topnav">
        <a class="btn btn-success btn-submit" href="{{ route ('applicant.add')}}">Fill Textile form</a>
       <!--  <a class="btn btn-success btn-submit" href="{{ route ('applicant.list')}}" style="float:right;"> Refresh</a> -->
    </div>
    <div class="panel-body">
        <!-- <div class="container col-md-6">
        <form action="#" method="GET">
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search by FE Name, BC Name, Phone & KO Code" aria-describedby="basic-addon2" name="search">
          <div class="input-group-append">
          <button class="btn btn-secondary" type="submit">Search</button>
          </div>
          </div>
        </form>
        </div> -->

        @if(session()->has('message'))
        <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
        @endif

    <legend style="color: green; font-weight: bold; text-align: center;">Form List</legend>
        <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
               <th class="text-center">S.No</th>
               <th class="text-center">Applicant Name, Address & Contact</th>
               <th class="text-center">Applicant Remark</th>
               <th class="text-center">UPICON Remark</th>
                <!-- <th class="text-center">CA Remark</th> -->
               <!-- <th class="text-center">Start form date</th> -->
               <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
               @forelse ($applicants as $a)
                <tr class="text-center">
                <td class="text-center">{{ $loop->index + 1 }}</td>
                <td class="text-center"><iframe download src="{{url('assets/'. $a->n_applicant)}}" name="n_applicant" height="150" width="350">Download file</iframe></td>
                <td class="text-center">{{ $a->remark_n_applicant }}</td>
                <td class="text-center">{{ $a->rem }}</td> 
                <!-- <td class="text-center"></td>   -->
                <!-- <td class="text-center"></td>        -->
                <td class="text-center">
                <a href="{{ route('applicant.addDir', $a->id) }}" class="btn btn-sm btn-outline-success py-0">Add Director</a>
                <a href="{{ route('applicant.edit', $a->id) }}" class="btn btn-sm btn-outline-danger py-0">Edit</a>
                <a href="{{ route('applicant.view', $a->id) }}" class="btn btn-sm btn-outline-success py-0">View</a>
                </td>
               </tr>
              @empty
              <p class="btn btn-outline-danger">No record found, Please enter valid input!</p>
              @endforelse
           </tbody>
        </table>
        </div>
      </div>
    </div>
</div>
@endsection