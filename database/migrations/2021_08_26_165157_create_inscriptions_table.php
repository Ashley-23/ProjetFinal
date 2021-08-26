<?php

use App\Models\AnneeScolaire;
use App\Models\Classe;
use App\Models\EpreuveMatiereNote;
use App\Models\FraisScolaire;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id('idInscription');
            $table->string('descInscription');
            $table->char('activeInscription', 1);
            $table->timestamps();



            $table->foreignId('idAnneeScolaire')->constrained();
            $table->foreignId('idEpreuveMatiereNote')->constrained();
            $table->foreignId('idClasse')->constrained();
            $table->foreignId('idFraisScolaire')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
