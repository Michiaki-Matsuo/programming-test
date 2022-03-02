<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Mediator;
class MediatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mediator::create([
            'name' => 'テスト太郎',
            'department' => 'テスト事業部テスト部',
            'email' => 'test@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')
        ]);
    }
}
