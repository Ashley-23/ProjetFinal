<?php

use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Professeur;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasseMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_matieres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idClasse');
            $table->unsignedBigInteger('idMatiere');
            $table->unsignedBigInteger('idProfesseur');
            $table->char('active', 1)->default('t');
            $table->unique(['idClasse', 'idMatiere']);

            $table->timestamps();

            $table->foreign('idClasse')->references('id')->on('Classe')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('idMatiere')->references('id')->on('Matiere')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('idProfesseur')->references('id')->on('Professeur');




            // $table->primary(['idClasse', 'idMatiere', 'user_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classe_matieres');
    }
}
