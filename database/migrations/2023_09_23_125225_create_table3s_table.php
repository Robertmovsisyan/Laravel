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
        Schema::create('table3s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('table1_id');
            $table->unsignedBigInteger('table2_id');
            $table->index('table1_id','table1_id_inx');
            $table->index('table2_id','table2_id_inx');
            $table->foreign('table1_id','table1_id_fx')->on('table1s')->references('id');
            $table->foreign('table2_id','table2_id_fx')->on('table2s')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table3s');
    }
};
