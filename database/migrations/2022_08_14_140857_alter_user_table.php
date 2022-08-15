<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('document_type', 20)->nullable()->after('password');
            $table->string('document_number', 50)->nullable()->after('document_type');
            $table->string('province_code',5)->nullable()->after('document_number');
            $table->string('condition', 3)->nullable()->after('province_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropcolumn(['document_type']);
            $table->dropcolumn(['document_number']);
            $table->dropColumn(['province_code']);
            $table->dropColumn(['condition']);
        });
    }
}
