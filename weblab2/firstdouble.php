<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ЭКСМО — Чёрный плащ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Верхняя строка -->
<div class="top-bar border-bottom py-1 small text-muted">
  <div class="container d-flex justify-content-between align-items-center">
    <!-- Слева -->
    <div class="d-flex gap-3">
      <a href="#" class="text-muted text-decoration-none">Поддержка</a>
      <a href="#" class="text-muted text-decoration-none">Стать автором ЭКСМО</a>
      <a href="#" class="text-muted text-decoration-none">Корпоративным клиентам</a>
    </div>
    <!-- Справа -->
    <div class="d-flex align-items-center gap-3">
      <span class="nowrap">Издательство «Эксмо» — книги напрямую от издательства</span>
      <img src="images/eye.png" alt="eye" style="height:20px;"> 
      <select class="form-select form-select-sm lang-select">
        <option selected>RUS</option>
        <option>ENG</option>
      </select>
    </div>
  </div>
</div>
<!-- Шапка -->
<header class="border-bottom bg-white">
  <div class="container py-2 d-flex align-items-center justify-content-between">
    <!-- Логотип -->
    <a href="#" class="d-flex align-items-center text-decoration-none">
      <img src="images/titel.png" alt="ЭКСМО" class="logo me-2">
    </a>

    <!-- Поиск -->
    <form class="d-flex flex-grow-1 mx-4" style="max-width: 900px;">
      <div class="input-group search-box w-100">
        <select class="form-select search-select">
          <option selected>Везде</option>
          <option>Книги</option>
          <option>Авторы</option>
          <option>Серии</option>
          <option>Подборки</option>
          <option>Комплекты</option>
        </select>
        <input type="text" class="form-control" placeholder="Искать на сайте ЭКСМО">
        <button class="btn btn-outline-secondary" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </form>

    <!-- Кнопки -->
    <div class="d-flex gap-2">
      <button class="btn btn-gradient">ВСТРЕЧИ С АВТОРАМИ</button>
      <button class="btn btn-gift">ПОДБОР ПОДАРКА</button>
      <a href="#" class="d-flex align-items-center text-decoration-none text-dark ms-2">
        <i class="bi bi-person me-1"></i> Войти
      </a>
    </div>
  </div>
</header>
<!-- Меню -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainMenu">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-danger" href="#" id="booksDropdown" role="button" data-bs-toggle="dropdown">
            <i class="bi bi-list"></i> Книги
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Художественная литература</a></li>
            <li><a class="dropdown-item" href="#">Детские книги</a></li>
            <li><a class="dropdown-item" href="#">Нон-фикшн</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">Новинки</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Бестселлеры</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Акции</a></li>
        <li class="nav-item"><a class="nav-link text-danger" href="#"><i class="bi bi-gift"></i> Подарки</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Подборки</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Рейтинг</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Серии</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Авторы</a></li>
        <li class="nav-item"><a class="nav-link" href="item.php">Статьи</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Контент -->
<main class="container my-5">
  <nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Главная</a></li>
      <li class="breadcrumb-item"><a href="#">Книги</a></li>
      <li class="breadcrumb-item"><a href="#">Комиксы</a></li>
      <li class="breadcrumb-item active" aria-current="page">Чёрный Плащ</li>
    </ol>
  </nav>

  <div class="row g-5">
    <!-- Левая колонка -->
    <div class="col-md-5">
      <div class="row g-3">
        <div class="col-3 d-none d-md-flex flex-column align-items-center gap-2 book-thumbs">
          <img src="images/cover.jpg" class="img-thumbnail active" alt="Обложка" tabindex="0">
          <img src="images/back.jpg" class="img-thumbnail" alt="Задняя" tabindex="0">
          <img src="images/inside.jpg" class="img-thumbnail" alt="Внутри" tabindex="0">
        </div>
        <div class="col-12 col-md-9 d-flex justify-content-center">
          <img id="main-book" src="images/cover.jpg" alt="Черный Плащ" class="rounded shadow img-fluid">
        </div>
      </div>
    </div>

    <!-- Правая колонка -->
    <div class="col-md-7">
      <h1 class="h3 mb-2">Чёрный Плащ. Возвращение Чёрного Рыцаря. Комикс</h1>
