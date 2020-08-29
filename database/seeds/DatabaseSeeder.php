<?php

use Carbon\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Factory users
        factory(\App\User::class,1)->create([
            'email'=>'admin@m.com',
            'password'=>bcrypt('secret')
        ]);
        //Factory user customers
        factory(\App\User::class,10)->create()->each(function (\App\User $user){
            factory(\App\Customer::class,1)->create(['user_id'=>$user->id]);
        });

        //Factory Type vehicle
        factory(\App\TypeVehicle::class,1)->create(['name'=>'COCHE']);
        factory(\App\TypeVehicle::class,1)->create(['name'=>'MOTO']);

        //Factory Location
        factory(\App\Location::class,15)->create();

        //Factory Manufacturer, Model vehicle y Vehicle
        factory(\App\Manufacturer::class,10)->create()->each(function (\App\Manufacturer $manufacturer){
            factory(\App\ModelVehicle::class,1)->create(['manufacturer_id'=>$manufacturer->id]);
            factory(\App\Vehicle::class,5)->create();
        });
        //Factory Rental Status

        factory(\App\RentalStatus::class,1)->create(['status'=>'RENTED']);
        factory(\App\RentalStatus::class,1)->create(['status'=>'AVAILABLE']);

        //Factory Rental
        factory(\App\Rental::class,50)->create();


    }

}
