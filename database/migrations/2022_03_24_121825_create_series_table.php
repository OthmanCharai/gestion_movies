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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('content');
            $table->text('url');
            $table->text('tags');
            $table->text('status');
            $table->foreignId('acteur_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::table('series',function(Blueprint $table){
            $table->dropForeign('series_user_id_foreign');
            $table->dropForeign('series_acteur_id_foreign');

        });
        Schema::dropIfExists('series');
    }
};
