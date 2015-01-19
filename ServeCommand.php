<?php namespace Valorin\ArtisanServe;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class ServeCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'serve';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Serve the application on the PHP development server.';

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
    public function fire()
    {
        $host = $this->option('host');
        $port = $this->option('port');

        chdir($this->laravel['path.public']);

        $this->info("Laravel development server started on http://{$host}:{$port}/");

        passthru(PHP_BINARY . " -S {$host}:{$port} 2>&1");
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['host', null, InputOption::VALUE_OPTIONAL, 'The host address to serve the application on.', 'localhost'],
            ['port', null, InputOption::VALUE_OPTIONAL, 'The port to serve the application on.', 8000],
        ];
    }
}
