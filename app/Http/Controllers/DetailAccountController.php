<?php

namespace App\Http\Controllers;

use App\Models\DetailAccount;
use Illuminate\Http\Request;

class DetailAccountController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(DetailAccount::all());
    }

    public function detail(Request $request, DetailAccount $detail_account)
    {
        return $this->success($detail_account);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "subsidiary_account_id" => "required|exists:subsidiary_accounts,id",
            "code" => "required|string",
            "title" => "required|string",
        ]);
        return $this->success(DetailAccount::create($data));
    }

    public function update(Request $request, DetailAccount $detail_account)
    {
        $data = $this->validate($request, [
            "subsidiary_account_id" => "required|exists:subsidiary_accounts,id",
            "code" => "required|string",
            "title" => "required|string",
        ]);
        $detail_account->update($data);
        return $this->success($detail_account);
    }

    public function delete(Request $request, DetailAccount $detail_account)
    {
        $detail_account->delete();
        return $this->success($detail_account);
    }
}
