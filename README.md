Ниже приведён пример текста для файла README.md, описывающего выполненную работу:

---

# Тестовое задание для PHP-разработчика

## Описание проекта

Данный проект представляет собой веб-приложение, созданное с использованием фреймворка **Laravel 10** и **PHP 8**, с базой данных на **MySQL**. Проект включает функционал для управления товарами и заказами, а также имеет две отдельные части:

-   **Публичная часть сайта:**

    -   Просмотр списка товаров с краткой информацией (название, цена, категория).
    -   Просмотр подробной информации о товаре с формой оформления заказа.
    -   Просмотр списка заказов пользователя, где отображается информация о заказах.

-   **Админ-панель:**
    -   Управление категориями товаров (создание, редактирование, удаление, просмотр).
    -   Управление товарами магазина (создание, редактирование, удаление, просмотр).
    -   Управление заказами (просмотр списка заказов, детальная информация о заказе, изменение статуса заказа, удаление заказов).

## Реализованный функционал

1. **Управление товарами и категориями:**

    - Созданы миграции для таблиц `products` и `categories`.
    - Реализованы CRUD-операции через контроллеры и веб-интерфейс (админ-панель).
    - Настроены связи "один ко многим" между категориями и товарами.

2. **Управление заказами:**

    - Создана миграция для таблицы `orders`, которая содержит поля для ФИО покупателя, даты заказа, статуса, комментария, количества и связи с товаром.
    - Реализовано оформление заказа на публичной странице товара.
    - Пользователь может просмотреть созданный заказ, а администратор — изменить статус заказа на «выполнен» через админ-панель.

3. **Публичная часть:**

    - Главная страница магазина с выводом всех товаров.
    - Страница с подробной информацией о товаре и формой оформления заказа.
    - Страница для просмотра всех заказов пользователя.

4. **Админ-панель:**

    - Отдельный layout для админ-панели с боковым меню, включающим разделы: «Категории», «Товары», «Заказы».
    - Возможность редактирования статуса заказов, просмотра детальной информации, а также управление категориями и товарами.
    - Кнопка для перехода обратно на публичную часть сайта.

5. **Сиды:**
    - Реализован сидер для категорий, который заполняет таблицу `categories` начальными данными (легкий, хрупкий, тяжелый).
    - Реализован сидер для товаров, который создаёт 10 тестовых товаров с использованием Faker.

## Используемые технологии

-   **Laravel 10** – MVC-фреймворк для создания веб-приложений.
-   **PHP 8** – Язык программирования.
-   **MySQL** – Система управления базами данных.
-   **Bootstrap 5** – Фронтенд-фреймворк для быстрой верстки адаптивного интерфейса.
-   **Bootstrap Icons** – Набор иконок для оформления интерфейса.

## Как запустить проект

1. **Клонируйте репозиторий:**

    ```bash
    git clone git@github.com:Shahiahmed/test-project.git
    ```

2. **Установите зависимости:**

    ```bash
    cd test-project
    composer install
    ```

3. **Настройте окружение:**

    - Скопируйте `.env.example` в `.env`
    - Настройте подключение к базе данных в файле `.env`

4. **Запустите миграции и сидеры:**

    ```bash
    php artisan migrate --seed
    ```

5. **Запустите локальный сервер:**

    ```bash
    php artisan serve
    ```

6. **Откройте браузер и перейдите по адресу:**

    - Публичная часть: [http://127.0.0.1:8000](http://127.0.0.1:8000)
    - Админ-панель: [http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin)
