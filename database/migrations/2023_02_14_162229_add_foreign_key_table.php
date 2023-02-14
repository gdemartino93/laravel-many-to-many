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
        Schema::table('products', function (Blueprint $table) {
            $table -> foreignId('typology_id') -> constrained();
        });
        Schema::table('category_product', function (Blueprint $table) {
            $table -> foreignId('category_id') -> constrained();
            $table -> foreignId('product_id') -> constrained();

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table -> dropForeign('products_typology_id_foreign');
            // $table -> dropColumn('typology_id');
        });
        Schema::table('category_product', function (Blueprint $table) {
            $table -> dropForeign('category_product_categories_id_foreign');
            // $table -> dropColumn('category_id');

            $table -> dropForeign('category_product_products_id_foreign');
            // $table -> dropColumn('product_id');

            // $table -> dropForeign('category_product_categories_id_foreign');
            // $table -> dropColumn('categories_id');

            // $table -> dropForeign('category_product_products_id_foreign');
            // $table -> dropColumn('products_id');
        });
        
    }
};