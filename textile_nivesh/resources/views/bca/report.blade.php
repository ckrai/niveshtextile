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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

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
            <a href="{{ route('bcuser.bc_trnx') }}" class="btn btn-success">Back</a>
            <!-- <a class="btn btn-success btn-submit" href="#" style="float:right;"> Refresh</a> -->
            <legend class="text-center" style="color: green; font-weight: bold;">BC Transaction Report</legend>
        </div>
        <br>
        <div class="panel-body">
            @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
            @endif
        <h5 class="text-center">NAME:- <b>{{$performance->bc_name}}</b></h5>
        <h6 class="text-center">KO CODE:- {{$performance->ko_code}}</h6>
        <h6 class="text-center">Month/Year:- {{$performance->p_month}}/{{$performance->p_year}}</h6>

        <!-- <div class="container-fluid mt-2">
          <div class="row">
            <div class="col-sm-2 p-2 bg-white text-black"><b><h5>GRADE SCALE:-</h5></b></div>
            <div class="col-sm-1.5 p-2 bg-secondary text-white" style="text-align: center;">A || Outstanding || >32</div>
            <div class="col-sm-1.5 p-2 bg-dark text-white" style="text-align: center;">B || Excellent || 26-32</div>
            <div class="col-sm-1.5 p-2 bg-secondary text-white" style="text-align: center;">C || Very Good || 20-26</div>
            <div class="col-sm-1.5 p-2 bg-dark text-white" style="text-align: center;">D || Good || 14-20</div>
            <div class="col-sm-1.5 p-2 bg-secondary text-white" style="text-align: center;">E || Satisfactory || 8-14</div>
            <div class="col-sm-1.5 p-2 bg-dark text-white" style="text-align: center;">F || Poor || below<8</div>
           </div>
        </div> -->
               
        <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr class="tag_sec">
         <th class="text-center">S.No</th>
         <th class="text-center">KPI</a></th>
         <th class="text-center">Target</th>
         <th class="text-center">Achievement</th>
         <th class="text-center">Weightage Score(%)</th>
         <!-- <th class="text-center">Score(%)</th> -->
         <th class="text-center">Position</th>
         </tr>
        </thead>
        <tbody>
        <tr class="text-center">
         <th class="text-center">1</th>
         <th class="text-center">A/C Opening
            <input class="form-control" display="none" type="number" min="0" max="1" id="bc_status_ac_opening" name="" value="{{$bc_status->ac_opening}}">
            <input  class="form-control" display="none" type="number" min="0" max="100" id="bc_allocation_ac_opening" name="" value="{{$bc_allocation->ac_opening}}">
            <input type="number" class="form-control" id="bc_target_ac_opening" min="0" name="" value="{{$bc_target->ac_opening}}">
        </th>
         <td class="text-center"><span id="bc_target_ac_opening">{{$bc_target->ac_opening}}</span></td>
         <td class="text-center"><span id="performance_ac_opening"> {{$performance->ac_opening}}</span></td>
         <td class="text-center"><span id="bc_allocation_ac_opening">{{$bc_allocation->ac_opening}}</span></td>
         <!-- <th class="text-center"><span id="score">20</span> <br><span id="grade">20</span><br><span id="rating">20</span><br></th> -->
         <td class="text-center"><b>Total Score:- </b><span id="score">20</span></td>
        </tr>

       <tr class="text-center">
         <th class="text-center">2</th>
         <th class="text-center">Fund Transfer
         <input type="number" class="form-control" display="none" min="0" max="1" id="bc_status_fund_transfer" name="" value="{{$bc_status->fund_transfer}}">
         <input type="number" class="form-control" min="0" max="100" id="bc_allocation_fund_transfer" name="" value="{{$bc_allocation->fund_transfer}}">
         <input type="number" class="form-control" id="bc_target_fund_transfer" min="0" name="" value="{{$bc_target->fund_transfer}}">
         </th>
         <td class="text-center" ><span id="bc_target_fund_transfer">{{$bc_target->fund_transfer}}</span></td>
         <td class="text-center" ><span id="performance_fund_transfer"> {{$performance->fund_transfer}}</span></td>
         <td class="text-center"><span id="bc_allocation_fund_transfer">{{$bc_allocation->fund_transfer}}</span></td>
         <td class="text-center"><b>Grade:- </b><span id="grade">20</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">3</th>
         <th class="text-center">Total Txs
         <input type="number" class="form-control" display="none" min="0" max="1" id="bc_status_total_tran" name="" value="{{$bc_status->total_tran}}">
         <input type="number" class="form-control" min="0" max="100" id="bc_allocation_total_tran" name="" value="{{$bc_allocation->total_tran}}">
         <input type="number" class="form-control" id="bc_target_total_tran" min="0" name="" value="{{$bc_target->total_tran}}"><input id="nor_score_total_tran"><input id="score_total_tran">
        </th>
         <td class="text-center"><span id="bc_target_total_tran">{{$bc_target->total_tran}}</span></td>
         <td class="text-center"><span id="performance_total_tran"> {{$performance->total_tran}}</span></td>
         <td class="text-center"><span id="bc_allocation_total_tran">{{$bc_allocation->total_tran}}</span></td>
         <td class="text-center"><b>Category:- </b><span id="rating">20</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">4</th>
         <th class="text-center">RuPay-Txs<input type="number" class="form-control" display="none" min="0" max="1" id="bc_status_rupay_trnx" name="" value="{{$bc_status->rupay_trnx}}"><input type="number" class="form-control" min="0" max="100" id="bc_allocation_rupay_trnx" name="" value="{{$bc_allocation->rupay_trnx}}"><input type="number" class="form-control" id="bc_target_rupay_trnx" min="0" name="" value="{{$bc_target->rupay_trnx}}">
         <input id="nor_score_rupay_trnx">
         <input id="score_rupay_trnx"></th>
         <td class="text-center"><span id="bc_target_rupay_trnx">{{$bc_target->rupay_trnx}}</span></td>
         <td class="text-center"><span id="performance_rupay_trnx"> {{$performance->rupay_trnx}}</span></td>
         <td class="text-center"><span id="bc_allocation_rupay_trnx">{{$bc_allocation->rupay_trnx}}</span></td>
         <td class="col-sm-1.5 p-2 bg-dark text-white" style="text-align: center;"><b><u>GRADING SCALE</u></b></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">5</th>
         <th class="text-center">Mobile Seeding<input type="number" class="form-control" display="none" min="0" max="1" id="bc_status_mobile_seed" name="" value="{{$bc_status->mobile_seed}}"><input type="number" class="form-control" min="0" max="100" id="bc_allocation_mobile_seed" name="" value="{{$bc_allocation->mobile_seed}}"><input type="number" class="form-control" id="bc_target_mobile_seed" min="0" name="" value="{{$bc_target->mobile_seed}}"></th>
         <td class="text-center"><span id="bc_target_mobile_seed">{{$bc_target->mobile_seed}}</span></td>
         <td class="text-center"><span id="performance_mobile_seed"> {{$performance->mobile_seed}}</span></td>
         <td class="text-center"><span id="bc_allocation_mobile_seed">{{$bc_allocation->mobile_seed}}</span></td>
         <td class="col-sm-1.5 p-2 bg-secondary text-white" style="text-align: center;">Above-32: A (Outstanding)</td>
         <!-- <td class="text-center"><b>>>32: A </b><span id="rating">(OUTSTANDING)</span></td> -->
        </tr>
        <tr class="text-center">
         <th class="text-center">6</th>
         <th class="text-center">BBPS<input type="number" class="form-control" display="none" min="0" max="1" id="bc_status_bbps" name="" value="{{$bc_status->bbps}}"><input type="number" class="form-control" min="0" max="100" id="bc_allocation_bbps" name="" value="{{$bc_allocation->bbps}}"><input type="number" class="form-control" id="bc_target_bbps" min="0" name="" value="{{$bc_target->bbps}}">
         <input id="nor_score_bbps">
            <input id="score_bbps">
        </th>
         <td class="text-center"><span id="bc_target_bbps">{{$bc_target->bbps}}</span></td>
         <td class="text-center"><span id="performance_bbps"> {{$performance->bbps}}</span></td>
         <td class="text-center"><span id="bc_allocation_bbps">{{$bc_allocation->bbps}}</span></td>
         <td class="col-sm-1.5 p-2 bg-dark text-white" style="text-align: center;">26-32: B (Excellent)</td>
        </tr>
        <tr class="text-center">
         <th class="text-center">7</th>
         <th class="text-center">RD/FD<input type="number" class="form-control" display="none" min="0" max="1" id="bc_status_rd_fd" name="" value="{{$bc_status->rd_fd}}"><input type="number" class="form-control" min="0" max="100" id="bc_allocation_rd_fd" name="" value="{{$bc_allocation->rd_fd}}"><input type="number" class="form-control" id="bc_target_rd_fd" min="0" name="" value="{{$bc_target->rd_fd}}">
         <input id="nor_score_rd_fd">
            <input id="score_rd_fd">
        </th>
         <td class="text-center"><span id="bc_target_rd_fd">{{$bc_target->rd_fd}}</span></td>
         <td class="text-center"><span id="performance_rd_fd"> {{$performance->rd_fd}}</span></td>
         <td class="text-center"><span id="bc_allocation_rd_fd">{{$bc_allocation->rd_fd}}</span></td>
         <td class="col-sm-1.5 p-2 bg-secondary text-white" style="text-align: center;">20-26: C (Very Good)</td>

        </tr>
        <tr class="text-center">
         <th class="text-center">8</th>
         <th class="text-center">PMJJBY<input type="number" class="form-control" display="none" min="0" max="1" id="bc_status_pmjby" name="" value="{{$bc_status->pmjby}}"><input type="number" class="form-control" min="0" max="100" id="bc_allocation_pmjby" name="" value="{{$bc_allocation->pmjby}}"><input type="number" class="form-control" id="bc_target_pmjby" min="0" name="" value="{{$bc_target->pmjby}}"><input id="nor_score_pmjby">
            <input id="score_pmjby"></th>
         <td class="text-center"><span id="bc_target_pmjby">{{$bc_target->pmjby}}</span>
        </td>
         <td class="text-center"><span id="performance_pmjby"> {{$performance->pmjby}}</span></td>
         <td class="text-center"><span id="bc_allocation_pmjby">{{$bc_allocation->pmjby}}</span></td>
         <td class="col-sm-1.5 p-2 bg-dark text-white" style="text-align: center;">14-20: D (Good)</td>
        </tr>
        <tr class="text-center">
         <th class="text-center">9</th>
         <th class="text-center">PMSBY<input type="number" class="form-control" display="none" min="0" max="1" id="bc_status_pmsby" name="" value="{{$bc_status->pmsby}}"><input type="number" class="form-control" min="0" max="100" id="bc_allocation_pmsby" name="" value="{{$bc_allocation->pmsby}}"><input type="number" class="form-control" id="bc_target_pmsby" min="0" name="" value="{{$bc_target->pmsby}}">
         <input id="nor_score_pmsby">
            <input id="score_pmsby">
        </th>
         <td class="text-center"><span id="bc_target_pmsby">{{$bc_target->pmsby}}</span></td>
         <td class="text-center"><span id="performance_pmsby"> {{$performance->pmsby}}</span></td>
         <td class="text-center"><span id="bc_allocation_pmsby">{{$bc_allocation->pmsby}}</span></td>
         <td class="col-sm-1.5 p-2 bg-secondary text-white" style="text-align: center;">08-14: E (Satisfactory)</td>
        </tr>
        <tr class="text-center">
         <th class="text-center">10</th>
         <th class="text-center">APY<input type="number" class="form-control" display="none" min="0" max="1" id="bc_status_apy" name="" value="{{$bc_status->apy}}"><input type="number" class="form-control" min="0" max="100" id="bc_allocation_apy" name="" value="{{$bc_allocation->apy}}"><input type="number" class="form-control" id="bc_target_apy" min="0" name="" value="{{$bc_target->apy}}">
         <input id="nor_score_apy">
        <input id="score_apy"></th>
        <td class="text-center"><span id="bc_target_apy">{{$bc_target->apy}}</span></td>
         <td class="text-center"><span id="performance_apy"> {{$performance->apy}}</span></td>
         <td class="text-center"><span id="bc_allocation_apy">{{$bc_allocation->apy}}</span></td>
         <td class="col-sm-1.5 p-2 bg-dark text-white" style="text-align: center;">Below-08: F (Poor)</td>
        </tr>
        <!-- <p class="btn btn-outline-danger">No record found, Please enter valid input!</p> -->
        </tbody>
      </table>
    </div>
    </div>
    </div>
