@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
             
        <div class="card">
            <div class="card-body">
            <!-- <a class="btn btn-success btn-submit" href="#">BC Transaction Report</a>
            <a class="btn btn-success btn-submit" href="#">BC Commission Report</a> -->
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            {{ __('You are logged in Super Admin User!') }}
             <a class="btn btn-success btn-submit" href="{{route('superadmin.changePassword')}}" style="float:right;">Change Password</a>
            </div>
        </div>
        <br/>

        <br>

        <div class="panel-body">
        <!-- <div class="container col-md-8">
          <form action="{{ route('superadmin.simple_search') }}" method="GET">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search by FE, BC Name, Phone, Bank Name, Link Branch & KO Code" aria-describedby="basic-addon2" name="search">
            <div class="input-group-append">
            <button class="btn btn-secondary" type="submit">Search</button>
            </div>
            </div>
          </form>
        </div> -->

          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

          <legend style="color: green; font-weight: bold;">Nivesh User Details</legend>
        

        <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th class="text-center">S.No</th>
               <th class="text-center"><a href="#">Applicant Name</a></th>
               <th class="text-center"><a href="#">Constitution</a></th>
               <th class="text-center">Textile Industry</th>
               <th class="text-center">Nature of textile</th>
               <th class="text-center">Proposed capital</th>
               <th class="text-center">Project side address</th>
               <th class="text-center">Remark</th>
               <th class="text-center">Action</th>
            </tr>
            </thead>
           <tbody>
               @forelse ($applicants as $applicant)
                <tr class="text-center">
                <td class="text-center">{{ $loop->index + 1 }}</td>
                <td class="text-center">{{ $applicant->n_applicant }}</td>
                <td class="text-center">{{ $applicant->constitution }}</td>
                <td class="text-center">{{ $applicant->textile_industry }}</td>  
                <td class="text-center">{{ $applicant->nature_of_textile }}</td> 
                <td class="text-center">{{ $applicant->proposed_capital }}</td> 
                <td class="text-center">{{ $applicant->p_side_address }}</td>
              
                <td class="text-center">Remark</td> 
                
                <td class="text-center">
                <a href="{{ route('superadmin.view', $applicant->id) }}" class="btn btn-sm btn-outline-success py-0">View</a>
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