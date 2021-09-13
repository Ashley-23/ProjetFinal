<?php

use App\Models\Classe;
use App\Models\Matiere;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->timestamps();

            $table->foreign('idClasse')->references('id')->on('Classe')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('idMatiere')->references('id')->on('Matiere')
                ->onUpdate('cascade')->onDelete('cascade');


            $table->unsignedBigInteger('idClasse');
            $table->unsignedBigInteger('idMatiere');


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
