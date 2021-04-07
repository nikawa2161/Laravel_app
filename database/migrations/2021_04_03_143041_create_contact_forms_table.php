<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            //氏名、メールアドレス、URL、性別、年齢、、お問い合わせ内容
            //文字長を指定したVARCHARカラム
            $table->string('your_name', 20);
            $table->string('email', 255);
            //LONGTEXTカラム アクセス修飾子でNULLでもOKに
            $table->longText('url')->nullable($value = true);
            $table->boolean('gender');
            $table->tinyInteger('age');
            $table->string('contact', 200);
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
        Schema::dropIfExists('contact_forms');
    }
}
