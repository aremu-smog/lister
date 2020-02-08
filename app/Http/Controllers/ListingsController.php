<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth',['except'=>['index','show']]);
    }
    public function index()
    {
        //
        $listings = Listing::all();

        return view('home',['listings'=>$listings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
        [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'image' => 'required|image|mimes:jpeg,png,gif,jpg,svg|max:2048'
        ]
        );

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('img/products'),$imageName);
        
        $listing = new Listing;
        
        $listing->name = $request->input('name');
        $listing->email = $request->input('email');
        $listing->website = $request->input('website');
        $listing->phone = $request->input('phone');
        $listing->bio = $request->input('bio');
        $listing->address = $request->input('address');
        $listing->image = $imageName;
        $listing->user_id = auth()->user()->id;

        $listing->save();

        return redirect('/dashboard')->with('success','Your new product/service was successfully listed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $listings = Listing::where('id','!=',$id)->get();
        $listing = Listing::find($id);
        return view('listing.show',['listings'=>$listings,'listing'=>$listing]);
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
        $listing = Listing::find($id);

        return view('listing.edit',['listing'=>$listing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $listing = Listing::find($id);
        $request->validate(
            [
                'image' => 'image|mimes:jpeg,png,gif,jpg,svg|max:2048'
            ]
            );
            if(request()->image){
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('img/products'),$imageName);
            }else{
                $imageName = $listing->image;
            }
            
            
            
            
            $listing->name = $request->input('name');
            $listing->email = $request->input('email');
            $listing->website = $request->input('website');
            $listing->phone = $request->input('phone');
            $listing->bio = $request->input('bio');
            $listing->address = $request->input('address');
            $listing->image = $imageName;
            $listing->user_id = auth()->user()->id;
    
            $listing->save();
    
            return redirect('/dashboard')->with('success','Your product/service was successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $listing = Listing::find($id);

        $listing->delete();

        return redirect('/dashboard')->with('success','Your product/service was successfully removed');
    }
}
