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
        <div class="col"><p class="h2 p-1 bg-success w-50 rounded text-center text-white">拾得物登録</p></div>
    </div>
    <div class="row">
        <div class="col">
            <p class="bg-light p-1 border m-0">拾得物登録画面では，文教大学湘南キャンパスで拾得物を拾った際に，その物品の情報を入力するための画面です．必要事項を入力の上で登録を選択してください．登録が完了すると，その情報は検索の対象となります．</p>
            <hr>
        </div>
    </div>

    <form action="c_insert.php" method="post">
        <input type="hidden" name="data" value="fitem">
        <div class="row">
            <div class="col mt-1">
                <h5 class="card-title">拾得物分類</h5>
                <table>
                    <tr>
                        <td>拾得物分類</td>
                        <td>
                            <select required class="category form-control" name="item_category">
                                <option selected>種類を選択</option>
                                <option value="1">かばん</option>
                                <option value="2">傘</option>
                                <option value="3">学生証</option>
                                <option value="4">携帯</option>
                                <option value="5">財布</option>
                                <option value="6">イヤホン</option>
                                <option value="7">衣類</option>
                                <option value="8">鍵</option>
                                <option value="9">その他</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>拾得場所</td>
                        <td><input type="text" class="form-control" name="pickup_place" required></td>
                    </tr>
                    <tr>
                        <td>色</td>
                        <td>
                            <select class="form-control" name="color" required>
                                <option selected>色を選択</option>
                                <option value="白">白</option>
                                <option value="黒">黒</option>
                                <option value="灰">灰色</option>
                                <option value="赤">赤</option>
                                <option value="青">青</option>
                                <option value="緑">緑</option>
                                <option value="黄">黄</option>
                                <option value="橙">橙</option>
                                <option value="桃">桃</option>
                                <option value="紫">紫</option>
                                <option value="茶">茶</option>
                                <option value="金">金</option>
                                <option value="銀">銀</option>
                                <option value="その他">その他</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>特徴</td>
                        <td><input type="text" class="form-control" name="detail" required></td>
                    </tr>
                </table>
                <button class="btn btn-success" id="btn">登録</button>
            </div>
        </div>
    </form>
</div>

  <?php include("./html/footer.html"); ?>
  <script src="./js/main.js"></script>
</body>
</html>
