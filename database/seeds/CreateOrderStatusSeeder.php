<?php

use App\Models\Orderstatus;
use Illuminate\Database\Seeder;

class CreateOrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderstatus = [
            'ordered',
            'preparing',
            'delivering',
            'recieved',
        ];

        foreach ($orderstatus as $status) {
            Orderstatus::create(['name' => $status]);
        }
    }
}
