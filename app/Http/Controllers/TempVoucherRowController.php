<?php

namespace App\Http\Controllers;

use App\Models\TempVoucher;
use App\Models\TempVoucherRow;
use Illuminate\Http\Request;

class TempVoucherRowController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(TempVoucher::all());
    }

    public function detail(Request $request, TempVoucherRow $temp_voucher_row)
    {
        return $this->success($temp_voucher_row);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "temp_voucher_id" => "required|exists:temp_vouchers",
            "detail_account_id" => "required|exists:detail_accounts",
            "description" => "string",
            "amount" => "required",
        ]);
        return $this->success(TempVoucher::create($data));
    }

    public function update(Request $request, TempVoucherRow $temp_voucher_row)
    {
        $data = $this->validate($request, [
            "temp_voucher_id" => "required|exists:temp_vouchers",
            "detail_account_id" => "required|exists:detail_accounts",
            "description" => "string",
            "amount" => "required",
        ]);
        $temp_voucher_row->update($data);
        return $this->success($temp_voucher_row);
    }

    public function delete(Request $request, TempVoucherRow $temp_voucher_row)
    {
        $temp_voucher_row->delete();
        return $this->success($temp_voucher_row);
    }
}
