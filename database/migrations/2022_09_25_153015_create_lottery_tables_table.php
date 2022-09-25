<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_tables', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->text('raja_rani')->nullable();
            $table->text('main_star')->nullable();
            $table->text('super_fast')->nullable();
            $table->text('chetak_fast')->nullable();
            $table->text('sangam_fast')->nullable();
            $table->text('rajshri_special')->nullable();
            $table->text('raj_rani')->nullable();
            $table->text('gold')->nullable();
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
        Schema::dropIfExists('lottery_tables');
    }
};
