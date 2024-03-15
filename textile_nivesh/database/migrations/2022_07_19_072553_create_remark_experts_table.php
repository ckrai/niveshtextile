<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemarkExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remark_experts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('applicant_id');
            $table->string('expert_remark_n_applicant');
            $table->string('expert_remark_constitution');
            $table->string('expert_remark_textile_industry');
            $table->string('expert_remark_nature_of_textile');
            $table->string('expert_expert_remark_proposed_capital');
            $table->string('expert_remark_p_side_address');
            $table->string('expert_remark_gstin');
            $table->string('expert_remark_estab_copy_undertaking');
            $table->string('expert_remark_date_from_capital_invest');
            $table->string('expert_remark_whether_capital_invest');
            $table->string('expert_remark_total_amount');
            $table->string('expert_remark_details_applied_financial');
            $table->string('expert_remark_exemption_stamp_duty');
            $table->string('expert_remark_exemption_state_tax');
            $table->string('expert_remark_additional_reimbursement');
            $table->string('expert_remark_capital_subsidy');
            $table->string('expert_remark_intrest_subsidy');
            $table->string('expert_remark_additional_intrest_subsidy');
            $table->string('expert_remark_margin_money_grant');
            $table->string('expert_remark_additional_5_per_margin');
            $table->string('expert_remark_infra_intrest_subsidy');
            $table->string('expert_remark_additional_per_infra');
            $table->string('expert_remark_additional_25_per_working');
            $table->string('expert_remark_epf_reimbursement');
            $table->string('expert_remark_additional_epf_reimbursement');
            $table->string('expert_remark_reimbursement_of_freight');
            $table->string('expert_remark_gap_filling_grant');
            $table->string('expert_remark_exemption_from_electricity');
            $table->string('expert_remark_exemption_from_mandi');
            $table->string('expert_remark_acknowledgment_of_uam');
            $table->string('expert_remark_audited_accounts_unit');
            $table->string('expert_remark_dpr');
            $table->string('expert_remark_cac_for_existing_gross');
            $table->string('expert_remark_cac_for_fixed_gross');
            $table->string('expert_remark_affidavit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remark_experts');
    }
}
