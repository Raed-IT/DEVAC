<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id("job_offer_id");
 //            $table->foreignId("career_id")->nullable()->constrained()->nullOnDelete();
            $table->string("employer_name",255)->nullable();
            $table->boolean("from_canadian_employer",)->nullable();
            $table->boolean("offer_full_time",)->nullable();
            $table->boolean("offer_non_seasonal",)->nullable();
            $table->boolean("offer_outside_quebec",)->nullable();
            $table->boolean("offer_meets_teer_requirement",)->nullable();
            $table->string("salary_range",100)->nullable();
            $table->integer("contract_duration")->nullable();
            $table->foreignId("eligibility_criterion_id")->index()->nullable()
                ->constrained("eligibility_criterion","criterion_id")->nullOnDelete();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
