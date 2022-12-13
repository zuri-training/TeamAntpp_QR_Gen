<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\file; 
use App\Models\Qrtbl;
use Illuminate\Support\Str;



class QrController extends Controller
{

    public function index(){
        return view('create');
    }

    public function createQrurl(){

        return view('createurl');
    }

    public function createFileqr(){

        return view('createfile');
    }

    public function generateQr(Request $request){
        $qrtbl=new Qrtbl();
        $filtbl=new file();  
       
        if($request->input('type')=='file'){
            /**
           * This function is reponsible for generating qr code and saving
           * it to db .
           *
           * 
           */
       
                 
                  $image_name = time().'.'.$request->file;

                $fileid=Str::random(5).time();
              $image_path=public_path('files').'/'.$image_name;
              move_uploaded_file($image_name,public_path('files'));
              $qr= QrCode::generate($image_path);
               $filtbl->url = $image_path;
               $filtbl->id=$fileid;
               $filtbl->user_id = Auth::user()->id;
               $filtbl->save();

               $qrtbl->user_id = Auth::user()->id;
               $qrtbl->qr_type= $request->type;
               $qrtbl->qrcode= base64_encode($qr);
               $qrtbl->file_id=$fileid;
               $qrtbl->save();

               return back()->with('success','You have successfully generated Qrcode for your file.');
                
        
            }elseif($request->input('type')=='url'){
      
                $qr= QrCode::generate($request->url);
                
              
                $qrtbl->user_id = Auth::user()->id;
                $qrtbl->qr_type= $request->type;
                $qrtbl->qrcode= base64_encode($qr);
                $qrtbl->save();

                return back()->with('success','You have successfully generated Qrcode for your url.');

              }
    }


}
