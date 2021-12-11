<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Mail;
use App\Http\Requests;
use Session;

class InquiryController extends Controller
{
    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $item = Inquiry::find($id);

        $returnHTML = view('admin.forms.inquiry')->with('item', $item)->render();
        
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

    
    public function destroy($id)
    {
        $item = Inquiry::find($id);
        $item->delete();
        return back()->with('alert', 'Content was deleted');
    }

    public function send_inquiry(Request $request) {
       $data = array(
          'name'=>request()->name,
          'email' => request()->email,
          'phone' => request()->phone,
          'company' => request()->company,
          'notes' => request()->message,
       );
   
       Mail::send(['html'=>'mail'], $data, function($message) {
          $message->to(request()->email, request()->name)->subject
             ('Natura-ya xoş gəlmisiniz!, '.request()->name);
          $message->from('info@natura.az','Natura Construction');
       });

       Mail::send(['html'=>'mailtoowner'], $data, function($message) {
          $message->to('info@natura.az', 'Natura Construction')->subject
             ('Yeni müraciət');
          $message->from('info@natura.az','no-reply');
       }); 

        $item = new Inquiry;

        $item->name = $request->name;
        $item->email = $request->email;
        $item->company = $request->company;
        $item->phone = $request->phone;
        $item->message = $request->message;
        $item->timestamp = now();

        $item->save();


      return back()->with('message', 'Müraciətiniz üçün təşəkkür edirik, sizə ən qısa zamanda geri dönüş ediləcəkdir.');;
   }

}
