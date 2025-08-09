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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        EmailList::factory()->count(50)->create()
            ->each(function (EmailList $list) {
                Subscriber::factory()->count(rand(50, 200))->create([
                    'email_list_id' => $list->id,
                ]);
            });
    }
}
