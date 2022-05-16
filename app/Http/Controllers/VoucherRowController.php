<?php

namespace App\Http\Controllers;

use App\Models\TempVoucher;
use App\Models\VoucherRow;
use Illuminate\Http\Request;

class VoucherRowController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(TempVoucher::all());
    }

    public function detail(Request $request, VoucherRow $voucher_row)
    {
        return $this->success($voucher_row);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "voucher_id" => "required|exists:vouchers",
            "row" => "required",
            "date" => "required|string",
            "description" => "string",
        ]);
        return $this->success(TempVoucher::create($data));
    }

    public function update(Request $request, VoucherRow $voucher_row)
    {
        $data = $this->validate($request, [
            "voucher_id" => "required|exists:vouchers",
            "row" => "required",
            "date" => "required|string",
            "description" => "string",
        ]);
        $voucher_row->update($data);
        return $this->success($voucher_row);
    }

    public function delete(Request $request, VoucherRow $voucher_row)
    {
        $voucher_row->delete();
        return $this->success($voucher_row);
    }
}
