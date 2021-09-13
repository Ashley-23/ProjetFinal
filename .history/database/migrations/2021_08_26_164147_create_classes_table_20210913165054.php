<?php

use App\Models\Eleve;
use App\Models\
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id('idClasse');
            $table->String('nomClasse', 50);
            $table->string('typeClasse', 50);
            $table->char('activeClasse', 1)->default('t');
            $table->unique(['nomClasse', 'typeClasse']);
            $table->timestamps();




            $table->foreignId('idEleve')->constrained();
            $table->foreignId('idProfesseur')->constrained();
            $table->foreignId('id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
