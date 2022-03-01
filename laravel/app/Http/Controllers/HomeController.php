<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Mediator;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendRequest;

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
        $data=['name'=>'','department'=>'','email'=>''];
        return view('addMediator',compact('data'));
    }
    public function editMediator(Request $request)
    {
		$data = $request->all();
	return view('addMediator',compact('data'));
    }
    public function commitMediator(Request $request)
    {
		$data = $request->all();
		$user = \Auth::user();

        // 同じメールアドレスを持つ情報提供者がいるか確認
        $exist_mediator = Mediator::where('email', $data['email'])->first();
        if( empty($exist_mediator['id']) ){
            //いなければ情報提供者をインサート
            Mediator::insert([
                'name' => $data['name'],
                'department' => $data['department'],
                'email' => $data['email'],
                'ownerid' => $user['id'],
                'password' => Hash::make($data['password'])
            ]);
        }
        //メールを送信する。
        Mail::to('test@example.com')->send(new sendRequest);
        
		return redirect('/');
    }
	public function confirmWithDraft(Request $request)
	{
		$data = $request->all();
        $user = \Auth::user();
        
        //数字と英語の小文字と大文字が混ざったランダムな 8 文字
        $password = str_shuffle(
                            substr(str_shuffle('1234567890'), 0, 2) .
                            substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 3) .
                            substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3)
        );
        
        $messages = [ $data['department'] . ' ' . $data['name'] . ' 様',
                    ' 送付先アドレス：' . $data['email'],
                    ' ',
                    'いつも優秀な人材を紹介してくれてありがとうございます。',
        			'これからも、我が社に入ってくれそうな人材をぜひともご紹介ください。',
				    'List of Excellent Young-man は、みなさんから人事部に紹介してもいいと思った人たちを登録いただくシステムです。',
				    'もし人事部から連絡してもよい優秀な方がいらっしゃいましたら、ぜひご登録をお願いします。',
                    ' ',
                    'List of Excellent Young-manにはこちらからアクセス下さい。こちら＝＞http://localhost/',
                    $data['name'] . ' 様のパスワードは、「' . $password . '」となっております。'
                    ]; 
        $pwd = ['password' => $password];
        $data = array_merge($data,$pwd);  
         
		return view('/confirmWithDraft',compact('messages','data'));
	}
}
