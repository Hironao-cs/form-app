<?php
$name =$_POST['name'];
$birthday=$_POST['birthday'];
$graduation_year=$_POST['graduation_year'];
$address=$_POST['address'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$date= date('Y-m-d H:i:s');

$data = $date.'/'.$name.'/'.$birthday.'/'.$graduation_year.'/'.$address.'/'.$tel.'/'.$email .PHP_EOL;

file_put_contents('./data/data.txt',$data,FILE_APPEND);


?>


<html>

<head>
    <meta charset="utf-8">
    <title>申込完了 - A高等学校100周年記念式典</title>
    <style>
        /* 共通スタイル */
        body {
            background-color: #f4f7f6;
            color: #333;
            font-family: "Helvetica Neue", Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 50px 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        /* 完了アイコン（チェックマーク） */
        .success-icon {
            width: 80px;
            height: 80px;
            background-color: #fdf2f4;
            color: #b1284b;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin: 0 auto 20px;
            font-weight: bold;
        }

        h1 {
            color: #b1284b;
            font-size: 1.6rem;
            margin-bottom: 15px;
        }

        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* リンクボタンのスタイル */
        .nav-links {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .nav-links li a {
            display: block;
            padding: 15px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .btn-list {
            background-color: #b1284b;
            color: white !important;
        }

        .btn-list:hover {
            background-color: #8e1f3c;
            transform: translateY(-2px);
        }

        .btn-back {
            background-color: #f4f7f6;
            color: #b1284b !important;
            border: 1px solid #b1284b;
        }

        .btn-back:hover {
            background-color: #fdf2f4;
        }

        .admin-note {
            font-size: 0.8rem;
            color: #999;
            margin-top: 20px;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="success-icon">✓</div>
        
        <h1>申し込みが完了しました</h1>
        
        <p>
            ご登録ありがとうございます。<br>
            当日、お会いできるのを楽しみにしております。
        </p>

        <ul class="nav-links">
            <li><a href="read.php" class="btn-list">申込者一覧へ（管理者用）</a></li>
            <li><a href="post.php" class="btn-back">入力画面に戻る</a></li>
        </ul>

        <div class="admin-note">
            管理者はデータベースを確認しましょう。
        </div>
    </div>
</body>

</html>
