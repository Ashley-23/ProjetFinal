<?php

use App\Models\Eleve;
use App\Models\Enseignement;
use App\Models\EpreuveMatiereNote;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoEleveEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_eleve_enseignements', function (Blueprint $table) {
            $table->id('idInfoEleveEnseignement');
            $table->string('descInfoEleveEnseignement');
            $table->char('activeInfoEleveEnseignement')->default('t');
            $table->timestamps();

            $table->foreignId('idEpreuveMatiereNote')->constrained();
            $table->foreignId('idEnseignement')->constrained();
            $table->foreignId('idEleve')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_eleve_enseignements');
    }
}
