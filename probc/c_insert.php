<?php

$user = "probc2024";
$pass = "probc2024";
$dsn = "mysql:host=172.20.32.10;dbname=probc2024;charset=utf8mb4";


$now = new DateTime();
$nowstr = $now->format("Y-m-d H:i:s");
$np = "";
try {
    $my = new PDO($dsn, $user, $pass);
    $my->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["data"])) {
        $data = $_POST["data"];

        if ($data == "fitem" && isset($_POST["item_category"], $_POST["pickup_place"], $_POST["color"], $_POST["detail"])) {
            $my->beginTransaction();

            // 拾得物を挿入
            $sql = "INSERT INTO 拾得物 (ID,拾得物分類ID, 拾得場所, 色, 特徴) VALUES (?, ?, ?, ?, ?)";
            $stmt = $my->prepare($sql);
            $stmt->execute(array($_POST[""],$_POST["item_category"], $_POST["pickup_place"], $_POST["color"], $_POST["detail"]));
            $np = "index.php";

            // 拾得物管理状況を挿入
            // $sql = "INSERT INTO 拾得物管理状況 (ユーザID, 拾得物ID, 変更内容, 変更日時) VALUES (?, ?, ?, ?)";
            // $stmt = $my->prepare($sql);
            // $stmt->execute(array($user_id, $fid, "新規登録", $nowstr));

            $my->commit();
            $np = "index.php";
        } else if ($data == "fitem_st" && isset($_POST["p1"], $_POST["p2"], $_POST["p3"])) {
            $sql = "INSERT INTO 拾得物管理状況 (ユーザID, 拾得物ID, 変更内容, 変更日時) VALUES (?, ?, ?, ?)";
            $stmt = $my->prepare($sql);
            $stmt->execute(array($_POST["p1"], $_POST["p2"], $_POST["p3"], $nowstr));
            $np = "v_fitem_detail.php?id={$_POST["p2"]}";
        } else if ($data == "user" && isset($_POST["student_id"], $_POST["name"], $_POST["faculty"], $_POST["phone"], $_POST["email"], $_POST["address"])) {
            $sql = "INSERT INTO ユーザ (学籍番号, 氏名, 所属ID, 電話番号, メールアドレス, 住所) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $my->prepare($sql);
            $stmt->execute(array($_POST["student_id"], $_POST["name"], $_POST["faculty"], $_POST["phone"], $_POST["email"], $_POST["address"]));
            $np = "index.php";
        } else if ($data == "litem" && isset($_POST["p1"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"])) {
            $sql = "INSERT INTO 遺失物 (遺失物分類ID, 拾得場所, 色, 特徴, ユーザID) VALUES (?, ?, ?, ?, ?)";
            $stmt = $my->prepare($sql);
            $stmt->execute(array($_POST["p1"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"]));
        } else if ($data == "lost_order" && isset($_POST["student_id"], $_POST["phone"], $_POST["email"], $_POST["item_category"], $_POST["others"])) {
            $sql = "INSERT INTO 遺失物依頼 (学籍番号, 電話番号, メールアドレス, 遺失物種類, その他) VALUES (?, ?, ?, ?, ?)";
            $stmt = $my->prepare($sql);
            $stmt->execute(array($_POST["student_id"], $_POST["phone"], $_POST["email"], $_POST["item_category"], $_POST["others"]));
            $np = "index.php";
        }
    }

    header("Location: {$np}");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>