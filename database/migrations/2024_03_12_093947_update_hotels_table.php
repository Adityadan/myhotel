<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->string('name');
            $table->string('address');
            $table->string('postcode');
            $table->string('city');
            $table->string('state');
            $table->unsignedBigInteger('country_id');
            $table->string('longitude', 8, 3)->nullable();
            $table->string('latitude', 8, 3)->nullable();
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('currency')->nullable();
            $table->string('accommodation_type')->nullable();
            $table->string('category')->nullable();
            $table->string('web')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn([
                'name',
                'address',
                'postcode',
                'city',
                'state',
                'country_id',
                'longitude',
                'latitude',
                'phone',
                'fax',
                'email',
                'currency',
                'accommodation_type',
                'category',
                'web'
            ]);
        });

    }
};
