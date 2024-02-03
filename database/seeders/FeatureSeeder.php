<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'name' => 'Multiplayer',
            ],
            [
                'name' => 'Singleplayer',
            ],
            [
                'name' => 'Co-op',
            ],
            [
                'name' => 'PvP',
            ],
            [
                'name' => 'PvE',
            ],
            [
                'name' => 'Cross-platform',
            ],
            [
                'name' => 'Controller support',
            ],
            [
                'name' => 'VR support',
            ],
        ];
        foreach ($features as $feature) {
            $new_feature = new \App\Models\Feature();
            $new_feature->name = $feature['name'];
            $new_feature->save();
        }
    }
}
