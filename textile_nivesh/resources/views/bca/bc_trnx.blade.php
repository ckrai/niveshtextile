@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="form-group" style="margin-top: 24px;">
        <a href="{{ route('bcuser.list') }}" class="btn btn-success">Back</a>
        <a class="btn btn-success" href="{{route('bcuser.bc_trnx')}}" style="float:right;">Refresh</a>
        </div>
      <div class="panel-body">    
        @if(session()->has('message'))
          <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
        @endif
      <!--   <legend style="color: green; font-weight: bold;">BC Trasaction Report </legend> -->
      <!-- <div class="btn-group">
        <input type="text" class="form-control" placeholder="Search by FE Name, BC Name & KO Code" aria-describedby="basic-addon2" name="search">
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Month <span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
          </ul>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Year <span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">2020</a></li>
            <li><a href="#">2021</a></li>
            </ul>
        </div>
      </div> -->

      <div class="container col-md-10">
        <form action="{{ route('bcuser.search_transaction') }}" method="GET">
          <div class="input-group mb-8">
          <input type="text" class="form-control" placeholder="Search by FE & BC Name" aria-describedby="basic-addon2" name="search_trnx">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Month</span>
          </div>
          <select class="form-control dropdown-toggle" aria-label="Small" id="p_month" name="p_month"  onchange="window.location = 'http://www.rozzgaar.in/bcuser/view-transaction?p_month='+this.value+'&p_year={{$p_year}}'">
           @for($i=1;$i<13;$i++)
            <option @if($i==$p_month) selected @endif value="{{$i}}">{{$i}}</option>
           @endfor
          </select>
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Year</span>
          </div>
          <select class="form-control dropdown-toggle" aria-label="Small" id="p_year" name="p_year"  onchange="window.location= 'http://www.rozzgaar.in/bcuser/view-transaction?p_year='+this.value+'&p_month={{$p_month}}'">
             @for($i=2010;$i<=date('Y');$i++)
              <option @if($i==$p_year) selected @endif value="{{$i}}">{{$i}}</option>
             @endfor
          </select>
          <div class="input-group-append">
            <button class="btn btn-secondary" type="submit">BC Search here</button>
          </div>
          </div>
        </form>
      </div>

      <div class="col-md-12">    
        <div class="text-center">
          <div class="row">
            <div class="col-6">
              <legend style="color: green; font-weight: bold; display: flex;">BC Transaction Details</legend>
            </div>

            <div class="col-2">
              <div class="input-group input-group-sm mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Month</span>
                </div>
                <select class="form-control dropdown-toggle" aria-label="Small" id="p_month" name="p_month"  onchange="window.location = 'http://www.rozzgaar.in/bcuser/view-transaction?p_month='+this.value+'&p_year={{$p_year}}'">
                 @for($i=1;$i<13;$i++)
                  <option @if($i==$p_month) selected @endif value="{{$i}}">{{$i}}</option>
                 @endfor
                </select>
              </div>
            </div>

            <div class="col-2">
              <div class="input-group input-group-sm mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Year</span>
                </div>
                <select class="form-control dropdown-toggle" aria-label="Small" id="p_year" name="p_year"  onchange="window.location= 'http://www.rozzgaar.in/bcuser/view-transaction?p_year='+this.value+'&p_month={{$p_month}}'">
                   @for($i=2010;$i<=date('Y');$i++)
                    <option @if($i==$p_year) selected @endif value="{{$i}}">{{$i}}</option>
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
           <th class="text-center"><a href="{{route('bcuser.shortfe_tranx')}}">FE Name</a></th>
           <th class="text-center"><a href="{{route('bcuser.shortbc_tranx')}}">BC Name</a></th>
           <th class="text-center">KO Code</th>
           <!-- <th class="text-center">Target</th> -->
           <th class="text-center">Month</th>
           <th class="text-center">Year</th>
           <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
           @forelse ($performance as $p)
            <tr class="text-center">
            <td class="text-center">{{ $loop->index + 1 }}</td>
            <td class="text-center">{{ $p->fe_name }}</td>
            <td class="text-center">{{ $p->bc_name }}</td>
            <td class="text-center">{{ $p->ko_code }}</td>
            <td class="text-center">{{ $p->p_month }}</td>
            <td class="text-center">{{ $p->p_year }}</td>  
            <!-- <td class="text-center"></td>  -->       
            <td class="text-center"><a href="{{ url('bcuser/view-report/'.$p->ko_code.'?p_month='.$p_month.'&p_year='.$p_year) }}" class="btn btn-sm btn-outline-success py-0">View</a></td>
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