<p class="text-muted mb-3">Джеймс Сильвани</p>

<!-- Рейтинг + отзыв -->
<div class="d-flex align-items-center gap-2 mb-3 small text-muted">
  <span>0</span>
  <span class="fw-bold">4.3</span>
  <i class="bi bi-trophy text-warning"></i>
  <a href="#" class="text-decoration-none">Написать отзыв</a>
  <a href="#" class="text-decoration-none ms-2">Поделиться</a>
</div>

<!-- О книге -->
<h5 class="mb-2">О книге</h5>
<p class="mb-2">
  Уже больше года прошло с тех пор, как отважный защитник Сан-Канара —
  Чёрный Плащ — вступал в борьбу с преступностью. Все злодеи затаились,
  а что же наш ЧП? Теперь его жизнь так же скучна и предсказуема, как и офисная работа.
  Казалось, город может спать спокойно, но враги, как старые, так и новые, под
  покровом ночи не дремлют и строят коварные планы. Чтобы помешать реализации
  злого заговора, тихоне Кряку Лапчатому придётся в очередной раз надеть плащ и
  маску и превратиться в «ужас, летящий на крыльях ночи!».
</p>

<div class="mb-3">
  <a href="#" class="small text-decoration-none">Читать полностью</a>
  <span class="mx-2">•</span>
  <a href="#" class="small text-decoration-none">Слушать аннотацию</a>
</div>
<!-- Кнопка "Читать фрагмент" -->
<div class="mb-4">
  <button class="btn btn-outline-secondary">Читать фрагмент</button>
</div>

<hr>

<!-- Форматы книги -->
<div class="d-flex gap-4 mb-4">
  <div>
    <div class="fw-bold">БУМАЖНАЯ</div>
    <div class="fs-5">1049 ₽</div>
  </div>
  <div class="text-muted">
    ЭЛЕКТРОННАЯ<br>
    <small>Нет в наличии</small>
  </div>
  <div class="text-muted">
    АУДИОКНИГА<br>
    <small>Нет в наличии</small>
  </div>
</div>

<!-- Цена и покупка -->
<div class="d-flex align-items-center gap-3 mb-4">
  <div>
    <div class="fs-3 fw-bold">1049 ₽ <del class="text-muted ms-2">1238 ₽</del></div>
    <div class="badge bg-danger mt-1">-15%</div>
  </div>
  <div class="ms-auto">
    <button class="btn btn-buy btn-lg me-2">Купить в ЧГ</button>
  </div>
</div>

<!-- Акции -->
<div class="p-3 border rounded bg-light">
  <div class="fw-bold mb-2">Выберите самую удобную акцию:</div>
  <div class="small">
    Скидка 25% в ЧГ по промокоду: <span class="fw-bold">ОСЕНЬЭКСМО</span>
  </div>
</div>
<!-- Где ещё купить -->
<div class="mt-4">
  <h6 class="fw-bold mb-2">Где еще купить:</h6>
  <div class="d-flex gap-2 mb-2">
    <span class="badge bg-light text-dark border">Wildberries</span>
    <span class="badge bg-light text-dark border">Маркет</span>
  </div>
  <small class="text-muted">Покупайте в удобном маркетплейсе у официального поставщика</small>
</div>

<!-- Кнопка корпоративным клиентам -->
<div class="my-4">
  <button class="btn w-100" style="background:#f3752c; color:#fff; border-radius:8px;">
    КОРПОРАТИВНЫМ КЛИЕНТАМ
  </button>
</div>

