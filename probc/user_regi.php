<!doctype html>
<html lang="ja">
<head>
    <?php include("html/meta.html"); ?>
    <title>拾得物管理システム</title>
</head>
<body>
<?php include("html/header.html"); ?>
    <div class="container">
        <div class="bg-primary text-white p-5 mt-3 rounded text-center">
            <h1 class="display-4 fst-italic">拾得者（ユーザー）登録</h1>
        </div>
        <div>
            <h2>拾得者（ユーザー）登録</h2>
        </div>
        <form action="c_insert.php" method="post">
            <input type="hidden" name="data" value="user">
            <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="student_id" class="form-label">学籍番号</label>
                        <input type="text" class="form-control" id="student_id" name="student_id" placeholder="c3p11111" required>
                    </div>
                </div>
            </div>
            <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">氏名</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="文教太郎" required>
                    </div>
                </div>
            </div>  
            <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="faculty" class="form-label">学部</label>
                        <input type="text" class="form-control" id="faculty" name="faculty" placeholder="情報学部" required>
                    </div>
                </div>
            </div>
            <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="phone" class="form-label">電話番号</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="080-1234-5678" required>
                    </div>
                </div>
            </div>
            <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="email" class="form-label">メールアドレス</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="sample@bunkyo.ac.jp" required>
                    </div>
                </div>
            </div>      
            <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="address" class="form-label">住所</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="2024,01,25,1235" required>
                    </div>
                </div>
            </div>    
            <div class="col card m-1">   
                <button type="submit" class="col-md-4 btn btn-primary">登録する</button>
            </div>
        </form>
    </div>
<?php include("html/footer.html"); ?>
</body>
</html>
