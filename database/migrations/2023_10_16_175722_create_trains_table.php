<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_di_partenza', 100);
            $table->string('stazione_di_arrivo', 100);
            $table->dateTime('orario_di_partenza', $precision = 0);
            $table->dateTime('orario_di_arrivo', $precision = 0);
            $table->float('Codice_Treno', 8, 0);
            $table->float('Numero_Carrozze', 2, 0);
            $table->enum('In_orario', ['in orario', 'in ritardo']);
            $table->enum('Cancellato', ['Cancellato', 'Non cancellato']);
            $table->timestamps();

            /**
             * O= in orario,
             * C= cancellato.
             * ho usato il char con le iniziali per risparmiare caratteri 
             * 
            **/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
