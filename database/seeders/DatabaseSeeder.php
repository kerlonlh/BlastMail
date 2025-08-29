<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\EmailList;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Subscriber;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            TemplateSeeder::class,
            EmailListSeeder::class,
            CampaignSeeder::class,
            CampaignMailSeeder::class
        ]);
    }
}
