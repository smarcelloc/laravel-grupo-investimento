<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\GroupUser;
use App\Models\Institution;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Database\Factories\UserGroupFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\GroupUse;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        Institution::factory(5)->create();
        Group::factory(10)->create();

        try {
            GroupUser::factory(50)->create();
        } catch (\PDOException $ex) {
            if ($ex->getCode() != '23000') {
                throw $ex;
            }
        }

        Product::factory(15)->create();
        Transaction::factory(100)->create();
    }
}
