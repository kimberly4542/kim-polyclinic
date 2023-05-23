<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\Process\Process;

class ForecastController extends Controller
{
    public function forecast(Request $request)
    {
        set_time_limit(0);
        $diagnosis = $request->input('diagnosis');

        $command = 'python3.9 python/newforecast.py ' . $diagnosis;
        $process = new Process($command);
        $process->setTimeout(null);
        $process->run();
        $process->wait();

        return view('cityadmin.stats', ['output' => $diagnosis]);
    }

    public function display(Request $request)
    {
        $request->validate([
            'diagnosis' => [Rule::in(['Malaria', 'Dengue', 'Diabetes'])],
        ]);

        return asset('pic_' . $request->diagnosis . '.svg');
    }
}

?>