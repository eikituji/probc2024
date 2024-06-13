<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <title>拾得物管理システム</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="./"><i class="bi bi-search"></i> 拾得物管理システム</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">拾得物登録機能</a>
                <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="v_fuser_reg.htm">拾得者（ユーザ）登録 <i class="bi bi-person"></i></a></li>
                    <li><a class="dropdown-item" href="v_fitem_reg.htm">拾得物登録 <i class="bi bi-file-earmark-arrow-up"></i></a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">拾得物検索機能</a>
                <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="v_fitem_search.htm">拾得物検索 <i class="bi bi-search"></i></a></li>
                    <li><a class="dropdown-item" href="v_litem_frequest.htm">遺失物捜索依頼 <i class="bi bi-file-earmark-check"></i></a></li>
                    <li><a class="dropdown-item" href="v_frequest_list.htm">遺失物捜索一覧 <i class="bi bi-table"></i></a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
        </nav>
      
      
  <div class="container">
    <div class="row mt-3 mb-1">
      <div class="col"><p class="h2 p-1  bg-success w-50 rounded text-center text-white">遺失物捜索一覧</p></div>
    </div>
    <div class="row">
        <div class="col">
            <p class="bg-light p-1 border m-0">遺失物捜索一覧画面では，出されている遺失物捜索依頼の情報を一覧形式で確認することが可能となります．</p>
            <hr>
      </div>
    </div>

    <div class="row mt-3">
        <div class="col">
          <table class="table table-success table-striped">
            <tr><th>大分類</th><th>物品名</th><th>拾得場所</th><th>色</th><th>特徴</th><th>遺失者</th></tr>
            <tr><td>かさ類</td><td>ビニール傘</td><td>バスロータリー</td><td>白</td><td></td><td>文教太郎</td></tr>
            <tr><td>かばん</td><td>ボストンバック</td><td>体育館</td><td>黒</td><td></td><td>文教次郎</td></tr>
            <tr><td>かばん</td><td>リュックサック</td><td>7201教室</td><td>青</td><td></td><td>文教太郎</td></tr>
            <tr><td>貴金属</td><td>指輪</td><td>7401教室</td><td>銀</td><td></td><td>文教太郎</td></tr>
        </table>
      </div>
    
  </div>
  <footer>
    <div class="fixed-bottom bg-success text-light text-end">
        文教大学 情報学部 情報システム学科 プロジェクト演習BC
    </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>
</html>
