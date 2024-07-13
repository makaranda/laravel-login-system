<?php

namespace App\Exports;

use App\Models\Cdrs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CdrsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cdrs::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'calldate',
            'clid',
            'src',
            'dst',
            'dcontext',
            'channel',
            'dstchannel',
            'lastapp',
            'lastdata',
            'duration',
            'billsec',
            'disposition',
            'amaflags',
            'accountcode',
            'uniqueid',
            'userfield',
            'did',
            'recordingfile',
            'cnum',
            'cnam',
            'outbound_cnum',
            'outbound_cnam',
            'dst_cnam',
            'linkedid',
            'peeraccount',
            'sequence',
            'created_at',
            'updated_at',
            // Add more headings as needed
        ];
    }
}
