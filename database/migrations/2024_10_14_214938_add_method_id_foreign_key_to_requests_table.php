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
    Schema::table('requests', function (Blueprint $table) {
      $table->unsignedBigInteger('method_id')->after('title');

      $table->foreign('method_id')
        ->references('id')
        ->on("methods");
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('requests', function (Blueprint $table) {
      $table->dropForeign(['method_id']);
      $table->dropColumn('method_id');
    });
  }
};
