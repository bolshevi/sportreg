# Запись на спортивные занятия

## Установка

Для установки и запуска проекта, выполните следующие шаги:

- Установите [OpenServerPanel](https://ospanel.io/).

- Клонируйте репозиторий на свой локальный компьютер или сервер: 
  git clone https://github.com/bolshevi/sportreg.git

- Перейдите в папку проекта

- Установите зависимости, выполнив команду: composer install

- Создайте файл .env из файла .env.example и настройте его, указав данные для вашей базы данных: cp .env.example .env

- Затем отредактируйте файл .env, установив нужные значения

- Сгенерируйте ключ приложения: php artisan key:generate

- Выполните миграции базы данных: php artisan migrate

- Запустите локальный сервер разработки: php artisan serve

После успешного запуска сервера, вы сможете получить доступ по адресу http://127.0.0.1:8000.

## Функции проекта

Проект предоставляет следующие функции:

- Просмотр перечьня спортивных занятий.
- Просмотр информации о спортивных занятиях.
- Регистрация на спортивные занятия.
- Административная панель для управления записями.
- Докуменатация разработанных функций


## Разработчики
Проект разработал: ПНИПУ ст. гр. АТП-22-1м Конев Дмитрий Андреевич
