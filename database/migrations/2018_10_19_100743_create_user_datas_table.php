<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('last_name')->nullable();
            $table->date('birth_date')->nullable();
            $table->double('experience')->default(0);
            $table->string('phone')->nullable();
            $table->string('site')->nullable();
            $table->longText('about_me')->nullable();
            $table->string('city');
            $table->string('address')->nullable();
            $table->enum('show_orders_distance', ['1', '2', '3', '4', '5'])->default(1);
            $table->double('min_price')->nullable();
            $table->enum('currency', ['rur', 'usd', 'eur'])->default('rur');
            $table->double('price_for_hour');
            $table->enum('currency_h', ['rur', 'usd', 'eur'])->default('rur');
            $table->softDeletes();
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
        Schema::dropIfExists('user_datas');
    }
}
