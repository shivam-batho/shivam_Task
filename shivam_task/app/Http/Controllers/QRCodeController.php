<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qrcode;
class QRCodeController extends Controller
{
   public function index(Request $request){
    $qrcode = Qrcode::orderBy('id','DESC')->get();
    return view('qrcode_generator' , compact('qrcode'));
   }
    

    public function generateQR(Request  $request){
        $date_string = strtotime(date('Y-m-d'));
        $file_name = '/qrcode/' . str_replace(' ','', $request->text_box).'_' . $date_string . '.png';
        $file_path = public_path() . $file_name;
        $qr_text = 'https://www.google.com/search?q=' . $request->text_box;
        $qr_code = \QrCode::size(400)
                            ->format('png')
                            ->generate($qr_text , $file_path);
        $qr_data = new Qrcode();
        $qr_data->text_box = $request->text_box;
        $qr_data->qrcode_path = $file_name;
        $qr_data->save();
        return redirect('/');
    }
}
