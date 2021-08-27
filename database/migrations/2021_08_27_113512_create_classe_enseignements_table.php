<?php

use App\Models\Classe;
use App\Models\Enseignement;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_enseignement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idClasse')->constrained()->onDelete('cascade');
            $table->foreignId('idEnseignement')->constrained()->onDelete('cascade');

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
        Schema::dropIfExists('classe_enseignements');
    }
}
