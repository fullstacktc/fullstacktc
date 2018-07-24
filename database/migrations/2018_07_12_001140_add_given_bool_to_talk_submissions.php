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
            $table->integer('user_id')->unsigned()->nullable()->after('date_given');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->text('abstract')->change();
            $table->text('video_url')->after('user_id');
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
            $table->dropForeign('talk_submissions_user_id_foreign');
            $table->dropColumn('video_url');
        });
    }
}
