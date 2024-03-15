<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemarkCasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remark_cas', function (Blueprint $table) {
            $table->id();
             $table->integer('user_id')->nullable();
            $table->integer('applicant_id')->nullable();
            $table->string('ca_remark_n_applicant')->nullable();
            $table->string('ca_remark_constitution')->nullable();
            $table->string('ca_remark_textile_industry')->nullable();
            $table->string('ca_remark_nature_of_textile')->nullable();
            $table->string('ca_remark_proposed_capital')->nullable();
            $table->string('ca_remark_p_side_address')->nullable();
            $table->string('ca_remark_gstin')->nullable();
            $table->string('ca_remark_estab_copy_undertaking')->nullable();
            $table->string('ca_remark_date_from_capital_invest')->nullable();
            $table->string('ca_remark_whether_capital_invest')->nullable();
            $table->string('ca_remark_total_amount')->nullable();
            $table->string('ca_remark_details_applied_financial')->nullable();
            $table->string('ca_remark_exemption_stamp_duty')->nullable();
            $table->string('ca_remark_exemption_state_tax')->nullable();
            $table->string('ca_remark_additional_reimbursement')->nullable();
            $table->string('ca_remark_capital_subsidy')->nullable();
            $table->string('ca_remark_intrest_subsidy')->nullable();
            $table->string('ca_remark_additional_intrest_subsidy')->nullable();
            $table->string('ca_remark_margin_money_grant')->nullable();
            $table->string('ca_remark_additional_5_per_margin')->nullable();
            $table->string('ca_remark_infra_intrest_subsidy')->nullable();
            $table->string('ca_remark_additional_per_infra')->nullable();
            $table->string('ca_remark_additional_25_per_working')->nullable();
            $table->string('ca_remark_epf_reimbursement')->nullable();
            $table->string('ca_remark_additional_epf_reimbursement')->nullable();
            $table->string('ca_remark_reimbursement_of_freight')->nullable();
            $table->string('ca_remark_gap_filling_grant')->nullable();
            $table->string('ca_remark_exemption_from_electricity')->nullable();
            $table->string('ca_remark_exemption_from_mandi')->nullable();
            $table->string('ca_remark_acknowledgment_of_uam')->nullable();
            $table->string('ca_remark_audited_accounts_unit')->nullable();
            $table->string('ca_remark_dpr')->nullable();
            $table->string('ca_remark_cac_for_existing_gross')->nullable();
            $table->string('ca_remark_cac_for_fixed_gross')->nullable();
            $table->string('ca_remark_affidavit')->nullable();
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
        Schema::dropIfExists('remark_cas');
    }
}
