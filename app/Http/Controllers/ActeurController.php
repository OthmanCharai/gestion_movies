<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActeurRequest;
use App\Http\Requests\UpdateActeurRequest;
use App\Models\Acteur;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $acteur=Acteur::all();
        return view('all_acteur',[
            'acteurs'=>$acteur
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
        return view('add_acteur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActeurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /**
         *  prepare data
         */
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image=Storage::disk('public')->putFile('images',$image);
            $url=Storage::url($image);
        }
        $data=[
            'name'=>$request->name,
            'biographie'=>$request->biographie,
            'image'=>$url,
        ];
        Acteur::create($data);
        $request->session()->flash('status','Acteur was added with success');
        return redirect()->route('acteur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function show($acteur)
    {
        //
        /**
         *  get acteur
         */

        $acteur=Acteur::find($acteur);
         /**
         *  get latest series
         */
        $latest_series=Serie::where('acteur_id',$acteur->id)->get();
        /**
         *  top viewd series
         */
        $top_series=Serie::topViewed();
        return view('acteur',[
            'series'=>$latest_series,
            'topSeries'=>$top_series,
            'acteur'=>$acteur
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Acteur $acteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActeurRequest  $request
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $acteur)
    {
        //
        $acteur=Acteur::find($acteur);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image=Storage::disk('public')->putFile('images',$image);
            $url=Storage::url($image);
        }
        $acteur->name=$request->name;
        $acteur->biographie=$request->biographie;
        $acteur->image=$url;
        $acteur->save();
        $request->session()->flash('status','Acteur was updated  with success');
        return redirect()->route('acteur.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $acteur)
    {
        //
        $acteur=Acteur::find($acteur);
        $acteur->delete();
        $request->session()->flash('status','Acteur was deleted  with success');
        return redirect()->route('acteur.index');
    }
}
