<?php

use App\Models\Profil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id('idProfesseur');
            $table->string('nomProfesseur');
            $table->string('prenomProfesseur');
            $table->string('login')->unique();
            $table->date('dateNaissProfesseur');
            $table->char('sexeProfesseur', 1);
            $table->string('emailProfesseur')->unique();
            $table->string('passwordProfesseur');
            $table->string('telephoneProfesseur');
            $table->string('PhotoProfesseur')->default('photoProfesseur.jpg');
            $table->String('adresseProfesseur');
            $table->char('activeProfesseur', 1)->default('t');
            $table->timestamps();



            $table->foreignId('idProfil')-- > constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professeurs');
    }
}
