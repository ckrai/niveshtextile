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
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<style type="text/css">
    input {
    display: none !important;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">   
       
        <div class="topnav">
          <a href="{{ route('bcuser.list') }}" class="btn btn-success">Back</a>
          <!-- <legend class="text-center" style="color: green; font-weight: bold; display: flex;">FE Transaction Report</legend> -->
        </div>
        <br>
        <div class="panel-body">
          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif
   
          <div class="col-md-12"> 
            <div class="text-center">
              <div class="row">
              <div class="col-6">
                <legend style="color: green; font-weight: bold; display: flex;">FE Transaction Details</legend>
              </div>
              <div class="col-2">
                <div class="input-group input-group-sm mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Month</span>
                  </div>
                  <select class="form-control dropdown-toggle" aria-label="Small" id="p_month" name="p_month"  onchange="window.location = 'http://www.rozzgaar.in/bcuser/fe-grading?p_month='+this.value+'&p_year={{$p_year}}'">
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
                  <select class="form-control dropdown-toggle" aria-label="Small" id="p_year" name="p_year"  onchange="window.location= 'http://www.rozzgaar.in/bcuser/fe-grading?p_year='+this.value+'&p_month={{$p_month}}'">
                     @for($i=2010;$i<=date('Y');$i++)
                        <option @if($i==$p_year) selected @endif value="{{$i}}">{{$i}}</option>
                     @endfor
                  </select>
                </div>
              </div>
              </div>
            </div>
          </div>

    <table id="example1" class="table table-bordered table-hover">
      <thead>
       <!--  <tr class="tag_sec">
         <th class="text-center"></th>
         <th class="text-center"></a></th>
         <th class="text-center"></th>
         <tr class="tag_sec"><th>BC Grades</th></tr>
        </tr> -->
        <tr class="tag_sec">
         <th class="text-center">S.No</th>
         <th class="text-center">FE Name</a></th>
         <th class="text-center">FE Grade</th>
         <th class="text-center">A </th>
         <th class="text-center">B </th>
         <th class="text-center">C </th>
         <th class="text-center">D </th>
         <th class="text-center">E </th>
         <th class="text-center">F </th>
         <th class="text-center">No. of BC</th>
        </tr>
      </thead>
      <tbody>
          <?php $i=0;
             $no_of_bc=0;
             $total_a=0;
             $total_b=0;
             $total_c=0;
             $total_d=0;
             $total_e=0;
             $total_f=0; 
             $totalAVG=0;
           ?>  
         @foreach($data as $fe)  
    
         <?php 
            $no_of_bc= $no_of_bc+$fe->no_of_bc;
            $total_a= $total_a+$fe->a;
            $total_b= $total_b+$fe->b;
            $total_c= $total_c+$fe->c;
            $total_d= $total_d+$fe->d;
            $total_e= $total_e+$fe->e;
            $total_f= $total_f+$fe->f;  
             $totalAVG= $totalAVG+$fe->avg;
            $avgGrad='A';

            if($fe->avg>0 && $fe->avg<=8){
              $avgGrad='F';
            }
            if($fe->avg>8 && $fe->avg<=14){
              $avgGrad='E';
            }
             if($fe->avg>14 && $fe->avg<=20){
              $avgGrad='D';
            }
             if($fe->avg>20 && $fe->avg<=26){
              $avgGrad='C';
            }
             if($fe->avg>26 && $fe->avg<=32){
              $avgGrad='B';
            }
             if($fe->avg>32 && $fe->avg<=36){
              $avgGrad='A';
            }

          ?> 
       <tr class="text-center">
         <th class="text-center">{{++$i}}</th>
         <th class="text-center">{{$fe->fe_name}}</th>
         <th class="text-center">{{$avgGrad}} </th>
         <td class="text-center">{{$fe->a}} </td>
         <td class="text-center">{{$fe->b}} </td>
         <td class="text-center">{{$fe->c}} </td>
         <td class="text-center">{{$fe->d}} </td>
         <td class="text-center">{{$fe->e}} </td>
         <td class="text-center">{{$fe->f}} </td>
         <th class="text-center">{{$fe->no_of_bc}}</th>
       </tr>
        @endforeach
      <tr class="tag_sec">
         <th class="text-center">#</th>
         <th class="text-center">UPICON Total</th>
         <th class="text-center">
    <?php $totalAVG = $totalAVG/$no_of_bc;

          $avgGrad='A';

            if($totalAVG>0 && $totalAVG<=8){
              $avgGrad='F';
            } if($totalAVG>8 && $totalAVG<=14){
              $avgGrad='E';
            } if($totalAVG>14 && $totalAVG<=20){
              $avgGrad='D';
            } if($totalAVG>20 && $totalAVG<=26){
              $avgGrad='C';
            } if($totalAVG>26 && $totalAVG<=32){
              $avgGrad='B';
            } if($totalAVG>32 && $totalAVG<=36){
              $avgGrad='A';
            }
          echo $avgGrad;
    ?>
         </th>
         <th class="text-center">{{$total_a}}</th>
         <th class="text-center">{{$total_b}}</th>
         <th class="text-center">{{$total_c}}</th>
         <th class="text-center">{{$total_d}}</th>
         <th class="text-center">{{$total_e}}</th>
         <th class="text-center">{{$total_f}}</th> 
         <th class="text-center">{{$no_of_bc}}</th> 
      </tr>
      <!-- <p class="btn btn-outline-danger">No record found, Please enter valid input!</p> -->
      </tbody>
    </table>
    </div>
   </div>
  </div>
</div>

@endsection