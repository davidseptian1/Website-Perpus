<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// database/migrations/2023_08_07_000001_add_activity_type_to_user_activities.php


class AddActivityTypeToUserActivities extends Migration
{
    public function up()
    {
        Schema::table('user_activities', function (Blueprint $table) {
            $table->string('activity_type');
        });
    }

    public function down()
    {
        Schema::table('user_activities', function (Blueprint $table) {
            $table->dropColumn('activity_type');
        });
    }
}
