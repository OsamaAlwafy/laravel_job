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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->tinyInteger('is_complete')->default(0);// هل الوظيفة قد تم ارتبط فية شخص او لا
            $table->tinyInteger('is_active')->default(1);// هل نظهر هذه الوظيفو او لا 

          
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');

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
        Schema::dropIfExists('jobs');
    }
};
