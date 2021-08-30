<?php

use App\Models\Profil;
use App\Models\SuperAdmin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id('id Etablissement');
            $table->string('nomEtablissement');
            $table->string('username')->unique();
            $table->string('codeEtablissement');
            $table->string('userName')->unique();
            $table->string('password');
            $table->string('adresseEtablissement');
            $table->string('telephoneEtablissement');
            $table->char('activeEtablissement', 1);
            $table->timestamps();



            $table->foreignId('idProfil')->constrained();
            $table->foreignId('idSuperAdmin')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissements');
    }
}
