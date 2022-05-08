<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        
        $user = User::factory()->create([
            'name' => 'Godwin Tombrown',
            'email' => 'godwintombrown@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tag' => 'laravel,javascript',
        //     'company' => 'InfoTech',
        //     'location' => 'PH, Rivers',
        //     'email' => 'infotech@gmail.com',
        //     'website' => 'https://www.infotech.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
        //     molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
        //     numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
        //     optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
        //     obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
        //     nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,'
        // ]);

        // Listing::create([
        //     'title' => 'Node Junior Developer',
        //     'tag' => 'node,javascript',
        //     'company' => 'Arecent',
        //     'location' => 'PH, Rivers',
        //     'email' => 'arecent@gmail.com',
        //     'website' => 'https://www.arecent.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
        //     molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
        //     numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
        //     optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
        //     obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
        //     nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,'
        // ]);
    }
}
