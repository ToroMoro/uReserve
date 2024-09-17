<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class eventService
{
    public static function checkEventDuplication($eventDate, $startTime, $endTime)
    {
        return DB::table('events')
        ->whereDate('sart_date', $eventDate)
        ->whereTime('end_date', '>', $startTime)
        ->whereTime('start_date', '<', $endTime)
        ->exists();
    }

    public static function joinDateAndTime($date, $time)
    {
        $start = $date." ".$time;
        return Carbon::createFromFormat('Y-m-d H:i', $start);
    }
}

