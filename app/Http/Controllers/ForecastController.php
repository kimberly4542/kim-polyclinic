<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class ForecastController extends Controller
{
    public function forecast(Request $request)
    {
        set_time_limit(300);
        $diagnosis = $request->input('diagnosis');
    
        ob_start();
        passthru('G:\laragon\www\kim-polyclinic\python\env\Scripts\python.exe G:\laragon\www\kim-polyclinic\python\newforecast.py -d="' . $diagnosis . '"');
        $output = ob_get_clean();
 
        $data = trim($output);
        
        $hasImage = true;
      
        $csvfiles = [
            'dengue' => 'G:\laragon\www\kim-polyclinic\public\image\evaluationdengue.csv',
            'diabetes' => 'G:\laragon\www\kim-polyclinic\public\image\evaluationdiabetes.csv',
            'malaria' => 'G:\laragon\www\kim-polyclinic\public\image\evaluationmalaria.csv'
        ];

        $selectedCSV = $csvfiles[$diagnosis];
        if($diagnosis == 'dengue' && file_exists($selectedCSV)){
            $file =fopen($selectedCSV,'r');
            if($file){
                while (($row = fgetcsv($file)) !== false){
                    $csvData[] =$row;
                }
                fclose($file);
            }
        }
        elseif($diagnosis == 'diabetes' && file_exists($selectedCSV)){
            $file =fopen($selectedCSV,'r');
            if($file){
                while (($row = fgetcsv($file)) !== false){
                    $csvData[] =$row;
                }
                fclose($file);
            }
        }
        elseif($diagnosis == 'malaria' && file_exists($selectedCSV)){
            $file =fopen($selectedCSV,'r');
            if($file){
                while (($row = fgetcsv($file)) !== false){
                    $csvData[] =$row;
                }
                fclose($file);
            }
        }

        
        
        return view('cityadmin.stats',compact('hasImage','csvData'));
        
        
        //     throw new ProcessFailedException($process);
        // }
        // $output = $process->getOutput();
        // return view('stats',['output'=>$output]);

    }
}


?>