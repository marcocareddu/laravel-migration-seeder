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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->smallInteger('train_number');
            $table->string('departure_st');
            $table->string('arrival_st');
            $table->date('dep_hour');
            $table->date('arr_hour');
            $table->tinyInteger('carriages');
            $table->date('delay');
            $table->boolean('deleted')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
