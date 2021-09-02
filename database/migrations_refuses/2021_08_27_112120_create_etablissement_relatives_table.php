<?php

use App\Models\Etablissement;
use App\Models\Relative;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement_relative', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idEtablisssement')->constrained()->onDelete('cascade');
            $table->foreignId('idRelative')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('etablissement_relatives');
    }
}
