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
    <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">学籍番号  </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="c3p11111">
                    </div>
                </div>
    </div>
    <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">氏名</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="文教太郎">
                    </div>
                </div>
            </div>  
    <div class="col card m-1">
            <div class="card-body">
                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">学部</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="情報学部">
                </div>
            </div>
    </div>
    <div class="col card m-1">
                <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">電話番号</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="080-1234-5678">
                </div>
                </div>
            </div>
    <div class="col card m-1">
                <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">メールアドレス</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="sample@bunkyo.ac.jp">
                </div>
                </div>
            </div>      
    <div class="col card m-1">
                <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">住所</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="2024,01,25,1235">
                </div>
                </div>
            </div>    
    <div class="col card m-1">   
        <button type="submit" class="　col-md-4　btn btn-primary">登録する</button>
    </div>
<?php include("html/footer.html"); ?>
</body>
</html>