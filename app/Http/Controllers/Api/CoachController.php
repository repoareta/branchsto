<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// load model
use App\Models\Coach;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coach = Coach::all();
        
        return response()->json([
            "success" => true,
            "message" => "Coach list show successfully.",
            "data"    => $coach
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Coach $coach)
    {
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'birth_date'     => 'required',
            'sex'            => 'required',
            'contact_number' => 'required',
            'experience'     => 'required',
            'certified'      => 'required',
            'stable_id'      => 'required',
            'user_id'        => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }
        
        $coach->name           = $request->name;
        $coach->birth_date     = $request->birth_date;
        $coach->sex            = $request->sex;
        $coach->contact_number = $request->contact_number;
        $coach->experience     = $request->experience;
        $coach->certified      = $request->certified;
        $coach->stable_id      = $request->stable_id;
        $coach->user_id        = $request->user_id;

        $coach->save();

        return response()->json([
            'success' => true,
            'message' => "Coach created successfully.",
            'data'    => $coach
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        return response()->json([
            "success" => true,
            "message" => "Coach show successfully.",
            "data"    => $coach
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coach $coach)
    {
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'birth_date'     => 'required',
            'sex'            => 'required',
            'contact_number' => 'required',
            'experience'     => 'required',
            'certified'      => 'required',
            'stable_id'      => 'required',
            'user_id'        => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }
        
        $coach->name           = $request->name;
        $coach->birth_date     = $request->birth_date;
        $coach->sex            = $request->sex;
        $coach->contact_number = $request->contact_number;
        $coach->experience     = $request->experience;
        $coach->certified      = $request->certified;
        $coach->stable_id      = $request->stable_id;
        $coach->user_id        = $request->user_id;

        $coach->save();

        return response()->json([
            'success' => true,
            'message' => "Coach updated successfully.",
            'data'    => $coach
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach)
    {
        $coach->delete();

        return response()->json([
            "success" => true,
            "message" => "Coach deleted successfully."
        ]);
    }
}
