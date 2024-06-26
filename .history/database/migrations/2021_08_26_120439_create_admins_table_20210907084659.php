<?php

use App\Models\Etablissement;
use App\Models\Profil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('idAdmin');
            $table->string('nomAdmin');
            $table->string('prenomAdmin');
            $table->string('login')->unique();
            $table->date('dateNaissAdmin');
            $table->char('sexeAdmin', 1);
            $table->string('emailAdmin')->unique();
            $table->string('passwordAdmin');
            $table->string('telephoneAdmin');
            $table->string('PhotoAdmin')->default('photoAdmin.jpg');
            $table->String('adresseAdmin');
            $table->char('activeAdmin', 1)->default('t');
            $table->timestamps();



            $table->foreignId('idProfil')->constrained();
            $table->foreignId('idEtablissement')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
