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
		$user = \Auth::user();
	$mediators = Mediator::where('ownerid',$user['id'])->get();
	
	$targets = [
		[ 'name' => '松尾道明',
		'company' => '株式会社A',
		'medi_name' => '中山　優',
		'medi_depart' => '営業部　営業課']
	];

	return view('myPageList',compact('mediators','targets'));
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
    
        $messages = [ $data['department'] . ' ' . $data['name'] . ' 様',
                    ' 送付アドレス：' . $data['email'],
                    ' ',
                    'いつも優秀な人材を紹介してくれてありがとうございます。',
        			'これからも、我が社に入ってくれそうな人材をぜひともご紹介ください。',
				    'List of Excellent Young-man は、みなさんから人事部に紹介してもいいと思った人たちを登録いただくシステムです。',
				    'もし人事部から連絡してもよい優秀な方がいらっしゃいましたら、ぜひご登録をお願いします。',
                    ' ',
                    'List of Excellent Young-manにはこちらからアクセス下さい。http://localhost/',
                    $data['name'] . ' 様のパスワードは、「' . '」となっております。'
                    ];
				/*
				<p>	個別のログインパスワード</p>
				<p>URL</p>
        */
    


		return view('/showMailTxt',compact('messages'));
	}

}
