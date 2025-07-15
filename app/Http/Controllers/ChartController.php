<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function chartAgendaEksternalPerMinggu()
    {
        $data = DB::table('agenda_kadis_eksternal')
            ->selectRaw('WEEK(tanggal) - WEEK(DATE_FORMAT(tanggal, "%Y-%m-01")) + 1 as minggu')
            ->selectRaw('COUNT(*) as total')
            ->whereMonth('tanggal', now()->month)
            ->whereYear('tanggal', now()->year)
            ->groupBy('minggu')
            ->orderBy('minggu')
            ->get();

        return response()->json($data);
    }
    public function chartAgendaInternalPerMinggu()
    {
        $data = DB::table('agenda_kadis_internal')
            ->selectRaw('WEEK(tanggal) - WEEK(DATE_FORMAT(tanggal, "%Y-%m-01")) + 1 as minggu')
            ->selectRaw('COUNT(*) as total')
            ->whereMonth('tanggal', now()->month)
            ->whereYear('tanggal', now()->year)
            ->groupBy('minggu')
            ->orderBy('minggu')
            ->get();

        return response()->json($data);
    }
}
