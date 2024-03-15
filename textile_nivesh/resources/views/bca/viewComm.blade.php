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
        <a href="{{ route('bcuser.bc_commission') }}" class="btn btn-success">Back</a>
        <!-- <a class="btn btn-success btn-submit" href="#" style="float:right;"> Refresh</a> -->
        <legend class="text-center" style="color: green; font-weight: bold;">BC Commission Report</legend>
        </div>
        <br>

        <div class="panel-body">

          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif
   
        <h5 class="text-center">NAME:- <b>{{$commission->bc_name}}</b></h5>
        <h6 class="text-center">KO CODE:- {{$commission->ko_code}}</h6>
        <h6 class="text-center">Month/Year:- {{$commission->c_month}}/{{$commission->c_year}}</h6>

    <!-- <table id="example1" class="table table-bordered table-hover">
      <thead class="thead-light">
        <tr>
          <th class="text-center" scope="col">S.No</th>
          <th class="text-center" scope="col">KPI</th>
          <th class="text-center" scope="col">Commission</th>
          <th class="text-center" scope="col">S.No</th>
          <th class="text-center" scope="col">KPI</th>
          <th class="text-center" scope="col">Commission</th>    </tr>
      </thead>
    <tbody>
        <tr class="text-center">
          <th class="text-center">1</th>
          <th class="text-center">Non-E-KYC AC Funded Commission</th>
          <td class="text-center"><span>{{$commission->nonekyc_ac_funded_comm}}</span></td>

          <th class="text-center">2</th>
          <th class="text-center">Non-E-KYC AC Non Funded Commission</th>
          <td class="text-center"><span >{{$commission->nonekyc_ac_non_funded_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">3</th>
         <th class="text-center">E-KYC AC Funded Commission</th>
         <td class="text-center"><span >{{$commission->ekyc_ac_funded_comm}}</span></td>

         <th class="text-center">4</th>
         <th class="text-center">E-KYC AC Non Funded Commission</th>
         <td class="text-center"><span >{{$commission->ekyc_ac_non_funded_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">5</th>
         <th class="text-center">FD Commission</th>
         <td class="text-center"><span >{{$commission->fd_comm}}</span></td>

         <th class="text-center">6</th>
         <th class="text-center">RD Commission</th>
         <td class="text-center"><span >{{$commission->rd_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">7</th>
         <th class="text-center">PMSBY Commission</th>
         <td class="text-center"><span >{{$commission->pmsby_comm}}</span></td>

         <th class="text-center">8</th>
         <th class="text-center">PMJJBY Commission</th>
         <td class="text-center"><span >{{$commission->pmjjby_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">9</th>
         <th class="text-center">APY Commission</th>
         <td class="text-center"><span >{{$commission->apy_comm}}</span></td>
        
         <th class="text-center">10</th>
         <th class="text-center">Aadhar Seed Commission</th>
         <td class="text-center"><span >{{$commission->aadhar_seed_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">11</th>
         <th class="text-center">Mobile Seed Commission</th>
         <td class="text-center"><span >{{$commission->mobile_seed_comm}}</span></td>
        
         <th class="text-center">12</th>
         <th class="text-center">Withdrawl Commission</th>
         <td class="text-center"><span >{{$commission->withdrawl_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">13</th>
         <th class="text-center">Deposit Commission</th>
         <td class="text-center"><span >{{$commission->deposit_comm}}</span></td>
        
         <th class="text-center">14</th>
         <th class="text-center">Fund Transfer Commission</th>
         <td class="text-center"><span >{{$commission->fund_trnsfer_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">15</th>
         <th class="text-center">IMPS Transaction Commission</th>
         <td class="text-center"><span >{{$commission->imps_trnx_comm}}</span></td>
        
         <th class="text-center">16</th>
         <th class="text-center">ChequeBook Issue Commission</th>
         <td class="text-center"><span >{{$commission->cheque_issue_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">17</th>
         <th class="text-center">ChequeBook Stop Commission</th>
         <td class="text-center"><span >{{$commission->cheque_stop_comm}}</span></td>
        
         <th class="text-center">18</th>
         <th class="text-center">Rupay DC Issue Commission</th>
         <td class="text-center"><span >{{$commission->rupay_dc_issue}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">19</th>
         <th class="text-center">BBPS Commission</th>
         <td class="text-center"><span >{{$commission->bbps_comm}}</span></td>
        
         <th class="text-center">20</th>
         <th class="text-center">PSP Printer Commission</th>
         <td class="text-center"><span >{{$commission->psp_printer_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">21</th>
         <th class="text-center">SMS Alert Commission</th>
         <td class="text-center"><span >{{$commission->sms_alert_comm}}</span></td>
        
         <th class="text-center">22</th>
         <th class="text-center">Debit Blocked Commission</th>
         <td class="text-center"><span >{{$commission->debit_blocked_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">23</th>
         <th class="text-center">PMJDYOD Commission</th>
         <td class="text-center"><span >{{$commission->pmjdyod_comm}}</span></td>
        
         <th class="text-center">24</th>
         <th class="text-center">NEFT Commission</th>
         <td class="text-center"><span >{{$commission->neft_comm}}</span></td>
        </tr>
        <tr class="text-center">
         <th class="text-center">25</th>
         <th class="text-center">BC Share Commission</th>
         <td class="text-center"><span >{{$commission->bc_share_comm}}</span></td>
        </tr>
    </tbody>
    </table> -->

    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr class="tag_sec" style="background:cadetblue; color: white;">
         <th class="text-center">S.No</th>
         <th class="text-center">KPI</a></th>
         <th class="text-center">Commission</th>
         </tr>
        </thead>
        <tbody>
        <tr class="text-center">
         <td class="text-center">1</td>
         <th class="text-center">Non-E-KYC AC Funded Commission</th>
         <th class="text-center"><span >{{$commission->nonekyc_ac_funded_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">2</td>
         <th class="text-center">Non-E-KYC AC Non Funded Commission</th>
         <th class="text-center"><span >{{$commission->nonekyc_ac_non_funded_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">3</td>
         <th class="text-center">E-KYC AC Funded Commission</th>
         <th class="text-center"><span >{{$commission->ekyc_ac_funded_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">4</td>
         <th class="text-center">E-KYC AC Non Funded Commission</th>
         <th class="text-center"><span >{{$commission->ekyc_ac_non_funded_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">5</td>
         <th class="text-center">FD Commission</th>
         <th class="text-center"><span >{{$commission->fd_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">6</td>
         <th class="text-center">RD Commission</th>
         <th class="text-center"><span >{{$commission->rd_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">7</td>
         <th class="text-center">PMSBY Commission</th>
         <th class="text-center"><span >{{$commission->pmsby_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">8</td>
         <th class="text-center">PMJJBY Commission</th>
         <th class="text-center"><span >{{$commission->pmjjby_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">9</td>
         <th class="text-center">APY Commission</th>
         <th class="text-center"><span >{{$commission->apy_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">10</td>
         <th class="text-center">Aadhar Seed Commission</th>
         <th class="text-center"><span >{{$commission->aadhar_seed_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">11</td>
         <th class="text-center">Mobile Seed Commission</th>
         <th class="text-center"><span >{{$commission->mobile_seed_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">12</td>
         <th class="text-center">Withdrawl Commission</th>
         <th class="text-center"><span >{{$commission->withdrawl_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">13</td>
         <th class="text-center">Deposit Commission</th>
         <th class="text-center"><span >{{$commission->deposit_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">14</td>
         <th class="text-center">Fund Transfer Commission</th>
         <th class="text-center"><span >{{$commission->fund_trnsfer_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">15</td>
         <th class="text-center">IMPS Transaction Commission</th>
         <th class="text-center"><span >{{$commission->imps_trnx_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">16</td>
         <th class="text-center">ChequeBook Issue Commission</th>
         <th class="text-center"><span >{{$commission->cheque_issue_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">17</td>
         <th class="text-center">ChequeBook Stop Commission</th>
         <th class="text-center"><span >{{$commission->cheque_stop_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">18</td>
         <th class="text-center">Rupay DC Issue Commission</th>
         <th class="text-center"><span >{{$commission->rupay_dc_issue}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">19</td>
         <th class="text-center">BBPS Commission</th>
         <th class="text-center"><span >{{$commission->bbps_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">20</td>
         <th class="text-center">PSP Printer Commission</th>
         <th class="text-center"><span >{{$commission->psp_printer_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">21</td>
         <th class="text-center">SMS Alert Commission</th>
         <th class="text-center"><span >{{$commission->sms_alert_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">22</td>
         <th class="text-center">Debit Blocked Commission</th>
         <th class="text-center"><span >{{$commission->debit_blocked_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">23</td>
         <th class="text-center">PMJDYOD Commission</th>
         <th class="text-center"><span >{{$commission->pmjdyod_comm}}</span></th>
        </tr>
        <tr class="text-center">
         <td class="text-center">24</td>
         <th class="text-center">NEFT Commission</th>
         <th class="text-center"><span >{{$commission->neft_comm}}</span></th>
        </tr>
        <tr class="text-center" style="background:cadetblue; color: white;">
         <td class="text-center">25</td>
         <th class="text-center">BC Share Commission (Total)</th>
         <th class="text-center"><span >{{$commission->bc_share_comm}}</span></th>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  </div>
</div>

@endsection