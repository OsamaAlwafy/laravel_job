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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name_com');
            $table->string('logo');
            $table->string('location');
            $table->string('url');
            $table->string('city');
            $table->string('country');

            $table->string('phone');
            $table->string('email');


            $table->tinyInteger('is_active')->default(0);
            $table->string('type');
            
           

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
        Schema::dropIfExists('companies');
    }
};
