<?php namespace Bantenporv\MasterTarif\Console\Commands;

use Illuminate\Console\Command;

/**
 * The MasterTarifCommand class.
 *
 * @package Bantenporv\MasterTarif
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class MasterTarifCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenporv:master-tarif';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenporv\MasterTarif package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenporv\MasterTarif package');
    }
}
