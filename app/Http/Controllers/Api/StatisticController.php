<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Unavailability;
use App\Models\Reason;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
    public function getUnavailabilitiesBetweenDates(Request $request)
    {
        $startDate = $request->input('startDate', Carbon::now()->day(1)->format('Y-m-d'));
        $endDate = $request->input('endDate', Carbon::now()->day(30)->format('Y-m-d'));

        // Vérification que les dates soient conformes
        if (Carbon::parse($startDate)->greaterThan(Carbon::parse($endDate))) {
            return response()->json(['error' => 'La date de début doit être antérieure à la date de fin'], 400);
        }

        $tab = [];

        Unavailability::whereBetween('created_at', [$startDate, $endDate])->get()->groupBy('reason_id')->map(function ($item, $key) use (&$tab) {
            $tab[]  = [
                'reason' => Reason::find($key),
                'count' => $item->count()
            ];
        });

        return response()->json($tab);
    }
}
