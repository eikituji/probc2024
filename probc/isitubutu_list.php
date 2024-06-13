<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録されている拾得物</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* カスタムスタイル */
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>登録されている拾得物一覧</h2>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>拾得物分類</th>
                <th>拾得場所</th>
                <th>色</th>
                <th>特徴</th>
            </tr>
        </thead>
        <tbody>

        <?php
        // データベース接続情報
        $host = '172.20.32.2';
        $dbname = 'probc2024';
        $username = 'probc2024';
        $password = 'probc2024';

        try {
            // データベース接続
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // SQLクエリの準備と実行
            $stmt = $pdo->query("SELECT * FROM 拾得物");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // 拾得物分類IDに基づいて分類名を決定
                $category = "";
                switch ($row['ID']) {
                    case 1:
                        $category = "かばん";
                        break;
                    case 2:
                        $category = "傘";
                        break;
                    case 3:
                        $category = "学生証";
                        break;
                    case 4:
                        $category = "携帯";
                        break;
                    case 5:
                        $category = "財布";
                        break;
                    case 6:
                        $category = "イヤホン";
                        break;
                    case 7:
                        $category = "衣類";
                        break;
                    case 8:
                        $category = "鍵";
                        break;
                    case 9:
                        $category = "その他";
                        break;
                    default:
                        $category = "未定義";
                }

                echo "<tr>";
                echo "<td>{$category}</td>";
                echo "<td>{$row['拾得場所']}</td>";
                echo "<td>{$row['色']}</td>";
                echo "<td>{$row['特徴']}</td>";
                echo "</tr>";
            }
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>