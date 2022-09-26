<?php

namespace App\Http\Controllers;

use thiagoalessio\TesseractOCR\TesseractOCR;
use Illuminate\Http\Request;

class OCRController extends Controller
{
    public function index(Request $request){
        return view('ocr_reader');
    }

    public function fileReader(Request $request){
 
        if ($files = $request->file('file')) {
            $image = $request->file;    
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/ocr');
            $image->move($destinationPath, $name);
            $file_path = $destinationPath .'/'. $name;
            $ocr =  (new TesseractOCR($file_path))
                    ->executable('C:\Program Files\Tesseract-OCR\tesseract.exe')
                    ->run();
            $ocr = str_replace('\n' ,' ' , $ocr);
            $status_data = ['status_code' => 200 , 'message' => "Data Found." ,'data' => $ocr];
            return $status_data;
        }

  
    }



}
