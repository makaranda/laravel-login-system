<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cdrs;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CdrsExport;

class DashboardController extends Controller
{
    public function excelExport(Request $request){
        $export_date = $request->export_date;
        $export_month = $request->export_month;
        $export_year = $request->export_year;

        $query = Cdrs::query();
        //var_dump($export_date.'/'.$export_month.'/'.$export_year);
        if(!empty($export_date)){
            //$cdrs = Cdrs::where('calldate', 'like', '%' . $export_date . '%')->get();
            $query->where('calldate', 'like', '%' . $export_date . '%');
        }elseif(!empty($export_month)){
            //$cdrs = Cdrs::where('calldate', 'like', '%' . $export_month . '%')->get();
            $query->where('calldate', 'like', '%' . $export_month . '%');
        }elseif(!empty($export_year)){
            //$cdrs = Cdrs::where('calldate', 'like', '%' . $export_year . '%')->get();
            $query->where('calldate', 'like', '%' . $export_year . '%');
        } else {
            //$cdrs = Cdrs::all();
        }

        $cdrs = $query->get();
        $time = time();
        //var_dump($cdrs);
        return Excel::download(new CdrsExport($cdrs), 'cdrs_'.$time.'.xlsx');

    }
}
