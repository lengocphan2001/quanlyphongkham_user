<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimezoneToAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(config('admin.database.users_table'), function (Blueprint $table) {
            $table->string('timezone')->default('Asia/Ho_Chi_Minh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(config('admin.database.users_table'), function (Blueprint $table) {
            $table->dropColumn('timezone');
        });
    }
}
