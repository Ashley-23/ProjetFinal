<?php

use App\Models\Classe;
use App\Models\EpreuveMatiereNote;
use App\Models\Professeur;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignements', function (Blueprint $table) {
            $table->id('idEnseignement');
            $table->string('descEnseignement');
            $table->char('activeEnseignement');
            $table->timestamps();


            $table->foreignId('idClasse')->constrained();
            $table->foreignId('idEpreuveMatiereNote')->constrained();
            $table->foreignId('idProfesseur')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignements');
    }
}
