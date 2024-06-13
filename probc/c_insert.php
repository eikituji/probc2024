<?php

$user = "probc2024";
$pass = "probc2024";
$dsn = "mysql:dbname={$user};host=172.20.32.2";
$now = new DateTime();
$nowstr = $now->format("Y-m-d H:i:s");
$np = "";
try {
    $my = new PDO($dsn, $user, $pass);
    $my->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_POST["data"] == "fitem") {
        if (isset($_POST["item_category"], $_POST["pickup_place"], $_POST["color"], $_POST["detail"])) {
            try {
                $my->beginTransaction();
                $sql = "INSERT INTO 拾得物 (ID, 拾得物分類ID, 拾得場所, 色, 特徴) VALUES (?, ?, ?, ?);";
                $arr = array($_POST["item_category"], $_POST["pickup_place"], $_POST["color"], $_POST["detail"]);
                $stmt = $my->prepare($sql);
                $stmt->execute($arr);
                $fid = $my->lastInsertId();
                $sql = "INSERT INTO 拾得物管理状況 (ユーザID, 拾得物ID, 変更内容, 変更日時) VALUES (?, ?, ?, ?);";
                $stmt = $my->prepare($sql);
                $stmt->execute($arr);
                $my->commit();
            } catch (Exception $e) {
                $my->rollBack();
                echo "Error: " . $e->getMessage();
            }
            $np = "index.php";
        }
    } else if ($_POST["data"] == "fitem_st") {
        if (isset($_POST["p1"], $_POST["p2"], $_POST["p3"])) {
            $sql = "INSERT INTO 拾得物管理状況 (ユーザID,拾得物ID,変更内容,変更日時) VALUES (?,?,?,?);";
            $arr = array($_POST["p1"], $_POST["p2"], $_POST["p3"], $nowstr);
            $stmt = $my->prepare($sql);
            $stmt->execute($arr);
            $np = "v_fitem_detail.php?id={$_POST["p2"]}";
        }
    } else if ($_POST["data"] == "user") {
        if (isset($_POST["student_id"], $_POST["name"], $_POST["faculty"], $_POST["phone"], $_POST["email"], $_POST["address"])) {
            $sql = "INSERT INTO ユーザ (学籍番号, 氏名, 所属ID, 電話番号, メールアドレス, 住所) VALUES (?,?,?,?,?,?);";
            $arr = array($_POST["student_id"], $_POST["name"], $_POST["faculty"], $_POST["phone"], $_POST["email"], $_POST["address"]);
            $stmt = $my->prepare($sql);
            $stmt->execute($arr);
            $np = "index.php";
        }
    } else if ($_POST["data"] == "litem") {
        if (isset($_POST["p1"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"])) {
            $sql = "INSERT INTO 遺失物 (遺失物分類ID, 拾得場所, 色, 特徴, ユーザID) VALUES (?,?,?,?,?);";
            $arr = array($_POST["p1"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"]);
            $stmt = $my->prepare($sql);
            $stmt->execute($arr);
        }
    } 

    header("Location: {$np}");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
