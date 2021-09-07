<?php

use App\Models\Eleve;
use App\Models\MatiereMoyene;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletins', function (Blueprint $table) {
            $table->id('idBulletin');
            $table->date('dateBulletin');
            $table->String('AuthentifieBulletin');
            $table->char('activeBulltin')->default('t');
            $table->timestamps();



            $table->foreignId('idMatiereMoyenne')->constrained();
            $table->foreignId('idEleve')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulletins');
    }
}
