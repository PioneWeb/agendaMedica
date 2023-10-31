<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nome')->nullable();
            $table->string('cognome')->nullable();
            $table->string('indirizzo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('cellulare')->nullable();
            $table->string('ragione_sociale')->nullable();
            $table->string('p_iva')->nullable();
            $table->string('c_fiscale')->nullable();
            $table->string('banca')->nullable();
            $table->string('iban')->nullable();
            $table->string('codice_destinatario')->nullable();
            $table->string('email_pec')->nullable();
            $table->string('azienda')->nullable();
            $table->string('codice')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'nome',
                'cognome',
                'indirizzo',
                'telefono',
                'cellulare',
                'ragione_sociale',
                'p_iva',
                'c_fiscale',
                'banca', 'iban',
                'codice_destinatario',
                'email_pec',
                'azienda',
                'codice',
            ]);
        });
    }
};
