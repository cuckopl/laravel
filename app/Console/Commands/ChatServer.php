<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ChatServer extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chat:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $users = DB::select('select * from users');
        try {
            include(app_path().'/Chat/server.php');
        } catch (\Exception $ex) {
            var_dump($ex->getMessage(),$ex->getFile(),$ex->getLine());
        }
    }

}
