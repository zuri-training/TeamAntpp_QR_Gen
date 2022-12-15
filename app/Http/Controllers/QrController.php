<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\file; 
use App\Models\Qrtbl;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class QrController extends Controller
{

    public function index(){
                                /*
|--------------------------------------------------------------------------
| This function returns the main page
|--------------------------------------------------------------------------
|
|
*/
        return view('create');
    }

    public function createQrurl(){
      
                          /*
|--------------------------------------------------------------------------
| This function displays create qr url blade
|--------------------------------------------------------------------------
|
|
*/


        return view('createurl');
    }
    public function fileqrroute(Request $request){
                                /*
|--------------------------------------------------------------------------
| This function enable  the user to download scan qr
|--------------------------------------------------------------------------
|
|
*/
     
        return Storage::download('public/'.$request->url);
    }


    public function createFileqr(){
                                /*
|--------------------------------------------------------------------------
| This function Displays the create file blade
|--------------------------------------------------------------------------
|
|
*/

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
       
                 
        

        $fileid=Str::random(5).time();
           


               $request->validate([
                'files' => 'required|image|mimes:png,jpg,jpeg|max:2048'
            ]);
            
       
     $file = $request->file('files');     
     $name = $file->hashName();
     $extension = $file->extension();
    $path = Storage::putFile('public', $file);

 $qr= QrCode::generate(url('/fileqroute/'.$name));
               $filtbl->url = $name;
               $filtbl->id=$fileid;
               $filtbl->user_id = Auth::user()->id;
               $filtbl->save();

               $qrtbl->user_id = Auth::user()->id;
               $qrtbl->qr_type= $request->type;
               $qrtbl->qrcode= base64_encode($qr);
               $qrtbl->file_id=$fileid;
               $qrtbl->save();
         
               $social_url= url('/downloadqrpdf/'. base64_encode($qr));
               $shareComponent = \Share::page(
                   $social_url,
                   'Qr Code',
             
            )
            ->facebook()
            ->twitter()
            
            ->whatsapp() ; 


            return back()->with('success','You have successfully generated Qrcode for your file.')->with('data',$qr)->with('shareComponent',$shareComponent);
        
            }elseif($request->input('type')=='url'){
      
                $qr= QrCode::generate($request->url);
                
              
                $qrtbl->user_id = Auth::user()->id;
                $qrtbl->qr_type= $request->type;
                $qrtbl->qrcode= base64_encode($qr);
                $qrtbl->save();

                $social_url= url('/downloadqrpdf/'. base64_encode($qr));
                $shareComponent = \Share::page(
                    $social_url,
                    'Qr Code',
                )
                ->facebook()
                ->twitter()
                
                ->whatsapp() ;       
               

                return back()->with('success','You have successfully generated Qrcode for your url.')->with('data',$qr)->with('shareComponent',$shareComponent);

              }
    }

    public function downloadqrpdf($qr){
        /**
             * This function is allows  the user to downloader qr code in pdf format
             * .
             *
             * 
             */
        
              $pdf = \App::make('dompdf.wrapper');
          $html='<img src="data:image/svg+xml;base64,' . $qr . '" ...>';
          $pdf->loadHTML($html);
        
          return $pdf->download('myqr.pdf');
        
            }

    public function viewDashboard(){
        $userId = Auth::user()->id;
        $myRecent = Qrtbl::where('user_id',$userId)->orderBy('created_at', 'desc')->take(3)->get();
        return view('dashboard',compact('myRecent'));
    }


    /*
    *Method to get all QR Codes for Logged in User
    */
    public function viewAll()
    {
        $userId = Auth::user()->id;

        $myqrCodes = Qrtbl::where('user_id',$userId)->get();

        return view('myqrcodes',compact('myqrCodes'));
    }

    /*
    *Method to show a single QR Code
    */
    public function viewOne($id)
    {
        $userId = Auth::user()->id;
        $qrCode = Qrtbl::where('user_id',$userId)
            ->where('id',$id)
            ->get();
        return view('singleqrview',compact('qrCode'));
    }


       



}
