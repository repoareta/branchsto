<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

// load model
use App\Models\Slot;

//load form request (for validation)
use App\Http\Requests\SlotStore;
use Symfony\Component\Console\Input\Input;

class SlotController extends Controller
{
    public function store(Slot $request,SlotStore $SlotStore)
    {
        $status = Http::post('http://185.201.9.73/branchsto/public/api/slot',[
            'package_number' => $request->package_number,
            'name'           => $request->name,
            'description'    => $request->description,
            'price'          => $request->price,
            'user_id'        => Auth::user()->id,
            'stable_id'      => $request->stable_id,
        ]); 
        if ($status->getStatusCode() == 200) {
            Alert::success('Create Data Success.', 'Success.')->persistent(true)->autoClose(3600);
            return redirect()->route('package.index');
        }else{
            Alert::info('Create Data Failed.', 'Try Again.')->persistent(true)->autoClose(3600);
            return redirect()->route('package.index');
        }   
    }

    public function detail_index_json(Request $request)
    {
        $data = Slot::where('package_id',$request->package_id)->get();
        return datatables()->of($data)
        ->addColumn('profile', function ($data) {
            return "1";
        })
        ->addColumn('start_date', function ($data) {
            return $data->date_start;
        })
        ->addColumn('end_date', function ($data) {
            return $data->date_end;
        })
        ->addColumn('capacity', function ($data) {
            return $data->capacity;
        })
        ->addColumn('action', function ($data) {
            return 
                "
                    <i class='fas fa-pen edit-slot pointer-link' data-id='".$data->id."'></i>
                    <i class='fas fa-eye '></i>
                    <i class='fas fa-trash delete-slot pointer-link' data-id='".$data->id."'></i>
                ";
        })
        ->rawColumns(['profile','action'])
        ->make(true);

    }

    public function detail_store(SlotStore $request,Slot $slot)
    {
        
    }

    public function detail_show(Request $request)
    {
        $id = $request->id;
        if (session('data_list') and $request->session == 'true' ) {
            foreach (session('data_list') as $key => $value) {
                if ($value['id'] == $id) {
                    $data = session("data_list.$key");
                }
            }
        } else {
            $data= Http::get('http://185.201.9.73/branchsto/public/api/slot/'.$request->id)->json();
        }

        return response()->json($data);
    }
    public function detail_update(Request $request)
    {
        if (session('data_list') and $request->session == 'true' ) {
            // delete session
            $id = $request->id;
            foreach (session('data_list') as $key => $value) {
                if ($value['id'] == $id) {
                    session()->forget("data_list.$key");

                    $data_list = [
                        'id'            => $request->id,      
                        'date_start'    => $request->date_start,
                        'date_end'      => $request->date_end,
                        'capacity'      => $request->capacity,
                        'user_id'       => Auth::user()->id,
                        'package_id'    => $request->package_id
                    ];

                    // dd($panjar_detail);

                    if (session('data_list')) {
                        session()->push('data_list', $data_list);
                    } else {
                        session()->put('data_list', []);
                        session()->push('data_list', $data_list);
                    }
                }
            }
        } else {
            // Dari Database
            $data_list = Http::put('http://185.201.9.73/branchsto/public/api/slot/'.$request->id,[
                'date_start'    => $request->date_start,
                'date_end'      => $request->date_end,
                'capacity'      => $request->capacity,
            ]); 
        }

        $data = $data_list;
        return response()->json($data, 200); 
    }

    public function detail_delete(Request $request)
    {
        // delete Database
            Http::delete('http://185.201.9.73/branchsto/public/api/slot/'.$request->id);
        return response()->json();

    }
}
