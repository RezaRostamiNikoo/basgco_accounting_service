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

    public function detail(Request $request, TempVoucher $temp_voucher)
    {
        return $this->success($temp_voucher);
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

    public function update(Request $request, TempVoucher $temp_voucher)
    {
        $data = $this->validate($request, [
            "row" => "required",
            "date" => "required|string",
            "description" => "string",
        ]);
        $temp_voucher->update($data);
        return $this->success($temp_voucher);
    }

    public function delete(Request $request, TempVoucher $temp_voucher)
    {
        $temp_voucher->delete();
        return $this->success($temp_voucher);
    }
}
