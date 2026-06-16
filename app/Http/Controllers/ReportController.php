<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        $content = "Report generated on " . now();
        return response()->streamDownload(fn() => print($content), 'report.txt');
    }
}
