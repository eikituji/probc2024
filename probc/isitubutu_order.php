<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include("html/meta.html"); ?>
    <title>拾得物管理システム</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include("html/header.html"); ?>
<div class="container">
    <div class="bg-primary text-white p-5 mt-3 rounded text-center">
        <h1 class="display-4 fst-italic">遺失物捜索依頼</h1>
    </div>
    <div>
        <h2>遺失物捜索依頼</h2>
    </div>
    <form action="c_insert.php" method="post">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="student_id" class="form-label">学籍番号</label>
                <input type="text" class="form-control" id="student_id" name="student_id" placeholder="c3p11111" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">電話番号</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="090-1234-5678" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="xxx@bunkyo.ac.jp" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="item_category" class="form-label">遺失物種類</label>
                <input type="text" class="form-control" id="item_category" name="item_category" placeholder="黒いかばん" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="others" class="form-label">その他</label>
            <input type="text" class="form-control" id="others" name="others" placeholder="かばんにアクセサリがあった など" required>
        </div>

        <button type="submit" class="btn btn-success">登録</button>
        <input type="hidden" name="data" value="lost_order">
    </form>
</div>

<?php include("html/footer.html"); ?>

<!-- Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
