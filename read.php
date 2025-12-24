
<?php
// ファイルを開く
$filename = './data/data.txt';
// 読み取り専用で開く
$fp = fopen($filename,'r');
// 表のヘッダー部分
$table_content = "";
// ファイルを1行ずつ読み込む
while($line = fgets($fp)){
    // スラッシュで分割して配列にする
    // [0]日付, [1]名前, [2]誕生日, [3]卒業年, [4]住所, [5]電話, [6]メール
    $row = explode('/',$line);
    // 表の1行（tr）を作成。各項目を（td）に入れる
    // 安全のため htmlspecialchars を通す
    $table_content .= "<tr>";
    foreach($row as $column){
        $table_content .= "<td>" . htmlspecialchars($column, ENT_QUOTES, 'UTF-8') . "</td>";
    }
    $table_content .= "</tr>";
}
// ファイルを閉じる
fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>申込者一覧</title>
    <!-- style -->
     <style>
        body {
            background-color: #f4f7f6;
            color: #333;
            font-family: "Helvetica Neue", Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .admin-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 1100px; /* 一覧なので幅を広く設定 */
        }

        .header-area {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #f4f7f6;
            padding-bottom: 15px;
        }

        h1 {
            color: #b1284b;
            font-size: 1.5rem;
            margin: 0;
        }

        .back-link {
            text-decoration: none;
            color: #b1284b;
            font-weight: bold;
            font-size: 0.9rem;
            border: 1px solid #b1284b;
            padding: 8px 16px;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .back-link:hover {
            background-color: #fdf2f4;
        }

        /* テーブルのカスタマイズ */
        .table-wrapper {
            overflow-x: auto; /* スマホで横スクロール可能に */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9rem;
        }

        th {
            background-color: #b1284b;
            color: white;
            font-weight: bold;
            padding: 15px 10px;
            text-align: left;
            white-space: nowrap;
        }

        td {
            padding: 15px 10px;
            border-bottom: 1px solid #eee;
            color: #555;
            line-height: 1.4;
        }

        tr:last-child td {
            border-bottom: none;
        }

        /* 行のホバー効果 */
        tr:hover td {
            background-color: #fdf2f4;
        }

        /* 登録日時列を少し目立たなくする */
        td:first-child {
            color: #999;
            font-size: 0.8rem;
        }
     </style>
</head>
<body>
    <div class="admin-container">
        <div class="header-area">
            <h1>100周年記念式典 申込者一覧</h1>
            <a href="post.php" class="back-link">← 入力画面に戻る</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>登録日時</th>
                        <th>名前</th>
                        <th>生年月日</th>
                        <th>卒業年度</th>
                        <th>住所</th>
                        <th>電話番号</th>
                        <th>メールアドレス</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($table_content): ?>
                        <?= $table_content ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" style="text-align:center; padding: 40px;">まだ申し込みはありません。</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>