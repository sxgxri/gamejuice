<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_arttags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('arttag_id');

            $table->timestamps();

            $table->index('article_id', 'article_arttag_article_idx');
            $table->index('arttag_id', 'article_arttag_arttag_idx');
            $table->foreign('article_id', 'article_arttag_article_fk')->on('articles')->references('id');
            $table->foreign('arttag_id', 'article_arttag_arttag_fk')->on('arttags')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_arttags');
    }
};
