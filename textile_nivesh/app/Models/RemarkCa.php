<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemarkCa extends Model
{
    use HasFactory;

     protected $fillable = [

      'user_id', 'applicant_id', 'ca_remark_n_applicant', 'ca_remark_constitution', 'ca_remark_textile_industry', 'ca_remark_nature_of_textile', 'ca_remark_proposed_capital', 'ca_remark_p_side_address','ca_remark_gstin', 'ca_remark_estab_copy_undertaking', 'ca_remark_date_from_capital_invest', 'ca_remark_whether_capital_invest', 'ca_remark_total_amount', 'ca_remark_details_applied_financial', 'ca_remark_exemption_stamp_duty', 'ca_remark_exemption_state_tax',
      'ca_remark_additional_reimbursement', 'ca_remark_capital_subsidy', 'ca_remark_intrest_subsidy', 'ca_remark_additional_intrest_subsidy', 'ca_remark_margin_money_grant', 'ca_remark_additional_5_per_margin', 'ca_remark_infra_intrest_subsidy', 'ca_remark_additional_per_infra', 'ca_remark_additional_25_per_working', 'ca_remark_epf_reimbursement', 'ca_remark_additional_epf_reimbursement', 'ca_remark_reimbursement_of_freight', 'ca_remark_gap_filling_grant', 'ca_remark_exemption_from_electricity', 'remark_exemption_from_mandi', 'ca_remark_acknowledgment_of_uam', 'ca_remark_audited_accounts_unit', 'ca_remark_dpr', 'ca_remark_cac_for_existing_gross', 'ca_remark_cac_for_fixed_gross', 'ca_remark_affidavit'
    ];
}
