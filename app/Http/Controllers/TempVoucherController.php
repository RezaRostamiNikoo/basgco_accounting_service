<?php

namespace App\Http\Controllers;

use App\Models\TempVoucher;
use Illuminate\Http\Request;

class TempVoucherController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(TempVoucher::all());
    }

    public function detail(Request $request, $temp_voucher_id)
    {
        return $this->success(TempVoucher::findOrFail($temp_voucher_id));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            "row" => "required",
            "date" => "required|string",
            "description" => "string",
        ]);

        return $this->success(TempVoucher::create($data));
    }

    public function update(Request $request, $temp_voucher_id)
    {
        $temp_voucher = TempVoucher::findOrFail($temp_voucher_id);

        $data = $this->validate($request, [
            "row" => "required",
            "date" => "required|string",
            "description" => "string",
        ]);
        $temp_voucher->update($data);
        return $this->success($temp_voucher);
    }

    public function delete(Request $request,  $temp_voucher_id)
    {
        $temp_voucher = TempVoucher::findOrFail($temp_voucher_id);
        $temp_voucher->delete();
        return $this->success($temp_voucher);
    }
}
