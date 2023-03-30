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
        $startDate = $request->input('startDate', Unavailability::oldest()->first()->created_at->format('Y-m-d'));
        $endDate = $request->input('endDate', now());

        try {
            if (Carbon::parse($startDate)->greaterThan(Carbon::parse($endDate))) {
                return response()->json(['error' => 'La date de début doit être antérieure à la date de fin'], 400);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Les dates ne sont pas conformes'], 400);
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

    public function getWeeklyStats()
    {
        $i = 0;
        $tab = [];

        $unavailabilities = Unavailability::all();

        // Group unavailabilities by year
        $unavailabilities->groupBy(function ($item) {
            return $item->created_at->format('Y');
        })->map(function ($item, $year) use (&$tab, &$i) {
            
            // Generate an array of 52 weeks
            $tab[] = [
                'year' => $year,
                'weeks' => array_fill(1, 52, [])
            ];
            
            // Group unavailabilities by week
            $item->groupBy(function ($item) {
                return $item->created_at->format('W');
            })->map(function ($item, $week) use (&$tab, $i) {
                // Group unavailabilities by reason
                $tab[$i]['weeks'][(int) $week][] = $item->groupBy('reason_id')->map(function ($item, $key) {
                    return [
                        'reason' => Reason::find($key),
                        'count' => $item->count()
                    ];
                });
            });
            $i++;
        });

        return response()->json($tab);
    }
}
