<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\Models\User::all();

        $users->each(function ($user) {
            $user->articles()->save(
                factory(App\Models\Article::class)->make()
            );
        });
    }
}
