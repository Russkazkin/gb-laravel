<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->string('title')->comment('News title');
            $table->text('content')->comment('News content');
            $table->string('image')->comment('Image url');
            $table->enum('status', ['DRAFT', 'PUBLISHED', 'BLOCKED'])->default('DRAFT')->comment('News status');
            $table->boolean('is_active')->default(true)->comment('News activity');

            $table->foreignId('user_id')->constrained();

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
        Schema::table('news', function (Blueprint  $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('news');
    }
}
