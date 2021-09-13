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
            $table->date('dateNote');
            $table->unsignedDouble('Note1', 4, 2);
            $table->unsignedDouble('Note2', 4, 2);
            $table->unsignedDouble('Note3', 4, 2);
            $table->integer('coefNote');
            $table->integer('rangNote');
            $table->char('activeNote', 1)->default('t');
            $table->timestamps();



            $table->foreignId('idEleve')->constrained();
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
        Schema::dropIfExists('notes');
    }
}
