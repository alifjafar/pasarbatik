<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        \App\Models\Category::insert([
            [
                'name' => 'Pria',
                'slug' => 'pria',
            ],
            [
                'name' => 'Wanita',
                'slug' => 'wanita'
            ],
            [
                'name' => 'Aksesoris Batik',
                'slug' => 'accesories'
            ],
            [
                'name' => 'Anak',
                'slug' => 'anak'
            ],
            [
                'name' => 'Kain Batik',
                'slug' => 'kain-batik'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
