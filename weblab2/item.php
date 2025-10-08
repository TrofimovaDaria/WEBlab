<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "publishing_house";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
$magazines = $conn->query("SELECT id, name FROM magazine");

//фильтры из формы
$name = $_GET['name'] ?? '';
$author = $_GET['author'] ?? '';
$year = $_GET['year'] ?? '';
$magazine_id = $_GET['magazine_id'] ?? '';

$query = "
SELECT a.*, m.name AS magazine_name
FROM articles a
LEFT JOIN magazine m ON a.magazine_id = m.id
WHERE 1
";

if (!empty($name)) $query .= " AND a.name LIKE '%" . $conn->real_escape_string($name) . "%'";
if (!empty($author)) $query .= " AND a.author LIKE '%" . $conn->real_escape_string($author) . "%'";
if (!empty($year)) $query .= " AND a.year = '" . $conn->real_escape_string($year) . "'";
if (!empty($magazine_id)) $query .= " AND a.magazine_id = '" . $conn->real_escape_string($magazine_id) . "'";

$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Статьи — Издательский дом</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

  <!-- Подключаем шапку -->
  <?php include 'hedder.html'; ?>

  <main class="container my-2">

  <h2 class="text-center mb-1">Статьи</h2>

  <!-- Форма фильтрации -->
  <form method="GET" class="border rounded p-3 mb-4 bg-light">
    <div class="row g-3">
      <div class="col-md-3">
        <label class="form-label">Название статьи</label>
        <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($name) ?>">
      </div>
      <div class="col-md-3">
        <label class="form-label">Автор</label>
        <input type="text" name="author" class="form-control" value="<?= htmlspecialchars($author) ?>">
      </div>
      <div class="col-md-2">
        <label class="form-label">Год</label>
        <input type="number" name="year" class="form-control" min="1900" max="2100" value="<?= htmlspecialchars($year) ?>">
      </div>
      <div class="col-md-3">
        <label class="form-label">Журнал</label>
        <select name="magazine_id" class="form-select">
          <option value="">Все</option>
          <?php while ($mag = $magazines->fetch_assoc()): ?>
            <option value="<?= $mag['id'] ?>" <?= ($mag['id'] == $magazine_id) ? 'selected' : '' ?>>
              <?= htmlspecialchars($mag['name']) ?>
            </option>
          <?php endwhile; ?>
        </select>
      </div>
      <div class="col-md-1 d-flex align-items-end">
        <button type="submit" class="btn btn-primary w-100">Фильтр</button>
      </div>
      <div class="col-md-1 d-flex align-items-end">
        <a href="item.php" class="btn btn-secondary w-100">Сброс</a>
      </div>
    </div>
  </form>

  <!-- Таблица статей -->
  <div class="table-responsive">
    <table class="table table-striped align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th>Изображение</th>
          <th>Название</th>
          <th>Автор</th>
          <th>Журнал</th>
          <th>Год</th>
          <th>Текст</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($result && $result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td>
                <img 
                src="<?= htmlspecialchars($row['img_path']) ?>" 
                alt="Обложка"
                style="width:150px; height:150px; object-fit:cover; border-radius:6px; display:block; margin:0 auto;">
              </td>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td><?= htmlspecialchars($row['author']) ?></td>
              <td><?= htmlspecialchars($row['magazine_name']) ?></td>
              <td><?= htmlspecialchars($row['year']) ?></td>
              <td class="text-start"><?= htmlspecialchars($row['text']) ?></td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr><td colspan="7" class="text-muted">Нет записей</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

</main>

<footer class="bg-dark text-white text-center py-4 mt-5">
  <div class="container">
    <p class="mb-0">© 2025 Издательский дом. Все права защищены.</p>
  </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$conn->close();
?>
