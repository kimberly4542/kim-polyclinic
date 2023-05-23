<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class ForecastController extends Controller
{
    public function forecast(Request $request)
    {
        $diagnosis = $request->input('diagnosis');
        $command = 'python /python/forecast.py'.$diagnosis;
        $process = new Process([$command]);
        $process->run();

        $output = $process->getOutput();

        return view('analysis.result',['output'=>$output]);


    }
}


?>