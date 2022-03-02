<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </heda>
    <body>
        <p style="margin: 0px; padding: 0px;">{{ $data['department'] . ' ' . $data['name'] . ' 様'}}</p>
        <p style="margin: 0px; padding: 0px;">{{'送付アドレス：' . $data['email']}}</p>
        <p style="margin: 0px; padding: 20px 0px 0px 20px;">いつも優秀な人材を紹介してくれてありがとうございます。</p>
        <p style="margin: 0px; padding: 0px 0px 0px 20px;">これからも、我が社に入ってくれそうな人材をぜひともご紹介ください。</p>
        <p style="margin: 0px; padding: 0px 0px 0px 20px;">List of Excellent Young-man は、みなさんから人事部に紹介してもいいと思った人たちを登録いただくシステムです。</p>
        <p style="margin: 0px; padding: 0px 0px 0px 20px;">もし人事部から連絡してもよい優秀な方がいらっしゃいましたら、ぜひご登録をお願いします。</p>
        <p style="margin: 0px; padding: 20px 0px 0px 20px;">List of Excellent Young-manには下記からアクセス下さい。</p>
        <a style="margin: 0px; padding: 20px 0px 0px 40px;" href="{{ route('mediatorMyPage') }}"> {{ route('mediatorMyPage') }}</a>
        <p style="margin: 0px; padding: 10px 0px 20px 20px;">{{ $data['name'] . ' 様の個別パスワードは、「' . $data['password'] . '」となっております。'}}</p>
    </body>
</html>