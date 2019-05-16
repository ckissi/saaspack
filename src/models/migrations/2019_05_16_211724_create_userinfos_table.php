<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->char('apikey',32)->nullable();

            $table->string('nickname')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('activated')->default(0);

            $table->ipAddress('ip_address')->nullable();
            $table->char('country_code',2)->nullable();

            $table->char('referrer_md5',32)->nullable();
            $table->char('referrer_hash',12)->nullable();
            $table->integer('referred_by')->nullable();
            $table->integer('referred_count')->nullable();

            $table->string('occupation',100)->nullable();
            $table->string('company',100)->nullable();
            $table->string('phone',100)->nullable();

            $table->string('address',100)->nullable();
            $table->string('city',50)->nullable();
            $table->string('state',50)->nullable();
            $table->string('postcode')->nullable();

            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google')->nullable();
            $table->string('instagram')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userinfos');
    }
}
