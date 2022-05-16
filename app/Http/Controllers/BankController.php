<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(Bank::all());
    }

    public function detail(Request $request, Bank $bank)
    {
        return $this->success($bank);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "title" => "required",
        ]);
        return $this->success(Bank::create($data));
    }

    public function update(Request $request, Bank $bank)
    {
        $data = $this->validate($request, [
            "title" => "required",
        ]);
        $bank->update($data);
        return $this->success($bank);
    }

    public function delete(Request $request, Bank $bank)
    {
        $bank->delete();
        return $this->success($bank);
    }
}
