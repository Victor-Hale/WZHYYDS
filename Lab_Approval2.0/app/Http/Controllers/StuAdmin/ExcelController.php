<?php

namespace App\Http\Controllers\StuAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AdminExport;

class ExcelController extends Controller
{
    public function export()
    {
        return Excel::download(new AdminExport(), '用户.xls');
    }
}
