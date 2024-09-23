<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->string('itemnumber');
            $table->string('controlnumber');
            $table->string('partyrepresented');
            $table->string('gender');
            $table->string('casetitle');
            $table->string('court');
            $table->string('casenumber');
            $table->string('causeofaction');
            $table->string('casestatus');
            $table->string('lastactiontaken');
            $table->string('causeoftermination');
            $table->date('casedate');
            $table->string('casetype');
            $table->date('startdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
