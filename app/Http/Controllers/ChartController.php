<?php
// app/Http/Controllers/ChartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserActivity;
use Carbon\Carbon;
use ConsoleTVs\Charts\Facades\Charts;


class ChartController extends Controller
{
    public function userLoginChart()
    {
        // The code you provided goes here
        $userLogins = UserActivity::where('activity_type', 'login')
            ->where('created_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('created_at')
            ->orderBy('created_at')
            ->get([
                \DB::raw('DATE(created_at) as date'),
                \DB::raw('COUNT(*) as count')
            ]);

        $chart = Charts::database($userLogins, 'line', 'highcharts')
            ->title('User Logins in the Last 7 Days')
            ->elementLabel('Logins')
            ->dimensions(1000, 500)
            ->lastByDay(7, true);

        return view('dashboard.charts.user_logins', compact('chart'));
    }
}
