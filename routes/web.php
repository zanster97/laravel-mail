<?php

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail',function(){
    return view('send-mail');
});

Route::post('send-mail', function (Request $request){
    // dd($request->all());
    // Mail::raw($request->message,function($message) use ($request){
    //     $message->to($request->email)
    //     ->subject('Laravel Test Email')
    //     ->from('saviovaz233@gmail.com','Savio Vaz');
    // });
    // Mail::to($request->email)->send(new SendMail($request->message));
    Mail::to($request->email)->queue(new SendMail($request->message));
    dd('Email Sent');
})->name('send.mail');

Route::get('components',function(){
    return view('blade-components');
});

Route::get('session', function (Request $request) {
    //put
    // $request->session()->put('foo1','bar2');
    //session(['foo2',['bar1','bar2','bar3']]);
    //Session::put('foo3','bar');
    //get
    // $value= $request->session()->get('foo1');
    // $value= Session::get('foo2');
    // $value= session('foo3','default');
    //delete
    // $request->session()->forget('foo1');
    // session()->forget('foo2');
    // Session::forget(['foo3']);
    // dd($value);
    //remove all at once
    // Session::flush();
    // $request->session()->flush();
    // session()->flush();
    return view('session');
});
// Route::get('/session', function () {
//     session(['username' => 'Savio']);
//     return view('session');
// });
