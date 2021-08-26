<?php

use App\Models\Matiere;
use App\Models\Moyenne;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereMoyenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_moyenes', function (Blueprint $table) {
            $table->id('idMatiereMoyenne');
            $table->String('descriptionMatiereMoyenne');
            $table->char('activeMatiereMoyenne');
            $table->timestamps();





            $table->foreignId('idMatiere')->constrained();
            $table->foreignId('idMoyenne')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matiere_moyenes');
    }
}
