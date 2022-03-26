<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreSerieRequest;
use App\Models\Serie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * get all series
         */
        $series=Serie::take(12)->get();

        /**
         *  get latest series using locale scope
         */
        $latest_series=Serie::latestSerie()->take(6)->get();
        /**
         * get top series
         */
        $top_series=Serie::topViewed();

        /**
         *  get populaire seiries
         */
        $populairs=Serie::where('is_populair','true')->get();

        /**
         *  get top rating
         */
        $top_rated=Serie::topRated()->take(12)->get();

        return view('welcome',[
            'series'=>$series,
            'lestestseries'=>$latest_series,
            'topSeries'=>$top_series,
            'populairs'=>$populairs,
            'topRated'=>$top_rated
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
        return view('admin.serie.add_series');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSerieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSerieRequest $request)
    {
        /**
         *  prepare data
         */
        if($request->hasFile('url')){
            $image=$request->file('url');
            $image=Storage::disk('public')->putFile('images',$image);
            $url=Storage::url($image);
        }
        $data=[
            'title'=>$request->title,
            'content'=>$request->content,
            'acteur'=>$request->acteur,
            'url'=>$url,
            'tags'=>$request->tags,
            'status'=>$request->status,
            'trailler_url'=>$request->trailler_url,
            'is_populair'=>$request->is_populair,
        ];
        Auth::user()->series()->save(Serie::make($data));
        /**
         *  generate a flash message dure 1 requet http
         */
        $request->session()->flash('status','status was added with success');
        /**
         *  go back to home page
         */
        return redirect()->route('series.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show( $serie)
    {
        /**
         *  find serie by id
         */
        $serie=Serie::find($serie);
        $serie->number_of_view=$serie->number_of_view+1;
        $serie->save();
        /**
         *  get latest series
         */
        $latest_series=Serie::latestSerie()->take(15)->get();

        /**
         *  top viewd series
         */
        $top_series=Serie::topViewed();

        return view('single',[
            'serie'=>$serie,
            'series'=>$latest_series,
            'topSeries'=>$top_series
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSerieRequest  $request
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSerieRequest $request, Serie $serie)
    {
        /**
         *  update serie
         */
        $serie->content=$request->content;
        $serie->title=$request->title;
        $serie->url=$request->url;
        $serie->acteur=$request->acteur;
        $serie->status=$request->status;
        $serie->save();
        /**
         *  create a flash message
         */
        $request->session()->flash('status','serie was update with success');
        /**
         *  go back to home
         */
        return redirect()->route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$serie)
    {
        $serie=Serie::find($serie);

        $serie->delete();
        $request->session()->flash('status','serie was deleted with success');
        return redirect()->route('series.index');
    }

    /**
     *  add a serie to favorite
     */
    public function favorite(Request $request){
        $serie=Serie::find($request->serie_id);
        $serie->rating()->syncWithoutDetaching(Auth::user());
        $request->session()->flash('status','serie was deleted with success');
        return redirect()->back();
    }

    /**
     *  define a function  to get sereis page
     */
    public function series(){
        /**
        * get all series
        */
       $series=Serie::take(12)->get();

       /**
        *  get latest series using locale scope
        */
       $latest_series=Serie::latestSerie()->take(5)->get();

       /**
        * get top series
        */
       $top_series=Serie::topViewed();

       /**
        *  get populaire seiries
        */
       $populairs=Serie::where('is_populair','true')->get();

       /**
        *  get top rating
        */
       $top_rated=Serie::topRated()->take(12)->get();

       return view('series',[
           'series'=>$series,
           'lestestseries'=>$latest_series,
           'topSeries'=>$top_series,
           'populairs'=>$populairs,
           'topRated'=>$top_rated
       ]);

    }

    /**
     *  define a function to get all series for admin || user
     */
    public function user_series(){
        /**
         * get user series if he is not admin
         */
        if(Auth::user()->is_admin){
            $series=Serie::all();
        }else{
            $serie=Serie::where('user_id',Auth::user()->id)->get();
        }
        return view('admin.serie.series',[
            'series'=>$series,
        ]);
    }


}
