<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mediator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    /*
     * Show MyPage for Human Resource Department
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myPage()
    {
	$meditators = [
		['name' => 'さぬき太郎',
		'depart' => '製麺部うどん課', 
		'address' => 'test@kagawa.pref.jp'],
		['name' => '阿波三芳',
		'depart' => '生鮮食品部玉ねぎ課', 
		'address' => 'test@tokusima.pref.jp'],
		['name' => '松本伊予',
		'depart' => '生鮮食品部柑橘課', 
		'address' => 'test@ehime.pref.jp'],
		['name' => '高知東生',
		'depart' => '食品部清酒課', 
		'address' => 'test@kochi.pref.jp'],
		['name' => 'さぬき太郎',
		'depart' => '製麺部うどん課', 
		'address' => 'test@kagawa.pref.jp'],
		['name' => '阿波三芳',
		'depart' => '生鮮食品部玉ねぎ課', 
		'address' => 'test@tokusima.pref.jp'],
		['name' => '松本伊予',
		'depart' => '生鮮食品部柑橘課', 
		'address' => 'test@ehime.pref.jp'],
		['name' => '高知東生',
		'depart' => '食品部清酒課', 
		'address' => 'test@kochi.pref.jp'],
		['name' => '松本伊予',
		'depart' => '生鮮食品部柑橘課', 
		'address' => 'test@ehime.pref.jp'],
		['name' => '高知東生',
		'depart' => '食品部清酒課', 
		'address' => 'test@kochi.pref.jp']
		];
	$targets = [
		[ 'name' => '松尾道明',
		'company' => '株式会社A',
		'medi_name' => '中山　優',
		'medi_depart' => '営業部　営業課']
	];

	return view('myPageList',compact('meditators','targets'));
    }
    public function addMediator()
    {
	return view('addMediator');
    }
    public function insertMediator(Request $request)
    {
		$data = $request->all();
		$user = \Auth::user();

		Mediator::insert([
			'name' => $data['name'],
			'department' => $data['department'],
			'email' => $data['email'],
			'ownerid' => $user['id']
		]);

		return redirect('/');
    }
	public function showMailTxt(Request $request)
	{
		$data = $request->all();
    		// dd($data);


		return view('/showMailTxt');
	}

}
