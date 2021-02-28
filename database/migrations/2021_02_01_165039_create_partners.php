<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('volunteers_max_score');
            $table->string('siret')->nullable();
            $table->string('naf')->nullable();
            $table->string('confirmation_token')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact');
            $table->string('address');
            $table->string('address_details')->nullable();
            $table->string('zip');
            $table->string('city');
            $table->string('dashboard_view_name');
            $table->decimal('longitude')->nullable();
            $table->decimal('latitude')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('partners');
    }
}
