<?php

use App\Models\Eleve;
use App\Models\Relative;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_eleves', function (Blueprint $table) {
            $table->id('idRelationEleve');
            $table->String('descRelationEleve');
            $table->char('activeRelationEleve')->default('t');
            $table->timestamps();




            $table->foreignId('idRelative')->constrained();
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
        Schema::dropIfExists('relation_eleves');
    }
}
