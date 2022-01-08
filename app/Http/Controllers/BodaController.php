<?php

namespace App\Http\Controllers;

use App\Models\Boda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BodaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bodas = Boda::latest();

        if (request('search')) {
            $bodas
                ->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('boda_reg_no', 'like', '%' . request('search') . '%');
        }

        return view('home', [
            "bodas" => $bodas->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "boda_reg_no" => "required|unique:bodas,boda_reg_no",
            "name" => "required",
            "age" => "required",
            "address" => "required",
            "phone" => "required",
            "next_of_kin" => "required",
            "next_of_kin_contact" => "required",
            "stage" => "required",
        ]);

        Boda::create($data);

        return redirect()->route("boda.index")->with("success", "Record Saved!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boda  $boda
     * @return \Illuminate\Http\Response
     */
    public function show(Boda $boda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boda  $boda
     * @return \Illuminate\Http\Response
     */
    public function edit(Boda $boda)
    {
        return view("edit", compact(["boda" => "boda"]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boda  $boda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boda $boda)
    {
        $vaidatedData = $request->validate([
            "boda_reg_no" => "required",
            "name" => "required",
            "age" => "required",
            "address" => "required",
            "phone" => "required",
            "next_of_kin" => "required",
            "next_of_kin_contact" => "required",
            "stage" => "required",
        ]);
        $bodaData = Boda::findOrFail($boda['id']);
        $bodaData->update($vaidatedData);
        return redirect()->route("boda.index")
            ->with('success', 'Boda updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boda  $boda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boda $boda)
    {
        $boda->delete();

        return redirect()->route("boda.index")
            ->with('success', 'Boda deleted successfully');
    }
}
