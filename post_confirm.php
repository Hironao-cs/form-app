<!-- // POSTを受け取る
// POSTの場合はパスワードも送ってみる。 -->
<?php

$name =$_POST['name'];
$birth_year=$_POST['birth_year'];
$birth_month=$_POST['birth_month'];
$birth_day=$_POST['birth_day'];
$graduation_year=$_POST['graduation_year'];
$address=$_POST['address'];
$tel=$_POST['tel'];
$email =$_POST['email'];
$birthday = $_POST['birth_year'] . '-' . $_POST['birth_month'] . '-' . $_POST['birth_day'];
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容の確認 - A高等学校100周年記念式典</title>
    <style>
        /* 入力画面と共通のCSS */
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

        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 500px;
        }

        h3 {
            text-align: center;
            color: #b1284b;
            margin-bottom: 30px;
            font-size: 1.5rem;
            border-bottom: 2px solid #f4f7f6;
            padding-bottom: 15px;
        }

        /* 確認項目用のスタイル */
        .confirm-group {
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .confirm-label {
            display: block;
            font-weight: bold;
            font-size: 0.85rem;
            color: #b1284b;
            margin-bottom: 5px;
        }

        .confirm-value {
            display: block;
            font-size: 1.1rem;
            color: #333;
            word-break: break-all;
        }

        /* ボタンエリア */
        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            flex: 1;
            padding: 15px;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            text-align: center;
        }

        .btn-submit {
            background-color: #b1284b;
            color: white;
        }

        .btn-submit:hover {
            background-color: #8e1f3c;
            transform: translateY(-2px);
        }

        .btn-back {
            background-color: #e0e0e0;
            color: #666;
        }

        .btn-back:hover {
            background-color: #d0d0d0;
        }

        .info-text {
            font-size: 0.9rem;
            color: #666;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
<div class="form-container">
        <h3>入力内容の確認</h3>
        <p class="info-text">以下の内容で登録してもよろしいですか？</p>
        
        <div class="confirm-group">
            <span class="confirm-label">お名前</span>
            <span class="confirm-value"><?= htmlspecialchars($name) ?> 様</span>
        </div>

        <div class="confirm-group">
            <span class="confirm-label">生年月日</span>
            <span class="confirm-value"><?= htmlspecialchars($birthday) ?></span>
        </div>

        <div class="confirm-group">
            <span class="confirm-label">卒業年度</span>
            <span class="confirm-value"><?= htmlspecialchars($graduation_year) ?>年度</span>
        </div>

        <div class="confirm-group">
            <span class="confirm-label">現在お住まいの住所</span>
            <span class="confirm-value"><?= htmlspecialchars($address) ?></span>
        </div>

        <div class="confirm-group">
            <span class="confirm-label">電話番号</span>
            <span class="confirm-value"><?= htmlspecialchars($tel) ?></span>
        </div>

        <div class="confirm-group">
            <span class="confirm-label">EMAIL</span>
            <span class="confirm-value"><?= htmlspecialchars($email) ?></span>
        </div>

        <form action="write.php" method="post">
            <input type="hidden" name="name" value="<?= htmlspecialchars($name) ?>">
            <input type="hidden" name="birthday" value="<?= htmlspecialchars($birthday) ?>">
            <input type="hidden" name="graduation_year" value="<?= htmlspecialchars($graduation_year) ?>">
            <input type="hidden" name="address" value="<?= htmlspecialchars($address) ?>">
            <input type="hidden" name="tel" value="<?= htmlspecialchars($tel) ?>">
            <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">

            <div class="button-group">
                <button type="button" class="btn btn-back" onclick="history.back()">修正する</button>
                <button type="submit" class="btn btn-submit">この内容で登録する</button>
            </div>
        </form>
    </div>
</body>

</html>
