<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Kategoriak;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoriaks', function (Blueprint $table) {
            $table->id();
            $table->string("nev")->unique();
            $table->timestamps();
        });

        Kategoriak::create(['nev' => "Ház"]);
        Kategoriak::create(['nev' => "Lakás"]);
        Kategoriak::create(['nev' => "Építési telek"]);
        Kategoriak::create(['nev' => "Garázs"]);
        Kategoriak::create(['nev' => "Mezőgazdasági terület"]);
        Kategoriak::create(['nev' => "Ipari ingatlan"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoriaks');
    }
};
