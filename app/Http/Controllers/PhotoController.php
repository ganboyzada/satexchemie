<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Photo;

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = 'uploads';
            $img = Image::make($image->getRealPath());

            $img->resize(1600, 900, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/'.$imagename));

            $img = Image::make($image->getRealPath());

            $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/thumb_'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
            $item->thumb = $destinationPath.'/thumb_'.$imagename;
        }

        $item->categ_id = $request->category;
        
        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
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
        $item = Photo::find($id);

        $returnHTML = view('admin.forms.photo')->with('item', $item)->render();
        
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
        $item = Photo::find($id);

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = 'uploads';
            $img = Image::make($image->getRealPath());

            $img->resize(1600, 900, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/'.$imagename));

            $img = Image::make($image->getRealPath());

            $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/thumb_'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
            $item->thumb = $destinationPath.'/thumb_'.$imagename;
        }

        $item->categ_id = $request->category;
        
        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
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
        $item = Photo::find($id);
        $item->delete();
        return back()->with('alert', 'Content was deleted');
    }
    
    public function bulk_upload(){
        return view('admin.pages.photos_bulk');
    }

    public function bulk_upload_store(Request $request)
    {
        
        if($files=$request->file('images')){
            foreach($files as $k=>$image){
                $item = new Photo;

                $imagename = 'image_'.time().'_'.$k.'_'.$image->getClientOriginalName();

                $destinationPath = 'uploads';
                $img = Image::make($image->getRealPath());

                $img->resize(1600, 900, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path( $destinationPath.'/'.$imagename));

                $img = Image::make($image->getRealPath());

                $img->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path( $destinationPath.'/thumb_'.$imagename));

                $item->img = $destinationPath.'/'.$imagename;
                $item->thumb = $destinationPath.'/thumb_'.$imagename;

                $item->categ_id = $request->category;
        
                $item->save();
            }
        }
        /*Insert your data*/

        return redirect()->route('admin.photos')->with('alert', 'Content is saved');
    }

    
    public function bulk_delete(Request $request){
        Photo::whereIn('id', $request->selected)->delete();

        return response()->json([
            'message' => 'success',
        ]);

    }

}