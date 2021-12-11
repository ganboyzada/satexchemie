<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogue;
use Intervention\Image\Facades\Image;

class CatalogueController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Catalogue;

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = 'uploads';
            $img = Image::make($image->getRealPath());

            $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
        }

        if($request->hasFile('pdf')){
            $pdf = $request->file('pdf');
            $pdfname = 'document_'.time().'_'.$pdf->getClientOriginalName();
            $destinationPath = 'uploads';
            $pdf->move($destinationPath, $pdfname);  
            $item->pdf = $destinationPath.'/'.$pdfname;
        }else if(!empty($request->link)){
            $item->pdf = $request->link;
        }
        
        $item->company = $request->company;

        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
            // $item->{'desc_'.$lang} = $request->{'desc_'.$lang};
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
        $item = Catalogue::find($id);

        $returnHTML = view('admin.forms.catalogue')->with('item', $item)->render();
        
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
        $item = Catalogue::find($id);

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagename = 'image_'.time().'_'.$image->getClientOriginalName();

            $destinationPath = 'uploads';
            $img = Image::make($image->getRealPath());

            $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path( $destinationPath.'/'.$imagename));

            $item->img = $destinationPath.'/'.$imagename;
        }

        if($request->hasFile('pdf')){
            $pdf = $request->file('pdf');
            $pdfname = 'document_'.time().'_'.$pdf->getClientOriginalName();
            $destinationPath = 'uploads';
            $pdf->move($destinationPath, $pdfname);  
            $item->pdf = $destinationPath.'/'.$pdfname;
        }else if(!empty($request->link)){
            $item->pdf = $request->link;
        }
        
        $item->company = $request->company;

        foreach(['en', 'az', 'ru', 'de'] as $lang){
            $item->{'name_'.$lang} = $request->{'name_'.$lang};
            // $item->{'desc_'.$lang} = $request->{'desc_'.$lang};
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
        $item = Catalogue::find($id);
        $item->delete();
        return back()->with('alert', 'Content was deleted');
    }
}
