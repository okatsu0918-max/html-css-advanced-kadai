<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <title>社員情報入力フォーム</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    body { font-family: system-ui, sans-serif; line-height: 1.7; padding: 24px; }
    h1 { font-size: 28px; margin-bottom: 16px; }
    label { display:block; margin-top: 12px; font-weight: 700; }
    input[type="text"], select { width: 320px; max-width: 100%; padding: 8px; font-size: 16px; }
    .actions { margin-top: 16px; }
    button { padding: 8px 16px; font-size: 16px; }
  </style>
</head>
<body>

  <h1>社員情報入力フォーム</h1>

  <!-- 送信先は確認画面 confirm.php / 方法は POST -->
  <form action="confirm.php" method="post" novalidate>
    <!-- 社員名（name属性：employee_name、初期表示は空） -->
    <label for="employee_name">社員名</label>
    <input
      type="text"
      id="employee_name"
      name="employee_name"
      value=""
      placeholder="例）侍太郎" />

    <!-- 年齢（name属性：employee_age、初期表示は空） -->
    <label for="employee_age">年齢</label>
    <input
      type="text"
      id="employee_age"
      name="employee_age"
      value=""
      placeholder="例）30" />

    <!-- 所属部署（name属性：department、初期は「開発部」） -->
    <label for="department">所属部署</label>
    <select id="department" name="department">
      <option value="開発部" selected>開発部</option>
      <option value="営業部">営業部</option>
      <option value="人事部">人事部</option>
    </select>

    <div class="actions">
      <button type="submit">送信</button>
    </div>
  </form>

</body>
</html>
