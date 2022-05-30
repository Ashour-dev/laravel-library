<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            // $table->engine = "InnoDB";
            // $table->unsignedBigInteger('Author_id');
            $table->foreignId('Author_id')->constrained()->onDelete('set null');
            // ->references('id')->on('Authors')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['Author_id']);
            // $table->dropColumn('Author_id');
        });
    }
}
