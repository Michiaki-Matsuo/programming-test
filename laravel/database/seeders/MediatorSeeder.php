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
            'department' => 'テスト事業部テスト部テスト課',
            'email' => 'test1@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')]);
        Mediator::create([
            'name' => 'テスト次郎',
            'department' => 'テスト事業部',
            'email' => 'test2@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')]);
        Mediator::create([
            'name' => 'テスト三郎',
            'department' => 'テスト事業部テスト部',
            'email' => 'test3@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')]);
        Mediator::create([
            'name' => 'テスト四郎',
            'department' => 'テスト事業部テスト部',
            'email' => 'test4@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')]);
        Mediator::create([
            'name' => 'テスト五郎',
            'department' => 'テスト事業部テスト部総務課',
            'email' => 'test5@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')]);
        Mediator::create([
            'name' => 'テスト六郎',
            'department' => 'テスト事業部テスト部サービス１課',
            'email' => 'test6@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')]);  
        Mediator::create([
            'name' => 'テスト七郎',
            'department' => 'テスト事業部テスト部',
            'email' => 'test7@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')]);
        Mediator::create([
            'name' => 'テスト八郎',
            'department' => 'テスト事業部テスト部',
            'email' => 'test8@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')]);
        Mediator::create([
            'name' => 'テスト九郎',
            'department' => 'テスト事業部テスト部',
            'email' => 'test9@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')]);
        Mediator::create([
            'name' => 'テスト拾郎',
            'department' => 'テスト事業部テスト部経理課',
            'email' => 'test10@test.jp',
            'user_id' => '1',
            'password'=> Hash::make('test')]);
    }
}