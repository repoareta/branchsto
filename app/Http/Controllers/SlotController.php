<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

// load model
use App\Models\Slot;
use App\Models\Stable;


//load form request (for validation)
use App\Http\Requests\SlotStore;

class SlotController extends Controller
{
    // public function detail_store(Request $request)
    // {
    //     // DB::beginTransaction();
    //     $data = $request->all();

    //     date_default_timezone_set('Asia/Jakarta');// Set timezone
    //     $dari = $request->tanggal1;// tanggal mulai
    //     $sampai = $request->tanggal2;// tanggal akhir
        
    //     while (strtotime($dari) <= strtotime($sampai)) {
    //         $date[] = array(
    //             'tanggal' => $dari,
    //         );
    //         $dari = date("Y-m-d", strtotime("+1 day", strtotime($dari)));//looping tambah 1 date
            
    //     }
    //     // foreach($date as $dii)
    //     // {
    //     //     $data2 = array(
    //     //         'user_id' => Auth::user()->id,
    //     //         'package_id' => 3,
    //     //         'date_start' => $dii['tanggal'],
    //     //         'date_end' => $dii['tanggal'],
    //     //         'capacity' => 2,
    //     //     );
    //     //     Slot::create($data2);
    //     // }

    //     $datas = Slot::where('package_id', 3)->get();
    //     foreach ($datas as $dat) {
    //         if (count($data['time']) > 0) {
    //             foreach ($data['time'] as $item => $value) {
    //                 ;
    //                 $data2 = array(
    //                     'user_id' => Auth::user()->id,
    //                     'package_id' => 2,
    //                     'date_start' => date_format(date_create($dat->date_start), 'Y-m-d') .' '. $data['time'][$item],
    //                     'date_end' => date_format(date_create($dat->date_start), 'Y-m-d') .' '. $data['time'][$item],
    //                     'capacity' => $data['capacity'][$item],
    //                 );
    //                 Slot::create($data2);
    //             }
    //         }
    //     }
           
    //     // if (!$data) {
    //     //     DB::rollBack();
    //     //     return errorResp("Data failed to update", 422);
    //     // }
    //     // DB::commit();
    //     // return successResp("Successfully update data");
        
    // }

   

    public function index()
    {
        return view('schedule.index');
    }
    public function listJson()
    {
        $data = Slot::where('user_id',Auth::user()->id)->get();
        return datatables()->of($data)
        ->addColumn('start_date', function ($data) {
            return $data->date;
        })
        ->addColumn('time_start', function ($data) {
            return $data->time_start;
        })
        ->addColumn('time_end', function ($data) {
            return $data->time_end;
        })
        ->addColumn('capacity', function ($data) {
            return $data->capacity;
        })
        ->addColumn('capacity_booked', function ($data) {
            return $data->capacity_booked;
        })
        ->addColumn('action', function ($data) {
            return 
                "<a href='#' class='btn btn-info'>
                    <i class='fas fa-pen text-center mr-2 view-time' data-time='".$data->id."'></i>
                </a>
                <a class='btn btn-danger'>
                    <i class='fas fa-trash delete-slot pointer-link' data-id='".$data->id."'></i>
                </a>
                ";
        })
        ->rawColumns(['profile','action'])
        ->make(true);
    }
    public function create()
    {
        $data_stable = Stable::with(['user','package'])->where('user_id', Auth::user()->id)->first();
        if($data_stable->capacity_of_stable > 0 and  $data_stable->number_of_coach > 0 and $data_stable->capacity_of_arena > 0){
            if($data_stable->package->where('stable_id', $data_stable->id)->where('user_id', $data_stable->user_id)->count() < $data_stable->capacity_of_stable){
                $data = 1;
            }else{
                $data = 0;
            };
        }else{
            $data = 0;
        }
        return view('schedule.create',compact('data','data_stable'));
    }
    public function store(Request $request, Slot $slot)
    {

        $data = $request->all();
        if (count($data['time1']) > 0) {
            foreach ($data['time1'] as $item => $value) {
                if (!$data['time1'][$item] == null) {
                    $data2 = array(
                        'user_id'    => Auth::user()->id,
                        'date'       => $request->tanggal,
                        'time_start' => $data['time1'][$item],
                        'time_end'   => $data['time2'][$item],
                        'capacity'   => $data['capacity'][$item],
                        'capacity_booked'   => 0,
                    );
                    Slot::create($data2);
                }
            }
        }
        return redirect()->route('schedule.index');
    }
    public function detailSchedule(Request $request)
    {
        $data= Slot::whereDate('date_start',$request->date)->get();
        return view('schedule.index_detail',compact('data'));
    }

    public function detailShow(Request $request)
    {
        $data= Slot::where('id',$request->id)->first();
        return response()->json($data,200);
    }
    public function update(Request $request)
    {
        $package = Slot::find($request->package_id);
        $package->package_number = $request->package_number;
        $package->name           = $request->name;
        $package->description    = $request->description;
        $package->price          = $request->price;
        $package->user_id        = Auth::user()->id;
        $package->stable_id      = $request->stable_id;
        $package->save();
        Alert::success('Update Success.', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->route('schedule.index');   
    }

    public function delete(Request $request)
    {
       Slot::find($request->id)->delete();
        return response()->json();
    }
}
