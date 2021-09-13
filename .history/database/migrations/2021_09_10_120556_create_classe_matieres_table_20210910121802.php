<?php

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

Matiere

            $table->unsignedBigInteger('idClasse');
            $table->unsignedBigInteger('idMatiere');

            $table->foreign('idClasse')->references('id')->on('Classe')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('idClasse')->references('id')->on('Matiere')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['idClasse', 'idMatiere', 'user_type']);
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
