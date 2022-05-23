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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("tittle",255);
            $table->string("slug",255);
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('city');
            $table->timestamps();
            $table->foreignId("category_id")->constrained()->onDelete("cascade");
            
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
