<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;

class Applicant extends Model
{
    use HasFactory;

     protected $fillable = [

      'user_id', 'n_applicant', 'constitution', 'textile_industry', 'nature_of_textile', 'proposed_capital', 'p_side_address','gstin', 'estab_copy_undertaking', 'date_from_capital_invest', 'whether_capital_invest', 'total_amount', 'details_applied_financial', 'exemption_stamp_duty', 'exemption_state_tax', 'additional_reimbursement', 'capital_subsidy', 'intrest_subsidy', 'additional_intrest_subsidy', 'margin_money_grant', 'additional_5_per_margin', 'infra_intrest_subsidy', 'additional_per_infra', 'additional_25_per_working', 'epf_reimbursement', 'additional_epf_reimbursement', 'reimbursement_of_freight', 'gap_filling_grant', 'exemption_from_electricity', 'exemption_from_mandi', 'acknowledgment_of_uam', 'audited_accounts_unit', 'dpr', 'cac_for_existing_gross', 'cac_for_fixed_gross', 'affidavit', 'ca_log', 'expert_log', 'status_log'
    ];

     public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "chandan.rai@ufsdigital.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
