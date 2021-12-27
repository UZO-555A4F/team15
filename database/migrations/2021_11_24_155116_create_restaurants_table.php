<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->string('name',191)->comment('名稱');
            $table->string('address',191)->comment('地址');
            $table->foreignId('gid')->comment('餐點類型')->unsigned();
            $table->foreignId('pid')->comment('價格等級')->unsigned();
            $table->char('telephone',10)->comment('電話')->nullable();
            $table->timestamps();
            $table->foreign('gid')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('pid')->references('id')->on('price_levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
