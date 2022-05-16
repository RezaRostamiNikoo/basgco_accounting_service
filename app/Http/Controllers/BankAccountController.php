<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(BankAccount::all());
    }

    public function detail(Request $request, BankAccount $bank_ccount)
    {
        return $this->success($bank_ccount);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "bank_id" => "required|exists:banks",
            "detail_account_id" => "required|exists:detail_accounts",
            "account_name" => "required",
            "branch" => "required|string",
            "sheba" => "required|string",
            "address" => "string",
        ]);
        return $this->success(BankAccount::create($data));
    }

    public function update(Request $request, BankAccount $bank_ccount)
    {
        $data = $this->validate($request, [
            "bank_id" => "required|exists:banks",
            "detail_account_id" => "required|exists:detail_accounts",
            "account_name" => "required",
            "branch" => "required|string",
            "sheba" => "required|string",
            "address" => "string",
        ]);
        $bank_ccount->update($data);
        return $this->success($bank_ccount);
    }

    public function delete(Request $request, BankAccount $bank_ccount)
    {
        $bank_ccount->delete();
        return $this->success($bank_ccount);
    }
}
