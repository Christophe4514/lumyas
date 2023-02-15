<?php

namespace App\Console\Commands;

use App\Models\Role;
use GuzzleHttp\Psr7\Request;
use Illuminate\Console\Command;

class CreateRoleAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:role';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the first role in application';

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
     * @return int
     */
    public function handle()
    {
        $role = Role::create(['name' => 'Admin']);

        return $this->info("the Admin user create successfully");
    }
}
