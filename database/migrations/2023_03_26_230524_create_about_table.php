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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('h_1')->nullable();
            $table->string('h_1_desc')->nullable();
            $table->string('h_2')->nullable();
            $table->string('h_2_desc')->nullable();
            $table->string('h_3')->nullable();
            $table->string('h_3_desc')->nullable();
            $table->string('b_info')->nullable();
            $table->string('b_info_d')->nullable();
            $table->string('b_img')->nullable();
            $table->string('i_img')->nullable();
            $table->string('i_img2')->nullable();
            $table->string('i_img3')->nullable();
            $table->string('i_img4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
