<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(Voucher::all());
    }

    public function detail(Request $request, Voucher $voucher)
    {
        return $this->success($voucher);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "request_id" => "required|exists:requests",
            "row" => "required",
            "date" => "required|string",
            "status" => "required|string",
            "description" => "string",
        ]);
        return $this->success(Voucher::create($data));
    }

    public function update(Request $request, Voucher $voucher)
    {
        $data = $this->validate($request, [
            "request_id" => "required|exists:requests",
            "row" => "required",
            "date" => "required|string",
            "description" => "string",
        ]);
        $voucher->update($data);
        return $this->success($voucher);
    }

    public function delete(Request $request, Voucher $voucher)
    {
        $voucher->delete();
        return $this->success($voucher);
    }
}
