<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cdrs;

class DashboardController extends Controller
{
    public function excelExport(){

        $csvFile1 = fopen(base_path("database\SeedFiles\cities.csv"), "r");

        $firstline1= true;
        while (($data1 = fgetcsv($csvFile1, 2000, ",")) !== FALSE) {
            if (!$firstline1) {
                Cdrs::create([
                    "id" => $data1['0'],
                    "name" => $data1['1'],
                    "branch_id" => $data1['2'],
                    "district_id" => $data1['3']

                ]);
            }
            $firstline1 = false;
        }

        fclose($csvFile1);


    }
}
