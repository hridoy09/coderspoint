<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectdetails', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('company_name');
            $table->string('website');
            $table->string('address');
            $table->string('project_budget');
            $table->string('date_to_start');
            $table->string('project_type');
            $table->string('service_type');
            $table->string('country');
            $table->string('no_of_pages');
            $table->string('reference_site');
            $table->string('hosting');
            $table->string('domain');
            $table->string('content');
            $table->string('logo');
            $table->text('project_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projectdetails');
    }
}
