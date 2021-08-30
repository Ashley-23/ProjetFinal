<?php

use App\Models\Bulletin;
use App\Models\Profil;
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
            $table->string('username')->unique();
            $table->date('dateNaissEleve');
            $table->char('sexeEleve', 1);
            $table->string('emailEleve')->unique();
            $table->string('passwordEleve');
            $table->string('telephoneEleve');
            $table->string('PhotoEleve')->default('photoEleve.jpg');
            $table->String('adresseEleve');
            $table->char('activeEleve', 1);
            $table->timestamps();


            $table->foreignId('idProfil')->constrained();
            $table->foreignId('idBulletin')->constrained();
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
