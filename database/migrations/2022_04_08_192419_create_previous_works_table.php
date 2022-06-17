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
        Schema::create('previous_works', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');

            $table->date('date');
            $table->string('describe');
            $table->string('project_url')->nullable();
            $table->tinyInteger('is_active')->default(1);

            $table->timestamps();
            $table->unsignedBigInteger('user_id');
           
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('previous_works');
    }
};
