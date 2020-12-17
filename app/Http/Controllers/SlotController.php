<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

//load form request (for validation)
use App\Http\Requests\Slot;

class SlotController extends Controller
{
    public function store(Slot $request)
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

    public function detail_index_json(Request $request, $package_id = null)
    {
        if (session('data_list') and $request->package_id == 'null') {
            $list_details = session('data_list');
            $list_detail=[];
            foreach($list_details as $row)
            {
                $list_detail[] =$row;
            }
            return datatables()->of($list_detail)
            ->addColumn('profile', function ($list_detail) {
                return "1";
            })
            ->addColumn('start_date', function ($list_detail) {
                return $list_detail['date_start'];
            })
            ->addColumn('end_date', function ($list_detail) {
                return $list_detail['date_end'];
            })
            ->addColumn('capacity', function ($list_detail) {
                return $list_detail['capacity'];
            })
            ->addColumn('action', function ($list_detail) {
                return 
                    "
                        <i class='fas fa-pen edit-slot pointer-link' data-id='".$list_detail['id']."'></i>
                        <i class='fas fa-eye '></i>
                        <i class='fas fa-trash delete-slot pointer-link' data-id='".$list_detail['id']."'></i>
                    ";
            })
            ->rawColumns(['profile','action'])
            ->make(true);
        } else {

           $dataa= Http::get('http://185.201.9.73/branchsto/public/api/slot-by-package/'.$request->package_id);
           $list_detail=[];
           if ($dataa->ok() == true) {
               foreach ($dataa['data'] as $row) {
                   $list_detail[] = $row;
               }
            }
            return datatables()->of($list_detail)
            ->addColumn('profile', function ($list_detail) {
                return "1";
            })
            ->addColumn('start_date', function ($list_detail) {
                return $list_detail['date_start'];
            })
            ->addColumn('end_date', function ($list_detail) {
                return $list_detail['date_end'];
            })
            ->addColumn('capacity', function ($list_detail) {
                return $list_detail['capacity'];
            })
            ->addColumn('action', function ($list_detail) {
                return 
                    "
                        <i class='fas fa-pen edit-slot pointer-link' data-id='".$list_detail['id']."'></i>
                        <i class='fas fa-eye '></i>
                        <i class='fas fa-trash delete-slot pointer-link' data-id='".$list_detail['id']."'></i>
                    ";
            })
            ->rawColumns(['profile','action'])
            ->make(true);
        }

    }

    public function detail_store(Request $request)
    {
        $data_list = [
            'id'            => $request->id,      
            'date_start'    => $request->date_start,
            'date_end'      => $request->date_end,
            'capacity'      => $request->capacity,
            'user_id'       => Auth::user()->id,
            'package_id'    => $request->package_id 
        ];
        if ($request->session == 'true') {
            if (session('data_list')) {
                session()->push('data_list', $data_list);
            } else {
                session()->put('data_list', []);
                session()->push('data_list', $data_list);
            }
        }else{
            $status = Http::post('http://185.201.9.73/branchsto/public/api/slot',[
                'date_start'    => $request->date_start,
                'date_end'      => $request->date_end,
                'capacity'      => $request->capacity,
                'user_id'       => Auth::user()->id,
                'package_id'    => $request->package_id
            ]);
        }
        return response()->json();

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
        // dd($id);
        if (session('data_list') and $request->session == 'true' ) {
            // delete session
            foreach (session('data_list') as $key => $value) {
                if ($value['id'] == $request->id) {
                    session()->forget("data_list.$key");
                }
            }
        } else {
            // delete Database
            Http::delete('http://185.201.9.73/branchsto/public/api/slot/'.$request->id);

        }
        return response()->json();

    }
}
