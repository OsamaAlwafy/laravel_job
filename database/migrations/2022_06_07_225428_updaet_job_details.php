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
       // make details contain job id
       
       Schema::table("job_details",function (Blueprint $table) {
             $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');
           
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
