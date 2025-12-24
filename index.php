<html>

<head>
    <meta charset="utf-8">
    <style>

        body {
            background-color: #f4f7f6; /* 落ち着いた薄い背景色 */
            color: #333;
            font-family: "Helvetica Neue", Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .form-container{
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 500px;
        }
        h3 {
            text-align: center;
            color: #b1284b; /* 元のテーマカラーをアクセントに */
            margin-bottom: 30px;
            font-size: 1.5rem;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box; /* paddingを含めた幅計算 */
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #b1284b;
            box-shadow: 0 0 0 3px rgba(177, 40, 75, 0.1);
        }

        .select-row {
            display: flex;
            gap: 10px;
        }
        .select-row select {
            flex: 1;
        }
        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: #b1284b;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.1s;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: #8e1f3c;
        }

        .submit-btn:active {
            transform: scale(0.98);
        }
        .required::after {
            content: "必須";
            background-color: #e74c3c;
            color: white;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 4px;
            margin-left: 8px;
            vertical-align: middle;
        }
    </style>
    <title>A高等学校100周年記念式典申込フォーム</title>
</head>

<body>
    <div class="form-container">
        <h3>A高等学校100周年記念式典申込フォーム</h3>
    
        <form action="post_confirm.php" method="post">
        
        <div class="form-group">
            <label class="required">お名前</label>
            <input type="text" name="name" placeholder="山田　太郎"required>
        </div>

        <div class="form-group">
            <label class="required">生年月日</label>
            <div class="select-row">
                <select name="birth_year">
                    <option value="">年</option>
                    <?php for($i=1950; $i<=2010; $i++): ?>
                        <option value="<?= $i ?>"><?= $i ?>年</option>
                    <?php endfor; ?>
                </select>
                <select name="birth_month">
                    <option value="">月</option>
                    <?php for($i=1; $i<=12; $i++): ?>
                        <option value="<?= sprintf('%02d', $i) ?>"><?= $i ?>月</option>
                    <?php endfor; ?>
                </select>
                <select name="birth_day">
                    <option value="">日</option>
                    <?php for($i=1; $i<=31; $i++): ?>
                        <option value="<?= sprintf('%02d', $i) ?>"><?= $i ?>日</option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="required">卒業年度</label>
            <select name="graduation_year">
                <option value="">年度を選択してください</option>
                <?php for($i=2025; $i>=1960; $i--): ?>
                    <option value="<?= $i ?>"><?= $i ?>年度（<?= $i+1 ?>年3月卒）</option>
                <?php endfor; ?>
            </select>
        </div>

        <div class="form-group">
            <label>現在お住まいの住所</label>
            <input type="text" name="address" placeholder="東京都〇〇区...">
        </div>

        <div class="form-group">
            <label>電話番号</label>
            <input type="text" name="tel" placeholder="090-0000-0000">
        </div>

        <div class="form-group">
            <label class="required">EMAIL</label>
            <input type="text" name="email" placeholder="example@mail.com" required>
        </div>
            
        <button type="submit" class="submit-btn">内容を確認して送信</button>
        </form>
    </div>
</body>

</html>
