<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('n_applicant');
            $table->string('constitution');
            $table->string('textile_industry');
            $table->string('nature_of_textile');
            $table->string('proposed_capital');
            $table->string('p_side_address');
            $table->string('gstin');
            $table->string('estab_copy_undertaking');
            $table->string('date_from_capital_invest');
            $table->string('whether_capital_invest');
            $table->string('total_amount');
            $table->string('details_applied_financial');
            $table->string('exemption_stamp_duty');
            $table->string('exemption_state_tax');
            $table->string('additional_reimbursement');
            $table->string('capital_subsidy');
            $table->string('intrest_subsidy');
            $table->string('additional_intrest_subsidy');
            $table->string('margin_money_grant');
            $table->string('additional_5_per_margin');
            $table->string('infra_intrest_subsidy');
            $table->string('additional_per_infra');
            $table->string('additional_25_per_working');
            $table->string('epf_reimbursement');
            $table->string('additional_epf_reimbursement');
            $table->string('reimbursement_of_freight');
            $table->string('gap_filling_grant');
            $table->string('exemption_from_electricity');
            $table->string('exemption_from_mandi');
            $table->string('acknowledgment_of_uam');
            $table->string('audited_accounts_unit');
            $table->string('dpr');
            $table->string('cac_for_existing_gross');
            $table->string('cac_for_fixed_gross');
            $table->string('affidavit');
            $table->string('ca_log');
            $table->string('expert_log');
            $table->string('status_log');
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
        Schema::dropIfExists('applicants');
    }
}
