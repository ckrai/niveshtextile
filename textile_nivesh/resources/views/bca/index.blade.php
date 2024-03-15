@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                {{ __('You are logged in User!') }} 
            </div>
        </div>
        <br/>

        <!-- <div class="topnav">
        <a class="btn btn-primary btn-submit" href="{{ route('bcuser.bc_trnx') }}" style="float:left;">View BC Grade</a>
        <a class="btn btn-primary btn-submit" href="{{route('bcuser.fe_report')}}" style="float:left; margin-left: 5px;">View FE Grade</a>
        <a class="btn btn-primary btn-submit" href="{{ route('bcuser.bc_commission') }}" style="float:left; margin-left: 5px;">View BC Commission</a>
        <a class="btn btn-success btn-submit" href="{{route('bcuser.list')}}" style="float:right;">Refresh</a>
        </div> -->
        <br><br>

    <div class="panel-body">
        <!-- <div class="container col-md-6">
        <form action="{{ route('bcuser.simple_search') }}" method="GET">
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

        <legend style="color: green; font-weight: bold;">All Form List</legend>

           <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
               <th class="text-center">S.No</th>
               <th class="text-center"><a href="#">Name</a></th>
               <th class="text-center"><a href="#">Email</a></th>
               <th class="text-center">Phone</th>
               <th class="text-center">Address</th>
               <th class="text-center">Status</th>
               <th class="text-center">Action</th>
            </tr>
            </thead>
           <tbody>
               @forelse ($bcusers as $bcuser)
                <tr class="text-center">
                <td class="text-center">{{ $loop->index + 1 }}</td>
                <td class="text-center">{{ $bcuser->fe_name }}</td>
                <td class="text-center">{{ $bcuser->bc_name }}</td>
                <!-- <td class="text-center"></td> -->
                <td class="text-center">{{ $bcuser->ko_code }}</td>  
                <td class="text-center">{{ $bcuser->ko_creation_date }}</td>        
                <td class="text-center">
                <a href="{{ route('bcuser.view', $bcuser->id) }}" class="btn btn-sm btn-outline-success py-0">Details</a>
                <!-- <a href="#" class="btn btn-sm btn-outline-danger py-0">Transaction</a>
                <a href="#" class="btn btn-sm btn-outline-primary py-0">Commision</a> -->
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