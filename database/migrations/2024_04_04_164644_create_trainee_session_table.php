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
        Schema::create('trainee_session', function (Blueprint $table) {
            $table->bigInteger('trainee_id')->unsigned();
            $table->bigInteger('session_id')->unsigned();
            $table->primary(['trainee_id', 'session_id']);
            $table->foreign('trainee_id')->references('id')->on('trainees');
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->integer('paymentDate');
            $table->integer('paidAmount');
            $table->integer('paymentStatus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainee_session');
    }
};
