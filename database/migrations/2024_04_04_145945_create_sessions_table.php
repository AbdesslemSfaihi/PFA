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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('startingDate', 50);
            $table->float('initialPrice');
            $table->integer('discount');
            $table->float('priceWD');
            $table->unsignedBigInteger("trainingcourse_id");
            $table->foreign('trainingcourse_id')
                ->references('id')
                ->on('trainingcourses')
                ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
