<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Mediator;
use App\Models\Target;
use App\Models\User;
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
	$mediators = User::find($user['id'])->mediators;
	
	$targets = Target::get();
    $target_list = array();

    foreach($targets as $target){
        $mediator = Mediator::find($target['mediator_id']);
        $target_list =array_merge(
            $target_list,
            array([
                'name' => $target['name'],
                'company' => $target['company'],
                'medi_name' => $mediator['name'],
                'medi_depart' => $mediator['department']
            ])
             );
    }

	return view('myPageList',compact('mediators','target_list'));
    }
    public function addMediator()
    {
        $data=['name'=>'','department'=>'','email'=>''];
        return view('addMediator',compact('data'))->with('success', 'テストメッセージ');
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
                'user_id' => $user['id'],
                'password' => Hash::make($data['password'])
            ]);
            

            //メールを送信する。
            $reqToMediator = new sendRequest;
            $reqToMediator->from($user['email'])
                    ->subject('List of Excellent Young-man からのご招待')
                    ->text('emails.flatText')
                    ->markdown('emails.request')
                    ->with(['data' => $data]);

            Mail::to('test@example.com')->send($reqToMediator);
            $request->session()->flash('message', '登録完了。メール送信完了。');

        }        
		return redirect('/');
    }
	public function confirmWithDraft(Request $request)
	{
		$data = $request->all();
        $user = \Auth::user();

               // 同じメールアドレスを持つ情報提供者がいるか確認
               $exist_mediator = Mediator::where('email', $data['email'])->first();
        if( empty($exist_mediator['id']) ){
            //メール内容の確認作業を続行
        
            //数字と英語の小文字と大文字が混ざったランダムな 8 文字を生成。
            $password = str_shuffle(
                                substr(str_shuffle('1234567890'), 0, 2) .
                                substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 3) .
                                substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3)
            );
            
            $pwd = ['password' => $password];
            $data = array_merge($data,$pwd);  
            
            return view('/confirmWithDraft',compact('data'));

        }else{
            // いる場合は
            // 情報提供者情報の再入力
            $request->session()->flash('message', '( '.$data['email'].' )は既に登録されています。');
            $data = $request->all();
	        return view('addMediator',compact('data'));
        }
	}
}
