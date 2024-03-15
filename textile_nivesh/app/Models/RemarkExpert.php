<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemarkExpert extends Model
{
    use HasFactory;

     protected $fillable = [

      'user_id', 'applicant_id', 'expert_remark_n_applicant', 'expert_remark_constitution', 'expert_remark_textile_industry', 'expert_remark_nature_of_textile', 'expert_remark_proposed_capital', 'expert_remark_p_side_address','expert_remark_gstin', 'expert_remark_estab_copy_undertaking', 'expert_remark_date_from_capital_invest', 'expert_remark_whether_capital_invest', 'expert_remark_total_amount', 'expert_remark_details_applied_financial', 'expert_remark_exemption_stamp_duty', 'expert_remark_exemption_state_tax',
      'expert_remark_additional_reimbursement', 'expert_remark_capital_subsidy', 'expert_remark_intrest_subsidy', 'expert_remark_additional_intrest_subsidy', 'expert_remark_margin_money_grant', 'expert_remark_additional_5_per_margin', 'expert_remark_infra_intrest_subsidy', 'expert_remark_additional_per_infra', 'expert_remark_additional_25_per_working', 'expert_remark_epf_reimbursement', 'expert_remark_additional_epf_reimbursement', 'expert_remark_reimbursement_of_freight', 'expert_remark_gap_filling_grant', 'expert_remark_exemption_from_electricity', 'expert_remark_exemption_from_mandi', 'expert_remark_acknowledgment_of_uam', 'expert_remark_audited_accounts_unit', 'expert_remark_dpr', 'expert_remark_cac_for_existing_gross', 'expert_remark_cac_for_fixed_gross', 'expert_remark_affidavit'
    ];
}
