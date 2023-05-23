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
        // $command = "python G:\laragon\www\kim-polyclinic\python\newforecast.py" . $diagnosis;
        // $process = new Process($command);
        // $process->run();
        
        // $output = $process->getOutput();
        ob_start();
        passthru('G:\laragon\www\kim-polyclinic\python\env\Scripts\python.exe G:\laragon\www\kim-polyclinic\python\newforecast.py -d="' . $diagnosis . '"');
        $output = ob_get_clean();
 
        $data = trim($output);
        
        $hasImage = true;
        return view('cityadmin.stats', compact('hasImage'));
        
        // if(!$process->isSuccessful()){
        //     throw new ProcessFailedException($process);
        // }
        // $output = $process->getOutput();
        // return view('stats',['output'=>$output]);

    }
}


?>