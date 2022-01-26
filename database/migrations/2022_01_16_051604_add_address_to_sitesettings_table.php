<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressToSitesettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sitesettings', function (Blueprint $table) {
            $table->string('email', 30)->nullable()->after('site_description');
            $table->string('address')->nullable()->after('email');
            $table->string('city')->nullable()->after('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sitesettings', function (Blueprint $table) {
            //
        });
    }
}
