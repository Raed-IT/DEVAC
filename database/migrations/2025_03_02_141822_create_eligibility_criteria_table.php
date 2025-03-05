<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
            Schema::create('eligibility_criterion', function (Blueprint $table) {
            $table->id("criterion_id");
            $table->string("criterion_name",100);
            $table->string("criterion_code",50)->unique()->index()                  ;
            $table->text("ineligibility_description");
            $table->boolean("default_eligible")->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eligibility_criterion');
    }
};
