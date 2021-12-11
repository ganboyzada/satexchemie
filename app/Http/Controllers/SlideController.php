<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Intervention\Image\Facades\Image;

class SlideController extends Controller
{

    public function store(Request $request)
    {
        $item = new Slider;

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg,tif',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = 'uploads';
            $img = Image::make($image->getRealPath());

            $img->resize(1600, 900, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
        }

        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
        }

        $item->save();
        return back()->with('alert', 'Content is saved');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Slider::find($id);

        $returnHTML = view('admin.forms.slide')->with('item', $item)->render();
        
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

    public function update(Request $request, $id)
    {
        $item = Slider::find($id);

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg,tif',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = 'uploads';
            $img = Image::make($image->getRealPath());

            $img->resize(1600, 900, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
        }

        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
        }
        

        $item->save();
        return back()->with('alert', 'Content is saved');
    }

    public function destroy($id)
    {
        $item = Slider::find($id);
        $item->delete();
        return back()->with('alert', 'Content was deleted');
    }
}
