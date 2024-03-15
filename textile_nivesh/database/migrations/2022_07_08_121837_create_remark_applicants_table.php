<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemarkApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remark_applicants', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('remark_n_applicant');
            $table->string('remark_constitution');
            $table->string('remark_textile_industry');
            $table->string('remark_nature_of_textile');
            $table->string('remark_proposed_capital');
            $table->string('remark_p_side_address');
            $table->string('remark_gstin');
            $table->string('remark_estab_copy_undertaking');
            $table->string('remark_date_from_capital_invest');
            $table->string('remark_whether_capital_invest');
            $table->string('remark_total_amount');
            $table->string('remark_details_applied_financial');
            $table->string('remark_exemption_stamp_duty');
            $table->string('remark_exemption_state_tax');
            $table->string('remark_additional_reimbursement');
            $table->string('remark_capital_subsidy');
            $table->string('remark_intrest_subsidy');
            $table->string('remark_additional_intrest_subsidy');
            $table->string('remark_margin_money_grant');
            $table->string('remark_additional_5_per_margin');
            $table->string('remark_infra_intrest_subsidy');
            $table->string('remark_additional_per_infra');
            $table->string('remark_additional_25_per_working');
            $table->string('remark_epf_reimbursement');
            $table->string('remark_additional_epf_reimbursement');
            $table->string('remark_reimbursement_of_freight');
            $table->string('remark_gap_filling_grant');
            $table->string('remark_exemption_from_electricity');
            $table->string('remark_exemption_from_mandi');
            $table->string('remark_acknowledgment_of_uam');
            $table->string('remark_audited_accounts_unit');
            $table->string('remark_dpr');
            $table->string('remark_cac_for_existing_gross');
            $table->string('remark_cac_for_fixed_gross');
            $table->string('remark_affidavit');
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
        Schema::dropIfExists('remark_applicants');
    }
}
