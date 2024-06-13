<!doctype html>
<html lang="ja">
<head>
    <?php include("./html/meta.html"); ?>
    <title>拾得物管理システム</title>
</head>

<body>
    <?php include("./html/header.html"); ?>

    <div class="container">
        <div class="row mt-3 mb-1">
            <div class="col">
                <p class="h2 p-1  bg-success w-50 rounded text-center text-white">拾得者（ユーザ）登録</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="bg-light p-1 border m-0">拾得者（ユーザ）登録画面では，本システムを利用するにあたってのユーザ登録を行います．必要な情報を入力してください．拾得者（ユーザ）登録は拾得物登録機能の利用前に必要となります．</p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col mt-1">
                <form method="post" action="c_insert.php">
                    <table>
                        <tr><td><label for="student_id" class="form-label">学籍番号</label></td><td><input type="text" required class="form-control" name="student_id"></td></tr>
                        <tr><td>氏名</td><td><input type="text" required class="form-control" name="name"></td></tr>
                        <tr><td>所属名</td><td><select name='faculty' class="form-control">
                            <option value='1'>健康栄養学科</option>
                            <option value='2'>情報システム学科</option>
                            <option value='3'>情報社会学科</option>
                            <option value='4'>メディア表現学科</option>
                            <option value='5'>職員</option>
                        </select></td></tr>
                        <tr><td>電話番号</td><td><input type="text" required class="form-control" name="phone"></td></tr>
                        <tr><td>メールアドレス</td><td><input type="text" required class="form-control" name="email"></td></tr>
                        <tr><td>住所</td><td><input type="text" required class="form-control" name="address"></td></tr>
                    </table>
                    <button class="btn btn-success" id="btn">登録</button>
                    <input type="hidden" name="data" value="user">
                </form>
            </div>
        </div>
    </div>

    <?php include("./html/footer.html"); ?>
    <script src="./js/main.js"></script>
</body>
</html>
