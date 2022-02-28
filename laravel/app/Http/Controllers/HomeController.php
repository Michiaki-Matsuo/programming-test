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
    		// dd($data);


		return view('/showMailTxt');
	}

}
