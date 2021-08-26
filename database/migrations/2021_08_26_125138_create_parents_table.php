<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id('idParent');
            $table->string('nomParent');
            $table->string('prenomParent');
            $table->date('dateNaissParent');
            $table->char('sexeParent', 1);
            $table->string('emailParent')->unique();
            $table->string('passwordParent');
            $table->string('telephoneParent');
            $table->string('PhotoParent')->default('photoParent.jpg');
            $table->String('adresseParent');
            $table->char('activeParent', 1);
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
        Schema::dropIfExists('parents');
    }
}
