<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Target;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Target::create([
            'name' => '岸田文雄',
            'company' => '内閣府',
            'mediator_id' => '1'
        ]);
    }
}
