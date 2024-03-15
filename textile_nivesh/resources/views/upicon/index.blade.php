@extends('layouts.app')
@push('style')
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 -->@endpush

@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
@endsection
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
                {{ __('You are logged in UPICON User!') }}
            </div>
        </div>
        <br/>

        <!--  <div class="topnav">
        <a class="btn btn-success btn-submit" href="{{ route ('upicon.list')}}" style="float:right;"> Refresh</a>
        </div> -->
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
           <th class="text-center">Phone</th>
           <th class="text-center">Applicant Remark</th>
           <th class="text-center">View Details</th>
           <th class="text-center">Assign CA</th>
           <th class="text-center">Assign EXPERT</th>
           <th class="text-center">Log</th>
           <th class="text-center">Forward CA</th>
           <th class="text-center">Forward EXPERT</th>
           <th class="text-center">Status</th>
        </tr>
        </thead>
        <tbody>
           @forelse ($applicants as $applicant)
            <tr class="text-center">
            <td class="text-center">{{ $loop->index + 1 }}</td>
            <td class="text-center">{{ $applicant->name }}</td>
            <!-- <td class="text-center"><a download href="{{url('assets/'. $applicant->n_applicant)}}">{{ $applicant->n_applicant }}</a></td> -->
            <td class="text-center">{{ $applicant->mobile }}</td>
            <td class="text-center">{{ $applicant->remark_n_applicant }}</td>      
            <td class="text-center">
            <a href="{{ route('upicon.edit', $applicant->id) }}" class="btn btn-sm btn-outline-danger py-0">Edit</a>
            <a href="{{ route('upicon.view', $applicant->id) }}" class="btn btn-sm btn-outline-success py-0">Review</a>
            </td>
            <td class="text-center">{{ $applicant->ca_log }}</td>
            <td class="text-center">{{ $applicant->expert_log }}</td>
            <td class="text-center">{{ $applicant->status_log }}</td>

            <form action="javascript:void(0)" method="post" class="asign_ca" enctype="multipart/form-data">
            {{ csrf_field() }}
            <td><select class="btn btn-sm" type="text" name="asign" id="asign">
                <option value="">Select One</option>
                <option value="CA_1">CA_1</option>
                <option value="CA_2">CA_2</option>
                <option value="CA_3">CA_3</option></select>
                <input type="hidden" name="asign_field" value="ca_log">
                <input type="hidden" name="id" id="id" value="{{$applicant->id}}">
                <button class="btn btn-sm btn-outline-success" name="upload1" id="upload1" type="submit">Forward</button>
            </td>
            </form>
            <form action="javascript:void(0)" method="post" class="asign_expert" enctype="multipart/form-data">
            {{ csrf_field() }}
            <td><select class="btn btn-sm" type="text" name="asign" id="asign">
                <option value="">Select One</option>
                <option value="Expert_1">EXPERT_1</option>
                <option value="Expert_2">EXPERT_2</option>
                <option value="Expert_3">EXPERT_3</option></select>
                <input type="hidden" name="asign_field" value="expert_log">
                <input type="hidden" name="id" id="id" value="{{$applicant->id}}">
                <button class="btn btn-sm btn-outline-success" name="upload1" id="upload1" type="submit">Forward</button>
            </td>
            </form>
            <form action="javascript:void(0)" method="post" class="form_status" enctype="multipart/form-data">
            {{ csrf_field() }}
            <td><select class="btn btn-sm" type="text" name="asign" id="asign">
                <option value="">Select One</option>
                <option value="Complete">Complete</option>
                <option value="In_Complete">In_Complete</option>
                <option value="Verified">Verified</option></select>
                <input type="hidden" name="asign_field" value="status_log">
                <input type="hidden" name="id" id="id" value="{{$applicant->id}}">
                <button class="btn btn-sm btn-outline-success" name="upload1" id="upload1" type="submit">Save</button>
            </td>
            </form>
           </tr>
          @empty
          <p class="btn btn-outline-danger">No record found, Please enter valid input!</p>
          @endforelse
        </tbody>
        <script type="text/javascript">
          $(document).ready(function (e) {
          $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
          });
          $('.asign_ca').submit(function(e) {
          //alert('Form has been successfully alloted');
          e.preventDefault();
          var formData = new FormData(this);
          $.ajax({
              type:'post',
              url: "{{ url ('/upicon/app/')}}",
              data: formData,
              cache:false,
              contentType: false,
              processData: false,
              success: (data) => {
                  //this.reset();
                  alert('Form has been successfully alloted');
                  console.log(data);
              },
              error: function(data){
              console.log(data);
              }
          });
         });
        });
      </script>

      <script type="text/javascript">
          $(document).ready(function (e) {
          $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
          });
          $('.asign_expert').submit(function(e) {
          //alert('Form has been successfully alloted');
          e.preventDefault();
          var formData = new FormData(this);
          $.ajax({
              type:'post',
              url: "{{ url ('/upicon/app/')}}",
              data: formData,
              cache:false,
              contentType: false,
              processData: false,
              success: (data) => {
                  //this.reset();
                  alert('Form has been successfully alloted');
                  console.log(data);
                },
              error: function(data){
              console.log(data);
              }
          });
          });
          });
      </script>

          <script type="text/javascript">
              $(document).ready(function (e) {
              $.ajaxSetup({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
              });
              $('.form_status').submit(function(e) {
              //alert('Form has been successfully alloted');
              e.preventDefault();
              var formData = new FormData(this);
              $.ajax({
                  type:'post',
                  url: "{{ url ('/upicon/app/')}}",
                  data: formData,
                  cache:false,
                  contentType: false,
                  processData: false,
                  success: (data) => {
                      //this.reset();
                      alert('Status has been updated');
                      console.log(data);
                      },
                  error: function(data){
                  console.log(data);
                  }
              });
              });
              });
          </script>
        </table>
    </div>
    </div>
    </div>
</div>
@endsection