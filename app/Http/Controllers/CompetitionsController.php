<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompetitionsController extends Controller
{
    public function index()
    {
        foreach(DB::table('bookings')->where('photo', null)->where('approval_status', null)->get() as $item)
        {
            $time_start = strtotime($item->created_at);
            $time_end   = strtotime(now());

            //menghitung selisih dengan hasil detik
            $diff    =$time_end - $time_start;
            if ($diff > 3600) {
                DB::table('bookings')->where('id',$item->id)
                ->update([
                    'approval_status' => "Expired"
                ]);
                foreach(DB::table('booking_details')->where('booking_id',$item->id)->get() as $row)
                {
                    DB::table('slot_user')->where('booking_detail_id',$row->id)->delete();
                }
            }
        }
        return view('home.index');
    }
}
