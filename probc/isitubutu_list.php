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
        .details-container {
            display: none; /* 最初は非表示にする */
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>登録されている拾得物一覧</h2>

    <!-- 検索フィールド -->
    <div class="mb-3">
        <label for="searchInput" class="form-label">種類で検索:</label>
        <input type="text" class="form-control" id="searchInput" placeholder="例: 黒いかばん">
    </div>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>番号</th>
                <th>種類</th>
                <th>その他、特徴</th>
                <th>遺失者の詳細情報</th>
            </tr>
        </thead>
        <tbody>

        <?php
        // データベース接続情報
        $host = '172.20.32.10'; // 正しいホスト名またはIPアドレスを設定する
        $dbname = 'probc2024';
        $username = 'probc2024';
        $password = 'probc2024';

        try {
            // データベース接続
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // SQLクエリの準備と実行
            $stmt = $pdo->query("SELECT * FROM 遺失物依頼");
            $count = 1; // 番号をカウントする変数

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>{$count}</td>";
                echo "<td class='details-column' style='display:none;'>{$row['学籍番号']}</td>"; // 適切な列名を使用する
                echo "<td class='details-column' style='display:none;'>{$row['電話番号']}</td>"; // 適切な列名を使用する
                echo "<td class='details-column' style='display:none;'>{$row['メールアドレス']}</td>"; // 適切な列名を使用する
                echo "<td>{$row['遺失物種類']}</td>"; // 適切な列名を使用する
                echo "<td>{$row['その他']}</td>"; // 適切な列名を使用する
                echo '<td><button class="btn btn-primary btn-details" data-id="' . $count . '">詳細</button></td>';
                echo "</tr>";
                $count++; // 番号をインクリメント
            }
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
        </tbody>
    </table>

    <!-- 詳細表示エリア -->
    <div class="details-container" id="details-container">
        <h3>詳細情報</h3>
        <div id="details-content">
            <p><strong>学籍番号:</strong> <span id="student-id"></span></p>
            <p><strong>電話番号:</strong> <span id="phone"></span></p>
            <p><strong>メールアドレス:</strong> <span id="email"></span></p>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // 詳細ボタンのクリック処理
        $('.btn-details').on('click', function() {
            var itemId = $(this).data('id');
            var studentId = $('.details-column:nth-child(2)').eq(itemId - 1).text(); // 学籍番号を取得
            var phone = $('.details-column:nth-child(3)').eq(itemId - 1).text(); // 電話番号を取得
            var email = $('.details-column:nth-child(4)').eq(itemId - 1).text(); // メールアドレスを取得
            
            // 詳細情報をセット
            $('#student-id').text(studentId);
            $('#phone').text(phone);
            $('#email').text(email);
            
            // 詳細を表示する
            $('#details-container').slideDown();
        });

        // 検索フィールドの処理
        $('#searchInput').on('keyup', function() {
            var searchText = $(this).val().toLowerCase(); // 小文字で検索テキストを取得
            
            // 各行を走査してフィルタリング
            $('tbody tr').each(function() {
                var text = $(this).find('td:nth-child(5)').text().toLowerCase(); // 遺失物種類を取得して小文字に変換
                if (text.indexOf(searchText) === -1) {
                    $(this).hide(); // テキストが見つからない場合は行を非表示にする
                } else {
                    $(this).show(); // テキストが見つかった場合は行を表示する
                }
            });
        });
    });
</script>

</body>
</html>