<!-- Характеристики -->
<h6 class="fw-bold mb-3">Характеристики</h6>
<div class="row small">
  <div class="col-md-6 mb-2">
    <strong>Серия:</strong> Disney. Комиксы
  </div>
  <div class="col-md-6 mb-2">
    <strong>Дата выхода:</strong> 8 июля 2021
  </div>

  <div class="col-md-6 mb-2">
    <strong>Издательство:</strong> Эксмо
  </div>
  <div class="col-md-6 mb-2">
    <strong>Тираж:</strong> 3 000
  </div>

  <div class="col-md-6 mb-2">
    <strong>ISBN:</strong> 978-5-04-117987-8
  </div>
  <div class="col-md-6 mb-2">
    <strong>Вес:</strong> 0.461 кг
  </div>

  <div class="col-md-6 mb-2">
    <strong>Возраст:</strong> 12+
  </div>
  <div class="col-md-6 mb-2">
    <strong>Толщина:</strong> 11 мм
  </div>

  <div class="col-md-6 mb-2">
    <strong>Переводчик:</strong> Долгачева О.А.
  </div>
  <div class="col-md-6 mb-2">
    <strong>Формат:</strong> 162×260 мм
  </div>

  <div class="col-md-6 mb-2">
    <strong>Редактор:</strong> Бутковская М.А.
  </div>
  <div class="col-md-6 mb-2">
    <strong>Бумага:</strong> Мелованная 112/115
  </div>

  <div class="col-md-6 mb-2">
    <strong>Обложка:</strong> Твердый переплет
  </div>
  <div class="col-md-6 mb-2">
    <strong>Время чтения:</strong> 6 часов
  </div>

  <div class="col-md-6 mb-2">
    <strong>Страниц:</strong> 120
  </div>
  <div class="col-md-6 mb-2">
    <strong>Художники:</strong> Дэлхаус Эндрю, Сильвани Джеймс
  </div>
</div>

 <!-- Теги -->
      <h5 class="mt-4">Теги</h5>
      <div class="mb-3">
        <span class="tag"># Детские комиксы</span>
        <span class="tag"># Дисней</span>
        <span class="tag"># Книги для детей</span>
      </div>
    </div>

  </div>
</div>

<div class="reviews-container">

  <!-- Заголовки вкладок -->
  <div class="d-flex justify-content-center border-bottom mb-3">
    <div class="px-3 py-2 fw-bold border-bottom border-danger text-danger">
      Отзывы <span class="text-muted">0</span>
    </div>
    <div class="px-3 py-2 fw-bold">Отзывы LiveLib</div>
  </div>
  <!-- Рейтинг -->
  <div class="rating-box border rounded p-3 bg-light text-center mx-auto mb-4">
    <div class="d-flex justify-content-center align-items-center mb-2">
      <span class="fs-4 fw-bold me-2">4.3</span>
      <span class="text-muted small">оценок: 19</span>
    </div>
    <div class="small text-start d-inline-block">
      <div>★ ★ ★ ★ ★ — 10</div>
      <div>★ ★ ★ ★ ☆ — 6</div>
      <div>★ ★ ★ ☆ ☆ — 2</div>
      <div>★ ★ ☆ ☆ ☆ — 0</div>
      <div>★ ☆ ☆ ☆ ☆ — 1</div>
    </div>
  </div>

  <!-- Отзыв -->
  <div class="review">
    <p class="mb-1 text-center">
      <strong>Snowtrooper</strong>,
      <small class="text-muted">24 февраля 2022 г., 22:06</small>
    </p>
    <p class="text-center">
      После окончания событий мультсериала прошел год. Сен-Канар живет спокойно,
      никто не вспоминает о преступлениях, мстителе в маске и даже Зигзаг Маккряк остался
      без работы. Чёрный Плащ... то есть, простите, Кряк Лапчатый влачит жалкое существование
      офисного клерка в суперкорпорации "Крякверс"...
    </p>
    <p class="text-center">
      <a href="#" class="small text-decoration-none text-danger">Читать полностью</a>
    </p>
  </div>

</div>


</main>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4 mt-5">
  <div class="container">
    <p class="mb-0">© 2025 ЭКСМО. Все права защищены.</p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>