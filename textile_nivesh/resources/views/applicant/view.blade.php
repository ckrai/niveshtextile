
@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="{{ asset('js/app.js') }}" type="text/js"></script>

@endpush
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="form-group" style="margin-top: 24px;">
      <a href="{{ route('applicant.list') }}" class="btn btn-success">Back</a>
      <!-- <a href="{{ route('applicant.list') }}" class="btn btn-success" style="float: right; display: block;">BC LIST</a> -->
      </div>
          
      <h3 style="text-align:center;"><b>FORM DETAILS</b><br></h3>
  <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr class="tag_sec col-md-12" >
         <th class="text-center">S.No</th>
         <th class="text-center col-3">Details</a></th>
         <th class="text-center">Documents</th>
         <!-- <th class="text-center col-2">Doc. Date</th> -->
         <th class="text-center">Remark</th>
         <th class="text-center col-2">Remark Date</th>
         <th class="text-center">Remark Expert</th>
         <th class="text-center">Remark CA</th>
         </tr>
        </thead>
        <tbody>
        <tr class="text">
         <td class="text-center">1</td>
         <th class="text-">Applicant Name, Address & Contact</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->n_applicant)}}">{{ $applicant->n_applicant }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
         <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
         <td class="text-center">{{ $remarks->remark_n_applicant }}</td>
         <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_n_applicant ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_n_applicant  ?? '-'}}</td>
        </tr>
        <tr class="text">
         <td class="text-center">2</td>
         <th class="text">Constitution of the Applicant</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->constitution)}}">{{ $applicant->constitution }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
         <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_constitution }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_constitution  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_constitution  ?? '-'}}</td>
        </tr>
        <tr class="text">
         <td class="text-center">3</td>
         <th class="text">Textile Industry</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->textile_industry)}}">{{ $applicant->textile_industry }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
         <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_textile_industry }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_textile_industry  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_textile_industry  ?? '-'}}</td>
        </tr>
        <tr class="text">
        <td class="text-center">4</td>
        <th class="text">Nature of Textile</th>
         <th class="text-center fill">{{$applicant->nature_of_textile}}<br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
         <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_nature_of_textile }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_nature_of_textile  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_nature_of_textile  ?? '-'}}</td>
        </tr>
        <tr class="text ">
         <td class="text-center">5</td>
        <th class="text">Proposed Capital</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->proposed_capital)}}">{{ $applicant->proposed_capital }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
         <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
      <td class="text-center">{{ $remarks->remark_proposed_capital }}</td>
      <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
       <td class="text-center">{{ $remarkexpert->expert_remark_proposed_capital  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_proposed_capital  ?? '-'}}</td>
        </tr>
        <tr class="text ">
         <td class="text-center">6</td>
        <th class="text ">Project Side Address</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->p_side_address)}}">{{ $applicant->p_side_address }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
         <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
       <td class="text-center">{{ $remarks->remark_p_side_address }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_p_side_address  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_p_side_address  ?? '-'}}</td>
        </tr>
        <tr class="text ">
         <td class="text-center">7</td>
        <th class="text ">GSTIN of the Applicant</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->gstin)}}">{{ $applicant->gstin }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
         <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_gstin }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_gstin  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_gstin  ?? '-'}}</td>
        </tr>
        <tr class="text ">
         <td class="text-center">8</td>
        <th class="text ">Establishment of Textile Industrial Undertaking</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->estab_copy_undertaking)}}">{{ $applicant->estab_copy_undertaking }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
         <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
       <td class="text-center">{{ $remarks->remark_estab_copy_undertaking }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_estab_copy_undertaking  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_estab_copy_undertaking  ?? '-'}}</td>
        </tr>
        <tr class="text ">
         <td class="text-center">9</td>
        <th class="text ">Date from which the capital investment has been started or is proposed to be started</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->date_from_capital_invest)}}">{{ $applicant->date_from_capital_invest }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
         <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
      <td class="text-center">{{ $remarks->remark_date_from_capital_invest }}</td>
      <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
       <td class="text-center">{{ $remarkexpert->expert_remark_date_from_capital_invest  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_date_from_capital_invest  ?? '-'}}</td>
        </tr>
        <tr class="text ">
         <td class="text-center">10</td>
        <th class="text ">Whether capital investment is proposed to be done in phases</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->whether_capital_invest)}}">{{ $applicant->whether_capital_invest }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
         <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_whether_capital_invest }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_whether_capital_invest  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_whether_capital_invest  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">11</td>
        <th class="text ">Total amount of all financial facilities</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->total_amount)}}">{{ $applicant->total_amount }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_total_amount }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_total_amount  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_total_amount  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">12</td>
        <th class="text ">Details of applied financial facilities Subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->details_applied_financial)}}">{{ $applicant->details_applied_financial }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_details_applied_financial }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_details_applied_financial  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_details_applied_financial  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">13</td>
        <th class="text ">Exemption from Stamp duty</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->exemption_stamp_duty)}}">{{ $applicant->exemption_stamp_duty }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
       <td class="text-center">{{ $remarks->remark_exemption_stamp_duty }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_exemption_stamp_duty  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_exemption_stamp_duty  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">14</td>
        <th class="text ">Exemption from State Tax Department</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->exemption_state_tax)}}">{{ $applicant->exemption_state_tax }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_exemption_state_tax }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_exemption_state_tax  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_exemption_state_tax  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">15</td>
        <th class="text ">Additional reimbursement of 10% GST to those textile units</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_reimbursement)}}">{{ $applicant->additional_reimbursement }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_additional_reimbursement }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_additional_reimbursement  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_additional_reimbursement  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">16</td>
        <th class="text ">Capital Subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->capital_subsidy)}}">{{ $applicant->capital_subsidy }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_capital_subsidy }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_capital_subsidy  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_capital_subsidy  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">17</td>
        <th class="text ">Interest Subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->intrest_subsidy)}}">{{ $applicant->intrest_subsidy }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_intrest_subsidy }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_intrest_subsidy  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_intrest_subsidy  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">18</td>
        <th class="text ">0.5 Additional interest subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_intrest_subsidy)}}">{{ $applicant->additional_intrest_subsidy }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_additional_intrest_subsidy }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_additional_intrest_subsidy  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_additional_intrest_subsidy  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">19</td>
        <th class="text ">Margin Money Grant</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->margin_money_grant)}}">{{ $applicant->margin_money_grant }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
       <td class="text-center">{{ $remarks->remark_margin_money_grant }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_margin_money_grant  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_margin_money_grant  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">20</td>
        <th class="text ">Additional 5% margin money grant</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_5_per_margin)}}">{{ $applicant->additional_5_per_margin }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
       <td class="text-center">{{ $remarks->remark_additional_5_per_margin }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_additional_5_per_margin  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_additional_5_per_margin  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">21</td>
        <th class="text ">Infrastructure Interest Subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->infra_intrest_subsidy)}}">{{ $applicant->infra_intrest_subsidy }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_infra_intrest_subsidy }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_infra_intrest_subsidy  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_infra_intrest_subsidy  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">22</td>
        <th class="text ">Additional 2.5% infrastructure interest subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_per_infra)}}">{{ $applicant->additional_per_infra }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
       <td class="text-center">{{ $remarks->remark_additional_per_infra }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_additional_per_infra  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_additional_per_infra  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">23</td>
        <th class="text ">Additional 25% working capital subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_25_per_working)}}">{{ $applicant->additional_25_per_working }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_additional_25_per_working }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_additional_25_per_working  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_additional_25_per_working  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">24</td>
        <th class="text ">EPF Reimbursement (100 or more unskilled workers)</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->epf_reimbursement)}}">{{ $applicant->epf_reimbursement }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
       <td class="text-center">{{ $remarks->remark_epf_reimbursement }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_epf_reimbursement  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_epf_reimbursement  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">25</td>
        <th class="text ">10 Additional EPF Reimbursement</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_epf_reimbursement)}}">{{ $applicant->additional_epf_reimbursement }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_additional_epf_reimbursement }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_additional_epf_reimbursement  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_additional_epf_reimbursement  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">26</td>
        <th class="text ">Reimbursement of Freight</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->reimbursement_of_freight)}}">{{ $applicant->reimbursement_of_freight }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
       <td class="text-center">{{ $remarks->remark_reimbursement_of_freight }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_reimbursement_of_freight  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_reimbursement_of_freight  ?? '-'}}</td>
        </tr>
        <tr class="text">
        <td class="text-center">27</td>
        <th class="text">Gap Filling Grant in Government of India Scheme for Skill Development</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->gap_filling_grant)}}">{{ $applicant->gap_filling_grant }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
       <td class="text-center">{{ $remarks->remark_gap_filling_grant }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_gap_filling_grant  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_gap_filling_grant  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">28</td>
        <th class="text ">Exemption from Electricity Duty</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->exemption_from_electricity)}}">{{ $applicant->exemption_from_electricity }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
       <td class="text-center">{{ $remarks->remark_exemption_from_electricity }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_exemption_from_electricity  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_exemption_from_electricity  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">29</td>
        <th class="text ">Exemption from Mandi Duty</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->exemption_from_mandi)}}">{{ $applicant->exemption_from_mandi }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_exemption_from_mandi }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_exemption_from_mandi  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_exemption_from_mandi  ?? '-'}}</td>
        </tr>
        <tr class="text ">
        <td class="text-center">30</td>
        <th class="text ">Acknowledgment of  U.A.M./I.E.M./IL</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->acknowledgment_of_uam)}}">{{ $applicant->acknowledgment_of_uam }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_acknowledgment_of_uam }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_acknowledgment_of_uam  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_acknowledgment_of_uam  ?? '-'}}</td>
        </tr>
         <tr class="text ">
        <td class="text-center">31</td>
        <th class="text ">Audited Accounts of the unit with all schedules</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->audited_accounts_unit)}}">{{ $applicant->audited_accounts_unit }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
       <td class="text-center">{{ $remarks->remark_audited_accounts_unit }}</td>
       <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
        <td class="text-center">{{ $remarkexpert->expert_remark_audited_accounts_unit  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_audited_accounts_unit  ?? '-'}}</td>
        </tr>
         <tr class="text ">
        <td class="text-center">32</td>
        <th class="text ">Detailed Project Report</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->dpr)}}">{{ $applicant->dpr }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_dpr }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_dpr  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_dpr  ?? '-'}}</td>
        </tr>
         <tr class="text ">
        <td class="text-center">33</td>
        <th class="text ">CA Certificate for Existing Gross Assets</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->cac_for_existing_gross)}}">{{ $applicant->cac_for_existing_gross }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_cac_for_existing_gross }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_cac_for_existing_gross  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_cac_for_existing_gross  ?? '-'}}</td>
        </tr>
         <tr class="text ">
        <td class="text-center">34</td>
        <th class="text ">CA Certificate for Gross Fixed Assets</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->cac_for_fixed_gross)}}">{{ $applicant->cac_for_fixed_gross }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_cac_for_fixed_gross }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_cac_for_fixed_gross  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_cac_for_fixed_gross  ?? '-'}}</td>
        </tr>
         <tr class="text ">
        <td class="text-center">35</td>
        <th class="text">Affidavit</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->affidavit)}}">{{ $applicant->affidavit }}</a><br/><a style="font-size: 12px;">Date: {{ $applicant->created_at->format('d-m-Y') }}</a></th>
        <!-- <td class="text-center">{{ $applicant->created_at->format('d-m-Y') }}</td> -->
        <td class="text-center">{{ $remarks->remark_affidavit }}</td>
        <td class="text-center">{{ $remarks->created_at->format('d-m-Y') }}</td>
         <td class="text-center">{{ $remarkexpert->expert_remark_affidavit  ?? '-'}}</td>
         <td class="text-center">{{ $remarkca->ca_remark_affidavit  ?? '-'}}</td>
        </tr>
        <!-- <p class="btn btn-outline-danger">No record found, Please enter valid input!</p> -->
        </tbody>
  </table> 


      <br/>
      <h3 style="text-align:center;"><b>DIRECTORS</b><br></h3><br/> 
    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr class="text-center">
          <th class="text-center">S. No.</th>
           <th class="text-center">Director Name</th>
           <th class="text-center">Mobile</th>
           <th class="text-center">Email</th>
           <th class="text-center">Director PAN</th>
           <th class="text-center">Director DIN</th>
           <th class="text-center">Director PAN Doc</th>
           <th class="text-center">Director DIN Doc</th>
        </tr>
        </thead>
        <tbody>
           @forelse ($directors as $dir)
            <tr class="text-center">
            <td class="text-center">{{ $loop->index + 1 }}</td>
            <td class="text-center">{{$dir->director_name}}</td>
            <td class="text-center">{{$dir->director_mobile}}</td>
            <td class="text-center">{{$dir->director_email}}</td>  
            <td class="text-center">{{$dir->director_pan}}</td>   
            <td class="text-center">{{$dir->director_din}}</td>    
            <td class="text-center"> <a download href="{{url('assets/'. $dir->director_pan_doc)}}">{{$dir->director_pan_doc}}</a></td>
            <td class="text-center"><a download href="{{url('assets/'. $dir->director_din_doc)}}">{{$dir->director_din_doc}}</a></td>
           </tr>
          @empty
          <p class="btn btn-outline-danger">No record found, Please enter valid input!</p>
          @endforelse
       </tbody>
    </table>
        <br>
      </div>
  </div>
</div>
@endsection
