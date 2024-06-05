<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Mail\SubscribeMail;

class WebController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function outdoor_led_screen_ads(){
        return view('outdoor-led-screen-ads');
    }
    public function digital_marketing(){
        return view('digital-marketing');
    }
    public function guerrilla_marketing(){
        return view('guerrilla-marketing');
    }
    public function cgi_service(){
        return view('cgi-service');
    }
    public function contact(){
        return view('contact');
    }
    public function mail(Request $request){
        // dd($request);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'phone'=>'required|numeric',
            'message'=>'required'
            
        ]);
        $details = [
            'name' =>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'phone'=>$request->phone,
            'message' =>$request->message,
            ];
            $mail = "test@htftools.com";
           // dd($mail);
            Mail::to('saujanyaplatforms@gmail.com')->send(new SendMail($details));
            return redirect('contact')->with('success','Mail Send Successfully!');
    }
    
    public function subscribe(Request $request){
        // dd($request);
        $request->validate([
            'email'=>'required|email',
            
        ]);
        $subscribe = [
            'email'=>$request->email,
            ];
            $mail = "test@htftools.com";
           // dd($mail);
            mail::to('saujanyaplatforms@gmail.com')->send(new SubscribeMail($subscribe));
            return redirect()->back()->with('success','Mail Send Successfully!');
    }
}
