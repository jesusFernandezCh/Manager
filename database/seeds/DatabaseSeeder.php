<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\User;
use App\ProfitCenter;
use App\Country;
use App\AccountCategory;
use App\Account;

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
        // factory(ProfitCenter::class,5)->create();
        factory(Permission::class,4)->create(); 
        factory(Role::class,4)->create();
        // factory(User::class,100)->create();
        // factory(Country::class,50)->create();
        // factory(AccountCategory::class,3)->create();
        // factory(Account::class,20)->create();
        factory(Logunit::class,20)->create();
        factory(Port::class,20)->create();
        factory(Incoterm::class,20)->create();
        factory(AccountMetaType::class,20)->create();
        factory(AccountMeta::class,20)->create();
	}
}
