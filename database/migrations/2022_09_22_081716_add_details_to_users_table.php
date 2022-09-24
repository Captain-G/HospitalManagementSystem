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
        Schema::table('users', function (Blueprint $table) {
            $table->string('passportPhoto')->nullable();
            $table->string('nationality')->nullable();
            $table->integer('phoneNumber')->nullable();
            $table->string('position')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('passportPhoto');
            $table->dropColumn('nationality');
            $table->dropColumn('phoneNumber');
            $table->dropColumn('position');
        });
    }
};
