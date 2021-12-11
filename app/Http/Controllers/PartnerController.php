<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use Intervention\Image\Facades\Image;

class PartnerController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $item = new Partner;

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = 'uploads';
            $img = Image::make($image->getRealPath());

            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
        }

        $item->name = $request->name;
        $item->link = $request->link;

        $item->save();
        
        return back()->with('alert', 'Content is saved');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Partner::find($id);

        $returnHTML = view('admin.forms.partner')->with('item', $item)->render();
        
        return response()->json(array('success' => true, 'html'=>$returnHTML));
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
        $item = Partner::find($id);

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = 'uploads';
            $img = Image::make($image->getRealPath());

            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
        }

        $item->name = $request->name;
        $item->link = $request->link;
        
        $item->save();

        return back()->with('alert', 'Content is saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Partner::find($id);
        
        $item->delete();
        return back()->with('alert', 'Content was deleted');
    }

    
}