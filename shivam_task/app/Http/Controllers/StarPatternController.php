<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarPatternController extends Controller
{
    public function index(Request $request){     
        return view('star_pattern');
    }

    public function generateStarPattern(Request $request){
        $size = $request->pattern_len;
        $container = ''; 
        $k = $size%2 != 0 ? $size : $size  - 1;
        $container .= '<div>';    
        for ($i = $size; $i >= 1; $i--){ 
            $text = '';
            if($i%2 != 0){  
                for ($j = 1; $j <= $k; $j++) {
                    if($i <= $j){
                        $text .='&nbsp;' . ' * ' . '&nbsp;';
                    }else{
                        $text .='&nbsp;'. ' &nbsp; ' .'&nbsp;';
                    }
                }
                $container .= '<div><strong>' . $text  . '</strong></div>';
                $container .=  "<br>";  
            }
        }
        $container .= '</div>';
        $status_data = ['status_code' => 200 , 'message' => "Data Found." ,'data' => $container];
        return $status_data;
       
    }

}
