<?php

use App\Models\Profil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatives', function (Blueprint $table) {
            $table->id('idRelative');
            $table->string('nomRelative');
            $table->string('prenomRelative');
            $table->string('login')->unique();
            $table->date('dateNaissRelative');
            $table->char('sexeRelative', 1);
            $table->string('emailRelative')->unique();
            $table->string('passwordRelative');
            $table->string('telephoneRelative')->unique();
            $table->string('PhotoRelative')->default('photoRelative.jpg');
            $table->String('adresseRelative');
            $table->char('activeRelative', 1)->default('t');
            $table->timestamps();



            $table->foreignId('idProfil')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatives');
    }
}
