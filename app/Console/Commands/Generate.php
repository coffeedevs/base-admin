<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class Generate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coffee:generate {--json=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold views for AdminLTE';

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
     * @param Filesystem $filesystem
     * @return mixed
     */
    public function handle(Filesystem $filesystem)
    {
        $file = $filesystem->get(base_path() . '/' . $this->option('json'));
        $json = json_decode($file);

        $content = view('generator.templates.model', compact('json'))->render();
        $filesystem->put(resource_path() . '/views/generator/' . $json->model . '.php', "<?php \n" . $content);

        $content = view('generator.templates.migration', compact('json'))->render();
        $filesystem->put(resource_path() . '/views/generator/' . date('Y_m_d_His') . '_create_' . $json->table . '_table.php', "<?php \n" . $content);

        $content = view('generator.templates.controller', compact('json'))->render();
        $filesystem->put(resource_path() . '/views/generator/' . ucfirst($json->table) . 'Controller.php', "<?php \n" . $content);
    }
}
