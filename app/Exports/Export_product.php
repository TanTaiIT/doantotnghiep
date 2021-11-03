<?php

namespace App\Exports;
use Carbon;
use App\Models\product;
use Maatwebsite\Excel\Concerns\FromCollection;

class Export_product implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       
        return product::all();
    }
}
