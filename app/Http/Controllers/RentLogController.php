<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RentLogController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->toDateString();
        $rentlogs = RentLogs::with(['user', 'book'])->get();
        return view('rentlog', ['rent_logs'=>$rentlogs, 'today' => $today]);
    }
}
