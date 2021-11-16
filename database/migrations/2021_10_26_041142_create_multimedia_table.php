<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Multimedia;


class CreateMultimediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia', function (Blueprint $table) {
            $table->id();


     
            $table->string('image');
            $table->string('label');
            $table->string('rgbcolor');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->enum('media_type', [Multimedia::TYPE_FOTO,Multimedia::TYPE_COLOR,Multimedia::TYPE_SESION_FOTO] )->default(Multimedia::TYPE_FOTO);

            $table->smallInteger('position')->default(1);

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
        Schema::dropIfExists('multimedia');
    }
}
