<?php

use App\Models\Profil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_admins', function (Blueprint $table) {
            $table->id('idSuperAdmin');
            $table->string('nomSuperAdmin');
            $table->string('prenomSuperAdmin');
            $table->string('login')->unique();
            $table->date('dateNaissSuperAdmin');
            $table->char('sexeSuperAdmin', 1);
            $table->string('emailSuperAdmin')->unique();
            $table->string('passwordSuperAdmin');
            $table->string('telephoneSuperAdmin');
            $table->string('PhotoSuperAdmin')->default('photoSuperAdmin.jpg');
            $table->String('adresseSuperAdmin');
            $table->char('activeSuperAdmin', 1);
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
        Schema::dropIfExists('super_admins');
    }
}
