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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Job_title');
            $table->string('salary');
            $table->string('branch');
            $table->tinyInteger('time_type');// نوع الدوام جزئي او دوام كامل
            $table->tinyInteger('freelancer');// هل الوظيفة freelancer
            $table->string('skill'); // المهارات المطلوبة لهذه الوظيفة
            $table->string('duration_experience');// الخبرة المطلوبة 



            $table->string('descripe');
            $table->string('W_responsible');
            $table->string('why_w_us');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_details');
    }
};
