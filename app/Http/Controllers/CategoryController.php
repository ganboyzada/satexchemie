<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navigation;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Navigation;

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg',
        ]);

        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
            $item->{'desc_'.$lang} = $request->{'desc_'.$lang};
        }

        if($request->category == null){
            $item->parent_id = null;
        }else{
            $item->parent_id = $request->category;
        }

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = 'uploads';

            $img = Image::make($image->getRealPath());

            $img->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/bg_'.$imagename));

            $item->img = $destinationPath.'/bg_'.$imagename;
        }
        
        $item->route = str_replace(' ', '-', trim(strtolower($request->name_en)));

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

    public function status(Request $request)
    {
        $item = Navigation::find($request->id);
        $status = $request->toggle;
        if($status == 1){
            $item->toggle = 0;
        }
        else{
            $item->toggle = 1;
        }
        $item->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $item->id,
            'toggle' => $item->toggle
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
        $item = Navigation::find($id);

        $returnHTML = view('admin.forms.category')->with('item', $item)->render();
        
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
        $item = Navigation::find($id);

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg',
        ]);
        
        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
            $item->{'desc_'.$lang} = $request->{'desc_'.$lang};
        }

        if($request->category == null){
            $item->parent_id = null;
        }else{
            $item->parent_id = $request->category;
        }

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = 'uploads';

            $img = Image::make($image->getRealPath());

            $img->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/bg_'.$imagename));

            $item->img = $destinationPath.'/bg_'.$imagename;
        }

        $item->route = str_replace(' ', '-', trim(strtolower($request->name_en)));

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
        $item = Navigation::find($id);
        $item->delete();
        return back()->with('alert', 'Content was deleted');
    }

    public function bulk_delete(Request $request){
        Navigation::whereIn('id', $request->selected)->delete();

        return response()->json([
            'message' => 'success',
        ]);
    }
}
