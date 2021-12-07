<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Controllers\AdministradorController;

class Kernel extends ConsoleKernel
{
    protected $periodicidade = "mensal";
    protected $horario = "00:00";

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        if($periodicidade == "diario"){
            $schedule->call(AdministradorController::baixarBackup())->dailyAt($horario);
        }else if($periodicidade == "semanal"){
            $schedule->call(AdministradorController::baixarBackup())->weeklyOn(0, $horario);
        }else{
                $schedule->call(AdministradorController::baixarBackup())->monthlyOn(28, $horario);
        }
    }

    /**
     * Define a periodicidade e o horario em que o backup automatico é realizado
     * @param periodo - periodicidade do backup (diario, semanal, mensal)
     * @param hora - horario em que o backup sera realizado dentro da periodicidade definida
     */
    public static function setPeriodicidadeHorario($periodo, $hora){
        $periodicidade = $periodo;
        $horario = $hora;        
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
