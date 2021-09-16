<?php

use App\Models\Note;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoyennesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moyennes', function (Blueprint $table) {
            $table->id('idMoyenne');
            $table->unsignedDouble('ValeurMoyenne', 4, 2);
            $table->integer('rangMoyenne');
            $table->char('activeMoyenne')->default('t');
            $table->bigun
            //
            $table->timestamps();


            $table->foreign('idNote')->references('id')->on('Note')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moyennes');
    }
}
