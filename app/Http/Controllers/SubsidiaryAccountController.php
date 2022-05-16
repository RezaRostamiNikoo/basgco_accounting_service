<?php

namespace App\Http\Controllers;

use App\Models\SubsidiaryAccount;
use Illuminate\Http\Request;

class SubsidiaryAccountController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(SubsidiaryAccount::all());
    }

    public function detail(Request $request, SubsidiaryAccount $subsidiary_account)
    {
        return $this->success($subsidiary_account);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "general_account_id" => "required|exists:general_accounts,id",
            "code" => "required|string",
            "title" => "required|string",
        ]);
        return $this->success(SubsidiaryAccount::create($data));
    }

    public function update(Request $request, SubsidiaryAccount $subsidiary_account)
    {
        $data = $this->validate($request, [
            "general_account_id" => "required|exists:general_accounts,id",
            "code" => "required|string",
            "title" => "required|string",
        ]);
        $subsidiary_account->update($data);
        return $this->success($subsidiary_account);
    }

    public function delete(Request $request, SubsidiaryAccount $subsidiary_account)
    {
        $subsidiary_account->delete();
        return $this->success($subsidiary_account);
    }
}
