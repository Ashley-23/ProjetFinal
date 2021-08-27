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
            $table->date('dateNaissRelative');
            $table->char('sexeRelative', 1);
            $table->string('emailRelative')->unique();
            $table->string('passwordRelative');
            $table->string('telephoneParent');
            $table->string('PhotoRelative')->default('photoRelative.jpg');
            $table->String('adresseRelative');
            $table->char('activeRelative', 1);
            $table->timestamps();



            $table->foreignId('idProfil')->constrained();
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
