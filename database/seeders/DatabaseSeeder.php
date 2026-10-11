<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\App;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        App::updateOrCreate(
            ['name' => 'Fenix CRM'],
            [
                'url' => 'https://crm.fenix.ltd',
                'description' => 'Fenix CRM application',
                'status' => 'active',
            ]
        );

        App::updateOrCreate(
            ['name' => 'Zeno'],
            [
                'url' => 'https://zeno.fenixapp.net',
                'description' => 'Zeno application',
                'status' => 'active',
            ]
        );

        App::updateOrCreate(
            ['name' => 'App Coming Soon'],
            [
                'url' => null,
                'description' => 'Application coming soon',
                'status' => 'coming_soon',
            ]
        );
    }
} 