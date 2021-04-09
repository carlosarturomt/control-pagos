<?php

use Illuminate\Database\Seeder;
use App\Client;
use App\ClientServiceContract;
use App\ClientsHaveRepresentatives;
use App\Company;
use App\Payment;
use App\Representative;
use App\Service;
use App\User;
use App\UsersHaveCompanies;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          // $this->call(UsersTableSeeder::class);
          User::create([
            'name' => 'Eduardo Venegas',
            'email' => 'evenegas@dna3.com.mx',
            'password' => bcrypt('Dna3.2020')
        ]);
        factory(User::class, 2)->create();

        Company::create([
            'name' => 'DNA3'
        ]);

        Company::create([
            'name' => 'MOL DE FLORES'
        ]);

        Company::create([
            'name' => 'FIDEGARANTE'
        ]);

        Service::create([
            'service_name' => 'Capacitación',
            'cost' => 20000
        ]);

        Service::create([
            'service_name' => 'PLD/FT',
            'cost' => 25000
        ]);

        Service::create([
            'service_name' => 'Dictamen',
            'cost' => 15000
        ]);

        factory(Client::class, 10)->create();

        factory(Payment::class, 11)->create();

        factory(Representative::class, 3)->create();

        factory(UsersHaveCompanies::class, 3)->create();
        factory(ClientsHaveRepresentatives::class, 3)->create();
        factory(ClientServiceContract::class, 3)->create();
    }
}
