<?php
use App\Peripheral;
use Illuminate\Database\Seeder;


class PeripheralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Peripheral::class, 10) -> create();
    }
}
