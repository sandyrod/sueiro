<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use GuzzleHttp\Client;
use App\Models\Settings;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')->hourly();
        $schedule->call(function(){
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', "https://aio-api-01.xlab.dev/exchange");
            $data = json_decode($response->getBody());
            /* dd($data->currencies->ARS->sources->BNA->format->billete->USD->sell); */
            $record = settings::find(1);
            $record->update([
                'dolar'=> $data->currencies->ARS->sources->BNA->format->billete->USD->sell,
            ]);
        });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
