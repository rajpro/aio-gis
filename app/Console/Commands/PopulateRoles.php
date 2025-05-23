<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PopulateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'populate:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate roles with permissions';

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
        // Create roles
        Role::create(['name' => 'Super Admin', 'guard_name' => 'web']);
        Role::create(['name' => 'GP', 'guard_name' => 'web']);
        Role::create(['name' => 'NGO', 'guard_name' => 'web']);

        // Create permissions
        Permission::create(['name' => 'view reports', 'guard_name' => 'web']);
        Permission::create(['name' => 'view records', 'guard_name' => 'web']);
        Permission::create(['name' => 'view admin', 'guard_name' => 'web']);
        Permission::create(['name' => 'view household', 'guard_name' => 'web']);
        Permission::create(['name' => 'view household pending', 'guard_name' => 'web']);
        Permission::create(['name' => 'view user', 'guard_name' => 'web']);
        Permission::create(['name' => 'view permission', 'guard_name' => 'web']);
        Permission::create(['name' => 'view setting', 'guard_name' => 'web']);
        Permission::create(['name' => 'update help', 'guard_name' => 'web']);
        
        Permission::create(['name' => 'update household', 'guard_name' => 'web']);
        Permission::create(['name' => 'update household pending', 'guard_name' => 'web']);
        Permission::create(['name' => 'update user', 'guard_name' => 'web']);
        Permission::create(['name' => 'update permission', 'guard_name' => 'web']);
        Permission::create(['name' => 'update setting', 'guard_name' => 'web']);

        Permission::create(['name' => 'delete user', 'guard_name' => 'web']);
    }
}
