<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGivenBoolToTalkSubmissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('talk_submissions', function($table) {
            $table->boolean('given')->after('abstract')->default(false);
            $table->date('date_given')->after('given')->default(date("2010-06-01"));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('talk_submissions', function($table) {
            $table->dropColumn('given');
            $table->dropcolumn('date_given');
        });
    }
}
