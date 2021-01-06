<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

// load model
use App\Models\Slot;
use App\Models\Stable;


//load form request (for validation)
use App\Http\Requests\SlotStore;

class SlotController extends Controller
{    
    public function index()
    {
        return view('schedule.index');
    }

    public function listJson(Request $request)
    {                
        if($request->ajax()){
            if(!empty($request->input('from_date')))
            {
                //Jika tanggal awal(input('from_date')) hingga tanggal akhir(input('end_date')) adalah sama maka
                if($request->input('from_date') === $request->input('end_date')){
                    //kita filter tanggalnya sesuai dengan request input('from_date')
                    $data = Slot::whereDate('date','=', $request->input('from_date'))->get();
                }
                else{
                    //kita filter dari tanggal awal ke akhir
                    $data = Slot::whereBetween('date', array($request->input('from_date'), $request->input('end_date')))->get();
                }
            }else{
                $data = Slot::where('user_id',Auth::user()->id)->orderBy('time_start', 'asc')->get();
            }
            return datatables()->of($data)
            ->addColumn('start_date', function ($data) {
                return $data->date;
            })
            ->addColumn('time_start', function ($data) {
                return date('H:i', strtotime($data->time_start));
            })
            ->addColumn('time_end', function ($data) {
                return date('H:i', strtotime($data->time_end));
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

    public function store(Request $request)
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

    public function generate(Request $request)
    {
        $start = Carbon::createFromFormat('Y-m-d',$request->start);
        $end = Carbon::createFromFormat('Y-m-d',$request->end);
        $dataAll = $request->all();

        $data = $dataAll['group-a'];
        // var_dump(range(intval('07:00:00'),intval('16:00:00')));die;
        $period = new CarbonPeriod($start, '1 day', $end);
        foreach($period as $date)
        {            
            if (count($data) > 0) {
                foreach ($data as $item) {
                    if (!$item == null) {
                        $time1 = date("H:i", strtotime($item['time1']));
                        $time2 = date("H:i", strtotime($item['time2']));
                        $capacity = $item['capacity'];
                        if($time1 > $time2){
                            Alert::error('Generate Error.', 'End time always greater then start time.');
                            return redirect()->route('schedule.index');
                        }   
                        if($capacity == null){
                            Alert::error('Generate Error.', 'Capacity cannot be null.')->persistent(true)->autoClose(3600);
                            return redirect()->route('schedule.index');
                        }             
                        $data2 = array(
                            'user_id'    => Auth::user()->id,
                            'date'       => $date->format('Y-m-d'),
                            'time_start' => $time1,
                            'time_end'   => $time2,
                            'capacity'   => $capacity,
                            'capacity_booked'   => 0,
                        );
                        Slot::create($data2);
                    }
                }
            }
            
        }

        if($data){
            Alert::success('Generate Success.', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->route('schedule.index'); 
        }

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
        $slot = Slot::find($request->slot_id);

        if(strtotime($request->time1) > strtotime($request->time2)){
            Alert::error('Generate Error.', 'End time always greater then start time.');
            return redirect()->route('schedule.index');
        }

        $slot->date        = $request->date;
        $slot->time_start  = $request->time1;
        $slot->time_end    = $request->time2;
        $slot->capacity    = $request->capacity;
        
        $slot->save();
        Alert::success('Update Success.', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->route('schedule.index');   
    }

    public function delete(Request $request)
    {
       Slot::find($request->id)->delete();
        return response()->json();
    }
    
}
