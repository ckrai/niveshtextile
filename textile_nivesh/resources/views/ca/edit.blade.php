
@extends('layouts.app')
@section('script')

<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="form-group" style="margin-top: 24px;">
              <a href="{{ route('ca.list') }}" class="btn btn-success">Back</a>
          </div>
          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif
    <legend style="color: green; font-weight: bold;">Update Form </legend>
    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr class="tag_sec">
         <th class="text-center">S.No</th>
         <th class="text-center">Details</a></th>
         <th class="text-center">Documents</th>
         <th class="text-center">Documents update</th>
         <th class="text-center">Applicant Remark</th>
         <th class="text-center">Remark update</th>
         <th class="text-center">If any remark</th>
         <th class="text-center">Action</th>
         </tr>
        </thead>
        <tbody>
        <tr class="text-center">
         <td class="text-center">1</td>
         <th class="text-center">Applicant Name, Address & Contact</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->n_applicant)}}">{{ $applicant->n_applicant }}</a></th>
         <th class="text-center fill">{{$applicant->updated_at}}</th>
         <th class="text-center fill">{{$remarkapp->remark_n_applicant }}</th>
         <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
          {{ csrf_field() }}
          <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
              <input type="hidden" name="remark_ca_field" value="ca_remark_n_applicant">
              <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
          </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        <!--  <form action="{{ route('ca.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
         <th class="text-center fill"><input  class="form-control" type="text" id="ca_remark_n_applicant" name="ca_remark_n_applicant" value="" placeholder="Enter remark"></th>
         <th class="text-center fill"><input type="submit" class="btn btn-success" value="Update"></th>
          </form> -->
        </tr>
        <tr class="text-center">
         <td class="text-center">2</td>
         <th class="text-center">Constitution of the Applicant</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->constitution)}}">{{ $applicant->constitution }}</a></th>
         <th class="text-center fill">{{$applicant->updated_at}}</th>
         <th class="text-center fill">{{$remarkapp->remark_constitution}}</th>
         <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_constitution">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
         <!-- <form action="{{ route('ca.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
         <th class="text-center fill"><input  class="form-control" type="text" id="ca_remark_constitution" name="ca_remark_constitution" value="" placeholder="Enter remark"></th>
         <th class="text-center fill"><input type="submit" class="btn btn-success" value="Update"></th>
          </form> -->
        </tr>
        <tr class="text-center">
         <td class="text-center">3</td>
         <th class="text-center">Textile Industry</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->textile_industry)}}">{{ $applicant->textile_industry }}</a></th>
         <th class="text-center fill">{{$applicant->updated_at}}</th>
         <th class="text-center fill">{{$remarkapp->remark_textile_industry}}</th>
         <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_textile_industry">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        <!-- <form action="{{ route('ca.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
         <th class="text-center fill"><input  class="form-control" type="text" id="ca_remark_textile_industry" name="ca_remark_textile_industry" value="" placeholder="Enter remark"></th>
         <th class="text-center fill"><input type="submit" class="btn btn-success" value="Update"></th>
          </form> -->
        </tr>
        <tr class="text-center">
        <td class="text-center">4</td>
        <th class="text-center">Nature of Textile</th>
         <th class="text-center fill">{{$applicant->nature_of_textile}}</th>
         <th class="text-center fill">{{$applicant->updated_at}}</th>
         <th class="text-center fill">{{$remarkapp->remark_nature_of_textile}}</th>
         <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_nature_of_textile">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        <!-- <form action="{{ route('ca.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
         <th class="text-center fill"><input  class="form-control" type="text" id="ca_remark_nature_of_textile" name="ca_remark_nature_of_textile" value="" placeholder="Enter remark"></th>
         <th class="text-center fill"><input type="submit" class="btn btn-success" value="Update"></th>
          </form> -->
        </tr>
        <tr class="text-center">
         <td class="text-center">5</td>
        <th class="text-center">Proposed Capital</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->proposed_capital)}}">{{ $applicant->proposed_capital }}</a></th>
         <th class="text-center fill">{{$applicant->updated_at}}</th>
         <th class="text-center fill">{{$remarkapp->remark_proposed_capital}}</th>
         <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_proposed_capital">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        <!-- <form action="{{ route('ca.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
         <th class="text-center fill"><input  class="form-control" type="text" id="ca_remark_proposed_capital" name="ca_remark_proposed_capital" value="" placeholder="Enter remark"></th>
         <th class="text-center fill"><input type="submit" class="btn btn-success" value="Update"></th>
        </form> -->
        </tr>
        <tr class="text-center">
         <td class="text-center">6</td>
        <th class="text-center">Project Side Address</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->p_side_address)}}">{{ $applicant->p_side_address }}</a></th>
         <th class="text-center fill">{{$applicant->updated_at}}</th>
         <th class="text-center fill">{{$remarkapp->remark_p_side_address}}</th>
         <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_p_side_address">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
         <!-- <form action="{{ route('ca.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
         <th class="text-center fill"><input  class="form-control" type="text" id="ca_remark_p_side_address" name="ca_remark_p_side_address" value="" placeholder="Enter remark"></th>
         <th class="text-center fill"><input type="submit" class="btn btn-success" value="Update"></th>
        </form> -->
        </tr>
        <tr class="text-center">
         <td class="text-center">7</td>
        <th class="text-center">GSTIN of the Applicant</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->gstin)}}">{{ $applicant->gstin }}</a></th>
         <th class="text-center fill">{{$applicant->updated_at}}</th>
         <th class="text-center fill">{{$remarkapp->remark_gstin}}</th>
         <th class="text-center fill">{{$remarkapp->updated_at}}</th>
         <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_gstin">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        <!-- <form action="{{ route('ca.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
         <th class="text-center fill"><input  class="form-control" type="text" id="ca_remark_gstin" name="ca_remark_gstin" value="" placeholder="Enter remark"></th>
         <th class="text-center fill"><input type="submit" class="btn btn-success" value="Update"></th>
          </form> -->
        </tr>
        <tr class="text-center">
         <td class="text-center">8</td>
        <th class="text-center">Establishment of Textile Industrial Undertaking</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->estab_copy_undertaking)}}">{{ $applicant->estab_copy_undertaking }}</a></th>
         <th class="text-center fill">{{$applicant->updated_at}}</th>
         <th class="text-center fill">{{$remarkapp->remark_estab_copy_undertaking}}</th>
         <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_estab_copy_undertaking">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        <!-- <form action="{{ route('ca.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
         <th class="text-center fill"><input  class="form-control" type="text" id="ca_remark_estab_copy_undertaking" name="ca_remark_estab_copy_undertaking" value="" placeholder="Enter remark"></th>
         <th class="text-center fill"><input type="submit" class="btn btn-success" value="Update"></th>
          </form> -->
        </tr>
        <tr class="text-center">
         <td class="text-center">9</td>
        <th class="text-center">Date from which the capital investment has been started or is proposed to be started</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->date_from_capital_invest)}}">{{ $applicant->date_from_capital_invest }}</a></th>
         <th class="text-center fill">{{$applicant->updated_at}}</th>
         <th class="text-center fill">{{$remarkapp->remark_date_from_capital_invest}}</th>
         <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_date_from_capital_invest">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        <!-- <form action="{{ route('ca.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
         <th class="text-center fill"><input  class="form-control" type="text" id="ca_remark_date_from_capital_invest" name="ca_remark_date_from_capital_invest" value="" placeholder="Enter remark"></th>
         <th class="text-center fill"><input type="submit" class="btn btn-success" value="Update"></th>
          </form> -->
        </tr>
        <tr class="text-center">
         <td class="text-center">10</td>
        <th class="text-center">Whether capital investment is proposed to be done in phases</th>
         <th class="text-center fill"><a download href="{{url('assets/'. $applicant->whether_capital_invest)}}">{{ $applicant->whether_capital_invest }}</a></th>
         <th class="text-center fill">{{$applicant->updated_at}}</th>
         <th class="text-center fill">{{$remarkapp->remark_whether_capital_invest}}</th>
         <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_whether_capital_invest">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        <!-- <form action="{{ route('ca.update',$applicant->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
         <th class="text-center fill"><input  class="form-control" type="text" id="ca_remark_whether_capital_invest" name="ca_remark_whether_capital_invest" value="" placeholder="Enter remark"></th>
         <th class="text-center fill"><input type="submit" class="btn btn-success" value="Update"></th>
          </form> -->
        </tr>
        <tr class="text-center">
        <td class="text-center">11</td>
        <th class="text-center">Total amount of all financial facilities</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->total_amount)}}">{{ $applicant->total_amount }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_total_amount}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_total_amount">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">12</td>
        <th class="text-center">Details of applied financial facilities Subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->details_applied_financial)}}">{{ $applicant->details_applied_financial }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_details_applied_financial}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_details_applied_financial">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">13</td>
        <th class="text-center">Exemption from Stamp duty</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->exemption_stamp_duty)}}">{{ $applicant->exemption_stamp_duty }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_exemption_stamp_duty}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_exemption_stamp_duty">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">14</td>
        <th class="text-center">Exemption from State Tax Department</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->exemption_state_tax)}}">{{ $applicant->exemption_state_tax }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_exemption_state_tax}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_exemption_state_tax">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">15</td>
        <th class="text-center">Additional reimbursement of 10% GST to those textile units</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_reimbursement)}}">{{ $applicant->additional_reimbursement }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_additional_reimbursement}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_additional_reimbursement">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">16</td>
        <th class="text-center">Capital Subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->capital_subsidy)}}">{{ $applicant->capital_subsidy }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_capital_subsidy}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_capital_subsidy">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">17</td>
        <th class="text-center">Interest Subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->intrest_subsidy)}}">{{ $applicant->intrest_subsidy }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_intrest_subsidy}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_intrest_subsidy">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">18</td>
        <th class="text-center">0.5 Additional interest subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_intrest_subsidy)}}">{{ $applicant->additional_intrest_subsidy }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_additional_intrest_subsidy}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_additional_intrest_subsidy">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">19</td>
        <th class="text-center">Margin Money Grant</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->margin_money_grant)}}">{{ $applicant->margin_money_grant }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_margin_money_grant}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_margin_money_grant">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">20</td>
        <th class="text-center">Additional 5% margin money grant</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_5_per_margin)}}">{{ $applicant->additional_5_per_margin }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_additional_5_per_margin}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_additional_5_per_margin">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">21</td>
        <th class="text-center">Infrastructure Interest Subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->infra_intrest_subsidy)}}">{{ $applicant->infra_intrest_subsidy }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_infra_intrest_subsidy}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_infra_intrest_subsidy">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">22</td>
        <th class="text-center">Additional 2.5% infrastructure interest subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_per_infra)}}">{{ $applicant->additional_per_infra }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_additional_per_infra}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_additional_per_infra">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">23</td>
        <th class="text-center">Additional 25% working capital subsidy</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_25_per_working)}}">{{ $applicant->additional_25_per_working }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_additional_25_per_working}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_additional_25_per_working">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">24</td>
        <th class="text-center">EPF Reimbursement (100 or more unskilled workers)</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->epf_reimbursement)}}">{{ $applicant->epf_reimbursement }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_epf_reimbursement}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_epf_reimbursement">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">25</td>
        <th class="text-center">10 Additional EPF Reimbursement</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->additional_epf_reimbursement)}}">{{ $applicant->additional_epf_reimbursement }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_additional_epf_reimbursement}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_additional_epf_reimbursement">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">26</td>
        <th class="text-center">Reimbursement of Freight</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->reimbursement_of_freight)}}">{{ $applicant->reimbursement_of_freight }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_reimbursement_of_freight}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_reimbursement_of_freight">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">27</td>
        <th class="text-center">Gap Filling Grant in Government of India Scheme for Skill Development</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->gap_filling_grant)}}">{{ $applicant->gap_filling_grant }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_gap_filling_grant}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_gap_filling_grant">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">28</td>
        <th class="text-center">Exemption from Electricity Duty</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->exemption_from_electricity)}}">{{ $applicant->exemption_from_electricity }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_exemption_from_electricity}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_exemption_from_electricity">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">29</td>
        <th class="text-center">Exemption from Mandi Duty</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->exemption_from_mandi)}}">{{ $applicant->exemption_from_mandi }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_exemption_from_mandi}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_exemption_from_mandi">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <tr class="text-center">
        <td class="text-center">30</td>
        <th class="text-center">Acknowledgment of  U.A.M./I.E.M./IL</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->acknowledgment_of_uam)}}">{{ $applicant->acknowledgment_of_uam }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_acknowledgment_of_uam}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_acknowledgment_of_uam">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
         <tr class="text-center">
        <td class="text-center">31</td>
        <th class="text-center">Audited Accounts of the unit with all schedules</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->audited_accounts_unit)}}">{{ $applicant->audited_accounts_unit }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_audited_accounts_unit}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_audited_accounts_unit">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
         <tr class="text-center">
        <td class="text-center">32</td>
        <th class="text-center">Detailed Project Report</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->dpr)}}">{{ $applicant->dpr }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_dpr}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_dpr">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
         <tr class="text-center">
        <td class="text-center">33</td>
        <th class="text-center">CA Certificate for Existing Gross Assets</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->cac_for_existing_gross)}}">{{ $applicant->cac_for_existing_gross }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_cac_for_existing_gross}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_cac_for_existing_gross">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
         <tr class="text-center">
        <td class="text-center">34</td>
        <th class="text-center">CA Certificate for Gross Fixed Assets</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->cac_for_fixed_gross)}}">{{ $applicant->cac_for_fixed_gross }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_cac_for_fixed_gross}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_cac_for_fixed_gross">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
         <tr class="text-center">
        <td class="text-center">35</td>
        <th class="text-center">Affidavit</th>
        <th class="text-center fill"><a download href="{{url('assets/'. $applicant->affidavit)}}">{{ $applicant->affidavit }}</a></th>
        <th class="text-center fill">{{$applicant->updated_at}}</th>
        <th class="text-center fill">{{$remarkapp->remark_affidavit}}</th>
        <th class="text-center fill">{{$remarkapp->updated_at}}</th>
        <form action="javascript:void(0)" method="post" class="update_ca" enctype="multipart/form-data">
        {{ csrf_field() }}
        <td><input class="form-control fw-normal mb-1" type="text" name="remark_ca" id="remark_ca">
            <input type="hidden" name="remark_ca_field" value="ca_remark_affidavit">
            <input type="hidden" name="applicant_id" id="applicant_id" value="{{$applicant->id}}">
        </td>
        <td><button class="btn btn-primary" name="upload1" id="upload1" type="submit">Update</button></td>
        </form>
        </tr>
        <!-- <p class="btn btn-outline-danger">No record found, Please enter valid input!</p> -->
        </tbody>

        <script type="text/javascript">
          $(document).ready(function (e) {
          $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
          });
          $('.update_ca').submit(function(e) {
          //alert(23);
          e.preventDefault();
          var formData = new FormData(this);
          $.ajax({
          type:'post',
          url: "{{ url('ca/{ca}')}}",
          data: formData,
          cache:false,
          contentType: false,
          processData: false,
          success: (data) => {
          //this.reset();
          alert('Your comment has been updated successfully');
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
@endsection
 