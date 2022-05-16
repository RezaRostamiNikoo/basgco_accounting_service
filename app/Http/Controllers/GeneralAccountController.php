<?php

namespace App\Http\Controllers;

use App\Models\GeneralAccount;
use Illuminate\Http\Request;

class GeneralAccountController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(GeneralAccount::all());
    }

    public function detail(Request $request, GeneralAccount $general_account)
    {
        return $this->success($general_account);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "accounting_group_id" => "required|exists:accounting_groups,id",
            "code" => "required|string",
            "title" => "required|string",
        ]);
        return $this->success(GeneralAccount::create($data));
    }

    public function update(Request $request, GeneralAccount $general_account)
    {
        $data = $this->validate($request, [
            "accounting_group_id" => "required|exists:accounting_groups,id",
            "code" => "required|string",
            "title" => "required|string",
        ]);
        $general_account->update($data);
        return $this->success($general_account);
    }

    public function delete(Request $request, GeneralAccount $general_account)
    {
        $general_account->delete();
        return $this->success($general_account);
    }
}
