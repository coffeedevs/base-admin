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
        $filesystem->put(app_path() . '/' . $json->model . '.php', "<?php \n" . $content);

//        $content = view('generator.templates.migration', compact('json'))->render();
//        $filesystem->put(base_path() . '/database/migrations/' . date('Y_m_d_His') . '_create_' . $json->table . '_table.php', "<?php \n" . $content);

        $content = view('generator.templates.controller', compact('json'))->render();
        $filesystem->put(app_path() . '/Http/Controllers/Admin/' . ucfirst($json->table) . 'Controller.php', "<?php \n" . $content);

        if(!$filesystem->exists(resource_path() . '/views/admin/' .$json->table))
            $filesystem->makeDirectory(resource_path() . '/views/admin/' .$json->table,0777);

        $content = view('generator.templates.views.create', compact('json'))->render();
        $filesystem->put(resource_path() . '/views/admin/' .$json->table. '/create.blade.php', $content);

        $content = view('generator.templates.views.edit', compact('json'))->render();
        $filesystem->put(resource_path() . '/views/admin/' .$json->table. '/edit.blade.php', $content);

        $content = view('generator.templates.views.index', compact('json'))->render();
        $filesystem->put(resource_path() . '/views/admin/' .$json->table. '/index.blade.php', $content);

        if(!$filesystem->exists(resource_path() . '/views/admin/' .$json->table. '/includes'))
            $filesystem->makeDirectory(resource_path() . '/views/admin/' .$json->table. '/includes',0777);

        $content = view('generator.templates.views.includes.fields', compact('json'))->render();
        $filesystem->put(resource_path() . '/views/admin/' .$json->table. '/includes/' . 'fields.blade.php', $content);

        $content = view('generator.templates.views.includes.scripts', compact('json'))->render();
        $filesystem->put(resource_path() . '/views/admin/' .$json->table. '/includes/' . 'scripts.blade.php', $content);
    }
}
