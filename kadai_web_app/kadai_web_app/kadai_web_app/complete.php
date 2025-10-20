<?php
// 確認画面から POST で来ていても来ていなくても、今回は保存処理は不要。
// ここでは完了メッセージだけ表示する。
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>登録完了</title>
  <style>
    body { font-family: system-ui, sans-serif; }
    .wrap { max-width: 720px; margin: 32px auto; }
    .box  { border: 2px solid #333; padding: 24px; }
    h1    { font-size: 32px; margin: 0 0 16px; }
    p     { font-size: 20px; margin: 0 0 20px; }
    .btn  { padding: 8px 18px; font-size: 16px; }
  </style>
</head>
<body>
<div class="wrap">
  <div class="box">
    <h1>登録が完了しました。</h1>
    <p>社員情報がデータベースに保存されました。</p>
    <!-- 戻る：入力フォームに戻す -->
    <form action="form.php" method="get">
      <button class="btn" type="submit">戻る</button>
    </form>
  </div>
</div>
</body>
</html>
