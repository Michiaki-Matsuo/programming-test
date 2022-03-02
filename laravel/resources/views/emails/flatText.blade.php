{{ $data['department'] . ' ' . $data['name'] . ' 様'}}
{{'送付アドレス：' . $data['email']}}

いつも優秀な人材を紹介してくれてありがとうございます。
これからも、我が社に入ってくれそうな人材をぜひともご紹介ください。
List of Excellent Young-man は、みなさんから人事部に紹介してもいいと思った人たちを登録いただくシステムです。
もし人事部から連絡してもよい優秀な方がいらっしゃいましたら、ぜひご登録をお願いします。

List of Excellent Young-manには下記からアクセス下さい。
{{ route('mediatorMyPage') }}

>{{ $data['name'] . ' 様の個別パスワードは、「' . $data['password'] . '」となっております。'}}
