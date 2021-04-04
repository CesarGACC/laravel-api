<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER newProduct AFTER INSERT ON `product` FOR EACH ROW
            BEGIN
                INSERT INTO history (`name`, `id_product`, `price`, `quantity`, `created_at`) 
                VALUES (NEW.name, NEW.id, NEW.price, NEW.quantity, now());
            END
        ;
        CREATE TRIGGER editProduct AFTER UPDATE ON `product` FOR EACH ROW
        BEGIN
            INSERT INTO history (`name`, `id_product`, `price`, `quantity`, `created_at`) 
            VALUES (NEW.name, NEW.id, NEW.price, NEW.quantity, now());
        END
        ;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `newProduct`');
    }
}
