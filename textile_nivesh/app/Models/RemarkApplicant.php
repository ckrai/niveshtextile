<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemarkApplicant extends Model
{
    use HasFactory;

     protected $fillable = [

      'user_id', 'remark_n_applicant', 'remark_constitution', 'remark_textile_industry', 'remark_nature_of_textile', 'remark_proposed_capital', 'remark_p_side_address','remark_gstin', 'remark_estab_copy_undertaking', 'remark_date_from_capital_invest', 'remark_whether_capital_invest', 'remark_total_amount', 'remark_details_applied_financial', 'remark_exemption_stamp_duty', 'remark_exemption_state_tax',
      'remark_additional_reimbursement', 'remark_capital_subsidy', 'remark_intrest_subsidy', 'remark_additional_intrest_subsidy', 'remark_margin_money_grant', 'remark_additional_5_per_margin', 'remark_infra_intrest_subsidy', 'remark_additional_per_infra', 'remark_additional_25_per_working', 'remark_epf_reimbursement', 'remark_additional_epf_reimbursement', 'remark_reimbursement_of_freight', 'remark_gap_filling_grant', 'remark_exemption_from_electricity', 'remark_exemption_from_mandi', 'remark_acknowledgment_of_uam', 'remark_audited_accounts_unit', 'remark_dpr', 'remark_cac_for_existing_gross', 'remark_cac_for_fixed_gross', 'remark_affidavit'
    ];
}
