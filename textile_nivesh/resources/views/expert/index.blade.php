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
                {{ __('You are logged in Expert User!') }}
            </div>
        </div>
        <br/>
     
      <br>
      <div class="panel-body">
    
      @if(session()->has('message'))
        <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
      @endif

    <legend style="color: green; font-weight: bold;">Nivesh Form Details</legend>

    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr class="text-center">
           <th class="text-center">S.No</th>
            <th class="text-center">Unit Name</th>
           <th class="text-center">Applicant Doc.</th>
           <th class="text-center">Applicant Remark</th>
           <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
           @forelse ($applicants as $applicant)
            <tr class="text-center">
            <td class="text-center">{{ $loop->index + 1 }}</td>
            <td class="text-center">{{ $applicant->name }}</td>
            <td class="text-center"><a download href="{{url('assets/'. $applicant->n_applicant)}}">{{ $applicant->n_applicant }}</a></td>
            <td class="text-center">{{ $applicant->remark_n_applicant }}</td>      
            <td class="text-center">
            <a href="{{ route('expert.edit', $applicant->id) }}" class="btn btn-sm btn-outline-danger py-0">Edit</a>
            <a href="{{ route('expert.view', $applicant->id) }}" class="btn btn-sm btn-outline-success py-0">Review</a>
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