<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignaturesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signatures', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('image');
            $table->string('name');
            $table->string('jobtitle');
            $table->string('email');
            $table->string('phone');
            $table->string('company');
            $table->string('website');
            $table->string('officephone');
            $table->string('fax');
            $table->string('address');
            $table->string('address2');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('skype');
            $table->string('googleplus');
            $table->string('linkedin');
            $table->string('instagram');
            $table->string('flickr');
            $table->string('stackoverflow');
            $table->string('github');
            $table->integer('style')->default(0);
            $table->timestamps();
            $table->timestamp('published_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('signatures');
    }

}
