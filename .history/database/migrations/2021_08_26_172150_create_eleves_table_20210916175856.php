<?php

use App\Models\Bulletin;
use App\Models\Profil;
use App\Models\Relative;
use App\Models\Classe;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->id('idEleve');
            $table->string('nomEleve');
            $table->string('prenomEleve');
            $table->string('login')->unique();
            $table->date('dateNaissEleve');
            $table->char('sexeEleve', 1);
            $table->string('emailEleve')->unique();
            $table->string('passwordEleve');
            $table->string('telephoneEleve')-;
            $table->string('PhotoEleve')->default('photoEleve.jpg');
            $table->String('adresseEleve');
            $table->char('activeEleve', 1)->default('t');
            $table->timestamps();

            $table->foreignId('idRelative')->nullable()->constrained();
            $table->foreignId('idClasse')->constrained();
            $table->foreignId('idProfil')->nullable()->constrained();
            $table->foreignId('idBulletin')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}
