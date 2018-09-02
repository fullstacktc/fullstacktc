<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LinkToMeetupNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('talk_submissions', function($table) {
            $table->text('notes')->after('video_url')->default(null);
        });

        Schema::table('users', function($table) {
            $table->string('username', 100)->after('name')->default(null);
            $table->text('bio')->after('username')->default(null);
            $table->string('avatar')->after('username')->default('/img/user/default-avatar.png');
            $table->index('username');
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
            $table->dropColumn('notes');
        });

        Schema::table('users', function($table) {
            $table->dropColumn('username');
            $table->dropColumn('bio');
        });
    }
}
