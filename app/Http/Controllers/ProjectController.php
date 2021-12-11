<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectPhoto;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Project;

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
            })->insert('img/satex_logo_watermark.png', 'bottom-right', 30, 20)->save(public_path( $destinationPath.'/'.$imagename));

            $img = Image::make($image->getRealPath());

            $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/thumb_'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
            $item->thumb = $destinationPath.'/thumb_'.$imagename;
        }

        $item->categ_id = $request->category;
        $item->price = $request->price;
        
        if($request->featured == 'on'){
            $item->featured = true;
        } else{
            $item->featured = false;
        }
        
        
        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
            $item->{'desc_'.$lang} = $request->{'desc_'.$lang};
        }

        $item->save();

        if($files=$request->file('images')){
            foreach($files as $k=>$image){
                $pic = new ProjectPhoto;

                $imagename = 'image_'.time().'_'.$k.'_'.$image->getClientOriginalName();

                $destinationPath = 'uploads';
                $img = Image::make($image->getRealPath());

                $img->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path( $destinationPath.'/'.$imagename));

                $pic->project_id = $item->id;
                $pic->img = $destinationPath.'/'.$imagename;

                $pic->save();
            }
        }
        
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
        $item = Project::find($id);

        $returnHTML = view('admin.forms.project')->with('item', $item)->render();
        
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
        $item = Project::find($id);

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
            })->insert('img/satex_logo_watermark.png', 'bottom-right', 30, 20)->save(public_path( $destinationPath.'/'.$imagename));

            $img = Image::make($image->getRealPath());

            $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/thumb_'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
            $item->thumb = $destinationPath.'/thumb_'.$imagename;
        }

        $item->categ_id = $request->category;
        $item->price = $request->price;

        if($request->featured == 'on'){
            $item->featured = true;
        } else{
            $item->featured = false;
        }
        
        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
            $item->{'desc_'.$lang} = $request->{'desc_'.$lang};
        }

        $item->save();

        if($files=$request->file('images')){
            foreach($files as $k=>$image){
                $pic = new ProjectPhoto;

                $imagename = 'image_'.time().'_'.$k.'_'.$image->getClientOriginalName();

                $destinationPath = 'uploads';
                $img = Image::make($image->getRealPath());

                $img->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path( $destinationPath.'/'.$imagename));

                $pic->project_id = $item->id;
                $pic->img = $destinationPath.'/'.$imagename;

                $pic->save();
            }
        }

        return back()->with('alert', 'Content is saved');
    }

    public function delete_photo(Request $request)
    {
        ProjectPhoto::where('id', $request->id)->delete();

        return response()->json([
            'message' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Project::find($id);
        if(ProjectPhoto::where('project_id', $id)->count()>0){
            foreach(ProjectPhoto::where('project_id', $id)->get() as $photo){
                if($photo->img != NULL){
                    $img_path = public_path($photo->img);
                    if(file_exists($img_path)){
                        unlink($img_path);
                    }
                 }
                $photo->delete();
            }
        }
        
        if($item->img != NULL){
                $img_path = public_path($item->img);
                $thumb_path = public_path($item->thumb);
                if(file_exists($img_path)){
                    unlink($img_path);
                }
                if(file_exists($thumb_path)){
                    unlink($thumb_path);
                }
        }

        $item->delete();
        return back()->with('alert', 'Content was deleted');
    }

    // BULK UPLOAD

    public function bulk_upload(){
        return view('admin.pages.projects_bulk');
    }

    public function bulk_upload_store(Request $request)
    {
        
        if($files=$request->file('images')){
            foreach($files as $k=>$image){
                $item = new Project;

                $imagename = 'image_'.time().'_'.$k.'_'.$image->getClientOriginalName();

                $destinationPath = 'uploads';
                $img = Image::make($image->getRealPath());

                $img->resize(1600, 900, function ($constraint) {
                    $constraint->aspectRatio();
                })->insert('img/satex_logo_watermark.png', 'bottom-right', 30, 20)->save(public_path( $destinationPath.'/'.$imagename));

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

        return redirect()->route('admin.projects')->with('alert', 'Content is saved');
    }


    public function bulk_delete(Request $request){
        $items = Project::whereIn('id', $request->selected)->get();
        
        foreach($items as $item){
            if(ProjectPhoto::where('project_id', $item->id)->count()>0){
                foreach(ProjectPhoto::where('project_id', $item->id)->get() as $photo){
                    if($photo->img != NULL){
                        $img_path = public_path($photo->img);
                        if(file_exists($img_path)){
                            unlink($img_path);
                        }
                    }
                    $photo->delete();
                }
            }

            if($item->img != NULL){
                $img_path = public_path($item->img);
                $thumb_path = public_path($item->thumb);
                if(file_exists($img_path)){
                    unlink($img_path);
                }
                if(file_exists($thumb_path)){
                    unlink($thumb_path);
                }
            }
            
            $item->delete();
        }
        
        return response()->json([
            'message' => 'success',
        ]);

    }
}