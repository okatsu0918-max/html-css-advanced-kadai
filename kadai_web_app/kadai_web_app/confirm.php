<?php
// 受け取り（未入力でも落ちないようにデフォルトを用意）
$name = $_POST['employee_name'] ?? '';
$age  = $_POST['employee_age']  ?? '';
$dept = $_POST['department']    ?? '';

// XSS 対策
function h($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>確認画面</title>
  <style>
    body { font-family: system-ui, sans-serif; }
    .wrap { max-width: 640px; margin: 24px auto; }
    table { border-collapse: collapse; width: 100%; margin: 16px 0; }
    th, td { border: 1px solid #333; padding: 8px 12px; }
    th { width: 140px; background:#f4f4f4; }
    .buttons { display: flex; gap: 12px; }
    button { padding: 8px 16px; font-size: 16px; }
  </style>
</head>
<body>
<div class="wrap">
  <h1>入力内容をご確認ください。</h1>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

  <table>
    <tr><th>社員名</th><td><?= h($name) ?></td></tr>
    <tr><th>年齢</th><td><?= h($age) ?></td></tr>
    <tr><th>所属部署</th><td><?= h($dept) ?></td></tr>
  </table>

  <div class="buttons">
    <!-- 確定：complete.php に POST で同じ値を渡す -->
    <form action="complete.php" method="post">
      <input type="hidden" name="employee_name" value="<?= h($name) ?>">
      <input type="hidden" name="employee_age"  value="<?= h($age)  ?>">
      <input type="hidden" name="department"    value="<?= h($dept) ?>">
      <button type="submit">確定</button>
    </form>

    <!-- キャンセル：フォームに戻る（ブラウザの戻るで OK。値も残ります） -->
    <button type="button" onclick="history.back()">キャンセル</button>
  </div>
</div>
</body>
</html>
