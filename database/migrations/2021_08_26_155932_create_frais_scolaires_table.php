<?php

use App\Models\Inscription;
use App\Models\Relative;
use App\Models\TypeFrais;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPSTORM_META\type;

class CreateFraisScolairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frais_scolaires', function (Blueprint $table) {
            $table->id('idFraisScolaire');
            $table->date('dateFraisScolaire');
            $table->unsignedDouble('montantFraiscolaire', 12, 2);
            $table->unsignedDouble('soldeFraisScolaire', 12, 2);
            $table->char('activeFraisScolaire', 1);
            $table->timestamps();


            $table->foreignId('idTypeFrais')->constrained();
            $table->foreignId('idInscription')->constrained();
            $table->foreignId('idRelative')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frais_scolaires');
    }
}
