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

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            "temp_voucher_id" => "required|exists:temp_vouchers,id",
            "detail_account_id" => "required|exists:detail_accounts,id",
            "description" => "string",
            "amount" => "required",
        ]);

        return $this->success(TempVoucherRow::create($data));
    }

    public function update(Request $request, $temp_voucher_row_id)
    {
        $temp_voucher_row = TempVoucherRow::findOrFail($temp_voucher_row_id);
        $data = $this->validate($request, [
            "temp_voucher_id" => "required|exists:temp_vouchers",
            "detail_account_id" => "required|exists:detail_accounts",
            "description" => "string",
            "amount" => "required",
        ]);
        $temp_voucher_row->update($data);
        return $this->success($temp_voucher_row);
    }

    public function delete(Request $request, $temp_voucher_row_id)
    {
        $temp_voucher_row = TempVoucherRow::findOrFail($temp_voucher_row_id);
        $temp_voucher_row->delete();
        return $this->success($temp_voucher_row);
    }
}
