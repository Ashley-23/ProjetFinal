<?php

use App\Models\Epreuve;
use App\Models\Matiere;
use App\Models\Note;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpreuveMatiereNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epreuve_matiere_notes', function (Blueprint $table) {
            $table->id('idEpreuveMatiereNote');
            $table->string('descEpreuveMatiereNote');
            $table->char('activeEpreuveMatiereNote', 1)->default('t');
            $table->timestamps();


            $table->foreignId('idEpreuve')->constrained();
            $table->foreignId('idMatiere')->constrained();
            $table->foreignId('idNote')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epreuve_matiere_notes');
    }
}
