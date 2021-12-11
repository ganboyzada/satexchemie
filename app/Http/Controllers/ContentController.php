<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Intervention\Image\Facades\Image;

class ContentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Content;

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = '/uploads';
            $img = Image::make($image->getRealPath());

            $img->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/'.$imagename));
            $item->img = $destinationPath.'/'.$imagename;
        }

        $item->type = strtolower($request->type);
        
        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'value_'.$lang} = $request->{'value_'.$lang};
        }
        
        $item->link = $request->link;
        $item->name = $request->name;

        // if($request->active == 'on'){
        //     $others = Info::where('type', $request->type)->get();
        //     foreach ($others as $other){
        //         $other->active = null;
        //         $other->save();
        //     }
        // }
        // $item->active = $request->active;

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
        $item = Content::find($id);

        $returnHTML = view('admin.forms.info')->with('item', $item)->render();
        
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
        $item = Content::find($id);
        
         $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename =  'image_'.time().'_'.$image->getClientOriginalName();
            $destinationPath = '/uploads';
            $img = Image::make($image->getRealPath());

            $img->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/'.$imagename));
            $item->img = $destinationPath.'/'.$imagename;
        }
        
        $item->type = strtolower($request->type);
        
        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'value_'.$lang} = $request->{'value_'.$lang};
        }
        
        $item->link = $request->link;
        $item->name = $request->name;

        // if($request->active == 'on'){
        //     $others = Info::where('type', $item->type)->get();
        //     foreach ($others as $other){
        //         $other->active = null;
        //         $other->save();
        //     }

        // }
        // $item->active = $request->active;

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
        $item = Content::find($id);
        $item->delete();
        return back()->with('alert', 'Content was deleted');
    }

}
