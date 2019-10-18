<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\User;
use App\ProfitCenter;
use App\Country;
use App\AccountCategory;
use App\Account;
use App\Logunit;
use App\Port;
use App\Incoterm;
use App\AccountMetaType;
use App\AccountMeta;
use App\OrderPmtTerm;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountCategorySedder::class);
        factory(ProfitCenter::class,5)->create();
        $this->call(UserSeeder::class);
        factory(Permission::class,4)->create(); 
        factory(Role::class,4)->create();
        factory(User::class,100)->create();
        factory(Country::class,200)->create();
        factory(Account::class,20)->create();
        factory(Logunit::class,20)->create();
        factory(Port::class,20)->create();
        factory(Incoterm::class,20)->create();
        factory(AccountMetaType::class,20)->create();
        factory(AccountMeta::class,20)->create();

        $this->call(CurrencySeeder::class);
        $this->call(Currier::class);
        $this->call(DocStatus::class);
        $this->call(ShelfLife::class);
        $this->call(CargoUnitSedder::class);
        $this->call(OperationStatusSedder::class);
        $this->call(OrderPtmTermtSedder::class);
	}
}
