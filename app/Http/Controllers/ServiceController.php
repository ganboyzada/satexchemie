<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Service;

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = 'uploads';
            $img = Image::make($image->getRealPath());

            $img->save(public_path( $destinationPath.'/'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
        }

        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
            $item->{'desc_'.$lang} = $request->{'desc_'.$lang};
        }

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
        $item = Service::find($id);

        $returnHTML = view('admin.forms.service')->with('item', $item)->render();
        
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
        $item = Service::find($id);

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = 'uploads';
            $img = Image::make($image->getRealPath());

            $img->save(public_path( $destinationPath.'/'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
        }

        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
            $item->{'desc_'.$lang} = $request->{'desc_'.$lang};
        }

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
        $item = Service::find($id);
        $item->delete();
        return back()->with('alert', 'Content was deleted');
    }
}
