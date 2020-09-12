<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('re_office_address');
            $table->string('type');
            $table->string('vanue_address');
            $table->string('municiplitay_province');
            $table->string('municiplitay_province_room');
            $table->string('name_surname');
            $table->string('tel_number');
            $table->string('email');
            $table->string('vat')->nullable();
            $table->string('unique_code')->nullable();
            $table->string('number_of_table');
            $table->text('message')->nullable();
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
        Schema::dropIfExists('clubs');
    }
}