</div>

<script type="text/javascript">
    $( document ).ready(function() {
         updateDB($(this).attr('id'), $(this).val())
         calculate();

    $('input').on('change', function(){
         updateDB($(this).attr('id'), $(this).val())
         calculate();
    })

    $('input').on('keyup', function(){
        updateDB($(this).attr('id'), $(this).val())
        calculate();
    })
   });

   function updateDB(data,value){
      $.ajax({url: "{{url('superadmin/updatedb?data=')}}"+data+'&value='+value, 
               success: function(result) {    
       }});
    }

   function calculate() {

    var bc_status_ac_opening=$('#bc_status_ac_opening').val();
    var bc_status_fund_transfer=$('#bc_status_fund_transfer').val();
    var bc_status_total_tran=$('#bc_status_total_tran').val();
    var bc_status_rupay_trnx=$('#bc_status_rupay_trnx').val();
    var bc_status_mobile_seed=$('#bc_status_mobile_seed').val();
    var bc_status_bbps=$('#bc_status_bbps').val();
    var bc_status_rd_fd=$('#bc_status_rd_fd').val();
    var bc_status_pmjby=$('#bc_status_pmjby').val();
    var bc_status_pmsby=$('#bc_status_pmsby').val();
    var bc_status_apy=$('#bc_status_apy').val();

    var bc_allocation_ac_opening=$('#bc_allocation_ac_opening').val();
    var bc_allocation_fund_transfer=$('#bc_allocation_fund_transfer').val();
    var bc_allocation_total_tran=$('#bc_allocation_total_tran').val();
    var bc_allocation_rupay_trnx=$('#bc_allocation_rupay_trnx').val();
    var bc_allocation_mobile_seed=$('#bc_allocation_mobile_seed').val();
    var bc_allocation_bbps=$('#bc_allocation_bbps').val();
    var bc_allocation_rd_fd=$('#bc_allocation_rd_fd').val();
    var bc_allocation_pmjby=$('#bc_allocation_pmjby').val();
    var bc_allocation_pmsby=$('#bc_allocation_pmsby').val();
    var bc_allocation_apy=$('#bc_allocation_apy').val();


  var totalproxy=0; 
   totalproxy= parseInt(bc_status_ac_opening * bc_allocation_ac_opening)+
              parseInt(bc_status_fund_transfer * bc_allocation_fund_transfer)+
              parseInt(bc_status_total_tran * bc_allocation_total_tran)+
              parseInt(bc_status_rupay_trnx * bc_allocation_rupay_trnx)+
              parseInt(bc_status_mobile_seed * bc_allocation_mobile_seed)+
              parseInt(bc_status_bbps * bc_allocation_bbps)+
              parseInt(bc_status_rd_fd * bc_allocation_rd_fd)+
              parseInt(bc_status_pmjby * bc_allocation_pmjby)+
              parseInt(bc_status_pmsby * bc_allocation_pmsby)+
              parseInt(bc_status_apy * bc_allocation_apy);

  var proxy_ac_opening=   parseInt(bc_status_ac_opening * bc_allocation_ac_opening);
  var proxy_fund_transfer=   parseInt(bc_status_fund_transfer * bc_allocation_fund_transfer);
  var proxy_total_tran=    parseInt(bc_status_total_tran * bc_allocation_total_tran);
  var proxy_rupay_trnx=    parseInt(bc_status_rupay_trnx * bc_allocation_rupay_trnx);
  var proxy_mobile_seed=    parseInt(bc_status_mobile_seed * bc_allocation_mobile_seed);
  var proxy_bbps=    parseInt(bc_status_bbps * bc_allocation_bbps);
  var proxy_rd_fd=    parseInt(bc_status_rd_fd * bc_allocation_rd_fd);
  var proxy_pmjby=    parseInt(bc_status_pmjby * bc_allocation_pmjby);
  var proxy_pmsby=    parseInt(bc_status_pmsby * bc_allocation_pmsby);
  var proxy_apy=    parseInt(bc_status_apy * bc_allocation_apy);

    console.log('totalproxy');
    console.log('totalproxy');
    console.log('totalproxy');

    var bc_target_ac_opening=$('#bc_target_ac_opening').val();
    var bc_target_fund_transfer=$('#bc_target_fund_transfer').val();
    var bc_target_total_tran=$('#bc_target_total_tran').val();
    var bc_target_rupay_trnx=$('#bc_target_rupay_trnx').val();
    var bc_target_mobile_seed=$('#bc_target_mobile_seed').val();
    var bc_target_bbps=$('#bc_target_bbps').val();
    var bc_target_rd_fd=$('#bc_target_rd_fd').val();
    var bc_target_pmjby=$('#bc_target_pmjby').val();
    var bc_target_pmsby=$('#bc_target_pmsby').val();
    var bc_target_apy=$('#bc_target_apy').val();

    var performance_ac_opening=$('#performance_ac_opening').text();
    var performance_fund_transfer=$('#performance_fund_transfer').text();
    var performance_total_tran=$('#performance_total_tran').text();
    var performance_rupay_trnx=$('#performance_rupay_trnx').text();
    var performance_mobile_seed=$('#performance_mobile_seed').text();
    var performance_bbps=$('#performance_bbps').text();
    var performance_rd_fd=$('#performance_rd_fd').text();
    var performance_pmjby=$('#performance_pmjby').text();
    var performance_pmsby=$('#performance_pmsby').text();
    var performance_apy=$('#performance_apy').text();

    $('#nor_score_ac_opening').text(performance_ac_opening*100/bc_target_ac_opening);
    var nor_score_ac_opening=$('#nor_score_ac_opening').text();

    $('#nor_score_fund_transfer').text(performance_fund_transfer*100/bc_target_fund_transfer);
    var nor_score_fund_transfer=$('#nor_score_fund_transfer').text();

    $('#nor_score_total_tran').text(performance_total_tran*100/bc_target_total_tran);
    var nor_score_total_tran=$('#nor_score_total_tran').text();

    $('#nor_score_rupay_trnx').text(performance_rupay_trnx*100/bc_target_rupay_trnx);
    var nor_score_rupay_trnx=$('#nor_score_rupay_trnx').text();

    $('#nor_score_mobile_seed').text(performance_mobile_seed*100/bc_target_mobile_seed);
    var nor_score_mobile_seed=$('#nor_score_mobile_seed').text();

    $('#nor_score_bbps').text(performance_bbps*100/bc_target_bbps);
    var nor_score_bbps=$('#nor_score_bbps').text();

    $('#nor_score_rd_fd').text(performance_rd_fd*100/bc_target_rd_fd);
    var nor_score_rd_fd=$('#nor_score_rd_fd').text();

    $('#nor_score_pmjby').text(performance_pmjby*100/bc_target_pmjby);
    var nor_score_pmjby=$('#nor_score_pmjby').text();

    $('#nor_score_pmsby').text(performance_pmsby*100/bc_target_pmsby);
    var nor_score_pmsby=$('#nor_score_pmsby').text();

    $('#nor_score_apy').text(performance_apy*100/bc_target_apy);
    var nor_score_apy=$('#nor_score_apy').text();


   ////////////////////////Normalized Weight calculation////////////////// 
     var normalized_weight_ac_opening=proxy_ac_opening*100/totalproxy;
     var normalized_weight_fund_transfer=proxy_fund_transfer*100/totalproxy;
     var normalized_weight_total_tran=proxy_total_tran*100/totalproxy;
     var normalized_weight_rupay_trnx=proxy_rupay_trnx*100/totalproxy;
     var normalized_weight_mobile_seed=proxy_mobile_seed*100/totalproxy;
     var normalized_weight_bbps=proxy_bbps*100/totalproxy;
     var normalized_weight_rd_fd=proxy_rd_fd*100/totalproxy;
     var normalized_weight_pmjby=proxy_pmjby*100/totalproxy;
     var normalized_weight_pmsby=proxy_pmsby*100/totalproxy;
     var normalized_weight_apy=proxy_apy*100/totalproxy;

   ///////////////////////////Score Calcuation//////////////////////////////
     var score_ac_opening= normalized_weight_ac_opening *nor_score_ac_opening /100;
     var score_fund_transfer= normalized_weight_fund_transfer *nor_score_fund_transfer /100;
     var score_total_tran= normalized_weight_total_tran *nor_score_total_tran /100;
     var score_rupay_trnx= normalized_weight_rupay_trnx *nor_score_rupay_trnx /100;
     var score_mobile_seed= normalized_weight_mobile_seed *nor_score_mobile_seed /100;
     var score_bbps= normalized_weight_bbps *nor_score_bbps /100;
     var score_rd_fd= normalized_weight_rd_fd *nor_score_rd_fd /100;
     var score_pmjby= normalized_weight_pmjby *nor_score_pmjby /100;
     var score_pmsby= normalized_weight_pmsby *nor_score_pmsby /100;
     var score_apy= normalized_weight_apy *nor_score_apy /100;

     $('#score_ac_opening').html(score_ac_opening);
     $('#score_fund_transfer').html(score_fund_transfer);
     $('#score_total_tran').html(score_total_tran);
     $('#score_rupay_trnx').html(score_rupay_trnx);
     $('#score_mobile_seed').html(score_mobile_seed);
     $('#score_bbps').html(score_bbps);
     $('#score_rd_fd').html(score_rd_fd);
     $('#score_pmjby').html(score_pmjby);
     $('#score_pmsby').html(score_pmsby);
     $('#score_apy').html(score_apy);

   var score = score_ac_opening+ score_fund_transfer+ score_total_tran+ score_rupay_trnx+ score_mobile_seed+ score_bbps+ score_rd_fd+ score_pmjby+ score_pmsby+  score_apy;
             
          console.log(score);

          var grade='';
          var rating='';

          if(score >=32){
             var grade='A';
             var rating='Outstanding';
          }
          if(score >26 && score<32){
             var grade='B';
             var rating='Excellent';
          }
          if(score >20 && score<26){
             var grade='C';
             var rating='Very Good';
          }
           if(score >14 && score<20){
             var grade='D';
             var rating='Good';
          }
           if(score >8 && score<14){
             var grade='E';
             var rating='Satisfactory';
          }
           if(score >0 && score<8){
             var grade='F';
             var rating='Poor';
          }

          console.log(grade);
          console.log(rating);

        $('#grade').html(grade);
        $('#rating').html(rating);
        $('#score').html(score);

    /////////////////total all score two decimal//////////////////
        $('#score_ac_opening').html(parseFloat($('#score_ac_opening').html()).toFixed(2));
        $('#score_fund_transfer').html(parseFloat($('#score_fund_transfer').html()).toFixed(2));
        $('#score_total_tran').html(parseFloat($('#score_total_tran').html()).toFixed(2));
        $('#score_rupay_trnx').html(parseFloat($('#score_rupay_trnx').html()).toFixed(2));
        $('#score_mobile_seed').html(parseFloat($('#score_mobile_seed').html()).toFixed(2));
        $('#score_rd_fd').html(parseFloat($('#score_rd_fd').html()).toFixed(2));
        $('#score_pmjby').html(parseFloat($('#score_pmjby').html()).toFixed(2));
        $('#score_pmsby').html(parseFloat($('#score_pmsby').html()).toFixed(2));
        $('#score_apy').html(parseFloat($('#score_apy').html()).toFixed(2));

    /////////////total score one decimal///////////////////////////

        $('#score').html(parseFloat($('#score').html()).toFixed(1));
   }
</script>
@endsection