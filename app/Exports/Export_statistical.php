<?php

namespace App\Exports;
use Carbon\Carbon;
use App\Models\quanly;
use Maatwebsite\Excel\Concerns\FromCollection;

class Export_statistical implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $now=Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $thismonth=Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();

        return quanly::whereBetween('order_date',[$thismonth,$now])->get();
    }
}
