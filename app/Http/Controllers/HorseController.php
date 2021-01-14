<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

// load model
use App\Models\Horse;
use App\Models\HorseSex;
use App\Models\HorseBreed;
use App\Models\Stable;

//load form request (for validation)
use App\Http\Requests\HorseStore;

class HorseController extends Controller
{
    public function index()
    {
        return view('horse.index');
    }
    public function listJson()
    {
        $data = Horse::with(['stable'])->where('user_id', Auth::user()->id);
        return datatables()->of($data)
            ->addColumn('profile', function ($data) {
                return "<img src='assets/media/branchsto/horse.png' width='40px' height='40px' alt=''> ";
            })
            ->addColumn('horse_name', function ($data) {
                return $data->name;
            })
            ->addColumn('birth_date', function ($data) {
                return $data->birth_date;
            })
            ->addColumn('age', function ($data) {
                $dateOfBirth = $data->birth_date;
                return Carbon::parse($dateOfBirth)->age;
            })
            ->addColumn('sex', function ($data) {
                return $data->sex->name;
            })
            ->addColumn('passport_number', function ($data) {
                return $data->passport_number;
            })
            ->addColumn('horse_owner', function ($data) {
                return $data->owner;
            })
            ->addColumn('horse_breeds', function ($data) {
                return $data->breed->name;
            })
            ->addColumn('action', function ($data) {
                return
                "<a href='javascript:void(0)' class='btn btn-info text-center mr-2' >
                    <i class='fas fa-pen edit-horse pointer-link' data-id='".$data->id."'></i>
                </a>
                <a href='javascript:void(0)' class='btn btn-danger text-center mr-2' >
                    <i class='fas fa-trash delete-horse pointer-link' data-id='".$data->id."'></i>
                </a>
                ";
            })
            ->rawColumns(['profile','action'])
            ->make(true);
    }
    public function create()
    {
        $horseSex = HorseSex::all();
        $horseBreed = HorseBreed::all();
        $data_stable = Stable::with(['user','horse'])->where('user_id', Auth::user()->id)->first();
        if ($data_stable->capacity_of_stable > 0 and  $data_stable->number_of_coach > 0 and $data_stable->capacity_of_arena > 0) {
            if ($data_stable->horse->where('stable_id', $data_stable->id)->where('user_id', $data_stable->user_id)->count() < $data_stable->capacity_of_stable) {
                $data = 1;
            } else {
                $data = 0;
            };
        } else {
            $data = 0;
        }
        return view('horse.create', compact('data', 'data_stable', 'horseSex', 'horseBreed'));
    }

    public function store(HorseStore $request, Horse $horse)
    {
        $horse->name            = $request->name;
        $horse->owner           = $request->owner;
        $horse->birth_date      = $request->birth_date;
        $horse->horse_sex_id      = $request->horse_sex_id;
        $horse->horse_breed_id      = $request->horse_breed_id;
        $horse->passport_number = $request->passport_number;
        $horse->pedigree_male        = $request->pedigree_male;
        $horse->pedigree_female        = $request->pedigree_female;
        $horse->stable_id       = $request->stable_id;
        $horse->user_id         = Auth::user()->id;
        $horse->save();
        
        Alert::success('Create Data Success.', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->route('horse.index');
    }

    public function edit($id)
    {
        $horseSex = HorseSex::all();
        $horseBreed = HorseBreed::all();
        $data= Horse::find($id);
        return view('horse.edit', compact('data', 'horseSex', 'horseBreed'));
    }
    public function update(HorseStore $request, Horse $horse)
    {
        $horse = Horse::find($request->horse_id);
        $horse->name            = $request->name;
        $horse->owner           = $request->owner;
        $horse->birth_date      = $request->birth_date;
        $horse->horse_sex_id      = $request->horse_sex_id;
        $horse->horse_breed_id      = $request->horse_breed_id;
        $horse->passport_number = $request->passport_number;
        $horse->pedigree_male        = $request->pedigree_male;
        $horse->pedigree_female        = $request->pedigree_female;
        $horse->stable_id       = $request->stable_id;
        $horse->user_id         = Auth::user()->id;
        $horse->save();

        Alert::success('Update Success.', 'Success.')->persistent(true)->autoClose(3600);
        return redirect()->route('horse.index');
    }

    public function delete(Request $request)
    {
        Horse::find($request->id)->delete();
        return response()->json();
    }

    public function rating(Request $request)
    {
        $horse = Horse::find($request->horse_id);

        // Add a rating of 5, from the currently authenticated user
        $horse->rate($request->rating);

        return response()->json([
            'success' => true,
            'message' => $horse->averageRating
        ], 200);
    }
}
