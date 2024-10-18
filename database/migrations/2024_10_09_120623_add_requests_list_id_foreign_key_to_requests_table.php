<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->unsignedBigInteger('requests_list_id')->after('id')->nullable(); // Aggiungi la colonna

            // Aggiungi la chiave esterna
            $table->foreign('requests_list_id')
                ->references('id')
                ->on('requests_lists')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->dropForeign(['requests_list_id']); // Rimuovi la chiave esterna
            $table->dropColumn('requests_list_id'); // Rimuovi la colonna
        });
    }
};
