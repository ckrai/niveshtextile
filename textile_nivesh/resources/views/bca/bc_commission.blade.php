@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="form-group" style="margin-top: 24px;">
          <a href="{{ route('bcuser.list') }}" class="btn btn-success">Back</a>
          <a class="btn btn-success" href="{{route('bcuser.bc_commission')}}" style="float:right;">Refresh</a>
        </div>
        <br>   
    

    <div class="panel-body">
          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

        <!-- <div class="container col-md-6">
        <form action="#" method="GET">
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search by FE Name, BC Name & KO Code" aria-describedby="basic-addon2" name="search">
          <div class="input-group-append">
          <button class="btn btn-secondary" type="submit">BC Search here</button>
          </div>
          </div>
        </form>
        </div> -->

          <div class="col-md-12">
            <div class="text-center">
              <div class="row">
              <div class="col-6">
                <legend style="color: green; font-weight: bold; display: flex;">BC Commission List</legend>
              </div>
                <div class="col-3">
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Month</span>
                  </div>
                  <select class="form-control dropdown-toggle" aria-label="Small" id="c_month" name="c_month"  onchange="window.location = 'http://www.rozzgaar.in/bcuser/bc-commission?c_month='+this.value+'&c_year={{$c_year}}'">
                   @for($i=1;$i<13;$i++)
                      <option @if($i==$c_month) selected @endif value="{{$i}}">{{$i}}</option>
                   @endfor
                  </select>
                </div>
              </div>
              <div class="col-3">
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Year</span>
                  </div>
                  <select class="form-control dropdown-toggle" aria-label="Small" id="c_year" name="c_year"  onchange="window.location= 'http://www.rozzgaar.in/bcuser/bc-commission?c_year='+this.value+'&c_month={{$c_month}}'">
                     @for($i=2010;$i<=date('Y');$i++)
                        <option @if($i==$c_year) selected @endif value="{{$i}}">{{$i}}</option>
                     @endfor
                  </select>
                </div>
              </div>
              </div>
            </div>
          </div>
          <br>

          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
             <th class="text-center">S.No</th>
             <th class="text-center"><a href="{{route('bcuser.shortfe_comm')}}">FE Name</a></th>
             <th class="text-center"><a href="{{route('bcuser.shortbc_comm')}}">BC Name</a></th>
             <th class="text-center">KO Code</a></th>
             <th class="text-center">Month</a></th>
             <th class="text-center">Year</a></th>
             <th class="text-center">View</th>
            </tr>
            </thead>
           <tbody>
           
             @forelse ($commissions as $c)
            <tr class="text-center">
            <td class="text-center">{{$loop->index + 1}}
            <!-- {{(((isset($_REQUEST['page'])?$_REQUEST['page']:'1')-1)*25)+($loop->index + 1)}} --></td>
            <td class="text-center">{{ $c->fe_name }}</td>
            <td class="text-center">{{ $c->bc_name }}</td>
            <td class="text-center">{{ $c->ko_code }}</td>
            <td class="text-center">{{ $c->c_month }}</td>
            <td class="text-center">{{ $c->c_year }}</td>
            <td class="text-center"><a href="{{ url('bcuser/view-commission/'.$c->ko_code.'?c_month='.$c->c_month.'&c_year='.$c->c_year)}}" class="btn btn-sm btn-outline-success py-0">View Commission</a></td>
            </tr>
            @empty
            <p class="btn btn-outline-danger">No record found, Please enter valid input!</p>
            @endforelse
            </tbody>
          </table>
        </div>
     </div>
</div>

@endsection