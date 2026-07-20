# TW Starter

Персональная стартовая тема WordPress для разработки сайтов TrueWeb.

---

## Цель проекта

Создать собственную стартовую тему, которая ускоряет разработку новых проектов и развивается вместе с опытом.

---

## Технологии

- WordPress
- PHP
- SCSS
- JavaScript
- Git
- LocalWP
- SFTP
- VS Code

---

## Структура проекта

```
assets/
inc/
template-parts/
```

---

## Roadmap

### v0.1

- [x] Создана структура темы
- [x] Настроен LocalWP
- [x] Настроен Git
- [x] Создан GitHub-репозиторий
- [x] Создана архитектура `inc`

### v0.2

- [x] Создан минимальный шаблон темы
- [x] Добавлены `header.php` и `footer.php`
- [x] Настроен `index.php`
- [x] Подключен `wp_head()`
- [x] Подключен `wp_footer()`
- [x] Подключен `wp_body_open()`
- [x] Реализовано подключение CSS через `wp_enqueue_style()`

### v0.3

- [x] Разделено подключение стилей и скриптов
- [x] Добавлена функция `tw_enqueue_styles()`
- [x] Добавлена функция `tw_enqueue_scripts()`
- [x] Подключен `assets/js/main.js` через `wp_enqueue_script()`
- [x] Сформирована архитектура подключения ресурсов

### v0.4

- [x] Создан файл `inc/theme-support.php`
- [x] Подключен `theme-support.php` через `functions.php`
- [x] Добавлен хук `after_setup_theme`
- [x] Добавлена поддержка миниатюр записей `post-thumbnails`
- [x] Добавлена поддержка автоматического управления title через `title-tag`
- [x] Добавлена поддержка HTML5-разметки темы

---

## Автор

Alex / truewebmaster
