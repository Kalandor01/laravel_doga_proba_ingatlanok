<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Date;
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
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId("kategoria")->references("id")->on("kategoriaks");
            $table->string("leiras")->nullable();
            $table->date("hirdetesDatuma")->nullable()->default(Date::now());
            $table->boolean("tehermentes");
            $table->integer("ar");
            $table->string("kepUrl")->nullable();
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
        Schema::dropIfExists('ingatlanoks');
    }
};
