<!DOCTYPE html>
<html lang="en">
<head>
<?php include("html/meta.html"); ?>
<title>拾得物管理システム</title>
</head>
<body>
    <?php include("html/header.html"); ?>
    <div class="container">
    <div class="bg-primary text-white p-5 mt-3 rounded text-center">
            <h1 class="display-4 fst-italic">拾得物検索</h1>
    </div>
    <div>
        <h2>拾得物の情報を入力してください。</h2>
    </div>
    <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">拾得物分類</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="白い財布">
                    </div>
                </div>
    </div>
    <div class="col card m-1">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">場所</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="1101教室">
                    </div>
                </div>
    </div>    
    <div class="col card m-1">
                <div class="card-body">
                <h5 class="card-title">拾得物の色を選択してください</h5>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>色を選択</option>
                        <option value="1">白</option>
                        <option value="2">黒</option>
                        <option value="3">灰色</option>
                        <option value="4">赤</option>
                        <option value="5">青</option>
                        <option value="6">緑</option>
                        <option value="7">黄</option>
                        <option value="8">橙</option>
                        <option value="9">桃</option>
                        <option value="10">紫</option>
                        <option value="11">茶</option>
                        <option value="12">金</option>
                        <option value="13">銀</option>
                    </select>
                </div>
            </div> 
        
    
    
    <div class="col card m-1">   
        <button type="submit" class="　col-md-4　btn btn-primary">検索する</button>
    </div>
    <?php include("html/footer.html"); ?>
</body>
</html>