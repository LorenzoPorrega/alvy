<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id(); // Colonna id
            $table->string('title');
            // $table->string('method_id');
            $table->string('url');
            $table->text('query_params')->nullable();
            $table->text('headers')->nullable();
            $table->text('body')->nullable();
            $table->timestamps();
            // Nota: non creiamo qui la chiave esterna
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
