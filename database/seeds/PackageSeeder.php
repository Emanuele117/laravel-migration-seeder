<?php

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'city' => 'Milano',
                'country' => 'Italia',
                'airline_company' => 'Vueling',
                'hotel' => 'Hotel Milano',
                'is_available' => 1,
            ],
            [
                'city' => 'Malaga',
                'country' => 'Spagna',
                'airline_company' => 'Vueling',
                'hotel' => 'Hotel Spagna',
                'is_available' => 0,
            ],
            [
                'city' => 'Parigi',
                'country' => 'Francia',
                'airline_company' => 'Emitates',
                'hotel' => 'Hotel Francia',
                'is_available' => 1,
            ]
            
            ];

            foreach ($packages as $package) {
                $_package = new  Package();
                $_package->city = $package['city'];
                $_package->country = $package['country'];
                $_package->airline_company = $package['airline_company'];
                $_package->hotel = $package['hotel'];
                $_package->is_available = $package['is_available'];
                $_package->save();
            };
    }
}
