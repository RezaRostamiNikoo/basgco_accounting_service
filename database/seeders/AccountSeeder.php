<?php

namespace Database\Seeders;

use App\Models\AccountingGroup;
use App\Models\DetailAccount;
use App\Models\GeneralAccount;
use App\Models\SubsidiaryAccount;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccountingGroup::create(["code" => "1", "title" => "صندوق"]);
        AccountingGroup::create(["code" => "2", "title" => "بستانکاران"]);
        AccountingGroup::create(["code" => "3", "title" => "جاری سهامداران"]);
        AccountingGroup::create(["code" => "4", "title" => "درآمد"]);
        AccountingGroup::create(["code" => "5", "title" => "هزینه ها"]);


        // general accounts
        AccountingGroup::all()->each(function (AccountingGroup $a) {
            GeneralAccount::create(["accounting_group_id" => $a->id, "code" => "code", "title" => "title"]);
            GeneralAccount::create(["accounting_group_id" => $a->id, "code" => "code", "title" => "title"]);
            GeneralAccount::create(["accounting_group_id" => $a->id, "code" => "code", "title" => "title"]);
        });

        // subsidiary accounts
        GeneralAccount::all()->each(function (GeneralAccount $g) {
            SubsidiaryAccount::create(["general_account_id" => $g->id, "code" => "code", "title" => "title"]);
            SubsidiaryAccount::create(["general_account_id" => $g->id, "code" => "code", "title" => "title"]);
            SubsidiaryAccount::create(["general_account_id" => $g->id, "code" => "code", "title" => "title"]);
        });

        // detail accounts
        SubsidiaryAccount::all()->each(function (SubsidiaryAccount $s) {
            DetailAccount::create(["subsidiary_account_id" => $s->id, "code" => "code", "title" => "title"]);
            DetailAccount::create(["subsidiary_account_id" => $s->id, "code" => "code", "title" => "title"]);
            DetailAccount::create(["subsidiary_account_id" => $s->id, "code" => "code", "title" => "title"]);
        });
    }
}
