<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_active')->default(false);
            $table->string('type_client')->nullable();
            $table->string('nom_societe')->nullable();
            $table->string('type_societe')->nullable();
            $table->string('reference')->nullable();
            $table->string('ice')->nullable();
            $table->string('cin')->nullable();
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
            $table->dropColumn('is_active');
            $table->dropColumn('is_admin');
            $table->dropColumn('type_client');
            $table->dropColumn('nom_societe');
            $table->dropColumn('type_societe');
            $table->dropColumn('reference');
            $table->dropColumn('ice');
            $table->dropColumn('cin');
        });
    }
}
