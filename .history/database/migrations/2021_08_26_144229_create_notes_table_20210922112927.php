<?php

use App\Models\Eleve;
use App\Models\ClasseMatiere;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id('idNote');
            $table->unsignedDouble('note1', 4, 2)->nullable()->default('00.00');
            $table->unsignedDouble('note2', 4, 2)->nullable()->default('00.00');
            $table->unsignedDouble('note3', 4, 2)->nullable()->default('00.00');

            $table->char('activeNote', 1)->default('t');
            $table->timestamps();



            $table->foreignId('idEleve')->constrained();
            $table->foreignId('id')->constrained();

            $table->unique(['idEleve', 'id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
