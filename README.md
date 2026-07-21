# TW Starter

Персональная стартовая тема WordPress для разработки сайтов TrueWeb.

---

## Цель проекта

Создать собственную стартовую тему, которая ускоряет разработку новых проектов и развивается вместе с опытом.

---

## Стек

- WordPress
- Vite
- SCSS (Sass Modules)
- Vanilla JavaScript (ES Modules)
- PHP 8+

## Структура

```
assets/
├── fonts/
├── icons/
├── images/
├── js/
├── scss/
└── css/

build/
├── css/
└── js/

inc/
template-parts/
```

## Установка

Установить зависимости:

```bash
npm install
```

Запустить режим разработки:

```bash
npm run dev
```

Собрать production-версию:

```bash
npm run build
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

### v0.5

- [x] Создан файл `inc/menus.php`
- [x] Подключен `menus.php` через `functions.php`
- [x] Добавлена регистрация области меню через `register_nav_menus()`
- [x] Создано главное меню `primary`
- [x] Добавлен вывод меню через `wp_nav_menu()`

### v0.6

- [x] Создана структура `template-parts`
- [x] Создана папка `template-parts/sections`
- [x] Добавлен первый компонент страницы `hero.php`
- [x] Настроено подключение компонентов через `get_template_part()`
- [x] `front-page.php` переведен в роль сборщика секций
- [x] Проверена работа загрузки файлов темы через SFTP
- [x] Проверено разделение файлов темы и базы данных WordPress

### v0.7

- [x] Создан шаблон `page.php` для обычных страниц
- [x] Создан шаблон `single.php` для отдельных записей
- [x] Создан шаблон `archive.php` для архивных страниц
- [x] Создан шаблон `404.php` для страницы ошибки
- [x] Проверена работа иерархии шаблонов WordPress
- [x] Подтверждено корректное переключение шаблонов в зависимости от типа страницы

### v0.8

- [x] Создан файл `inc/helpers.php`
- [x] Подключен `helpers.php` через `functions.php`
- [x] Добавлена первая вспомогательная функция `tw_get_theme_uri()`
- [x] Подготовлена основа для переиспользуемых функций темы

### v0.9

- [x] Создан файл `inc/theme-options.php`
- [x] Подключен `theme-options.php` через `functions.php`
- [x] Добавлена поддержка логотипа через `add_theme_support('custom-logo')`
- [x] Добавлена возможность загрузки SVG-файлов
- [x] Реализован вывод логотипа через `the_custom_logo()`
- [x] Проверена работа логотипа WordPress
- [x] Проверена интеграция меню и базовых настроек темы

### v0.9.1

- [x] Подготовлена архитектура Frontend
- [x] Добавлена папка `assets/scss`
- [x] Добавлены папки `layout`, `components`, `sections`, `pages`
- [x] Сохранена структура `helpers` для SCSS
- [x] Папка `img` переименована в `images`
- [x] Подготовлена структура проекта для интеграции Vite

### v1.0

- [x] Создан `package.json`
- [x] Изучено назначение `package.json`
- [x] Установлен Node.js (используется существующая установка)
- [x] Установлен Vite
- [x] Настроен `package.json`
- [x] Добавлены npm scripts:
  - `npm run dev`
  - `npm run build`
- [x] Настроен `.gitignore` для работы с Node.js
- [x] Изучена структура npm-проекта
- [x] Определены правила работы с зависимостями (`dependencies` / `devDependencies`)

### v1.1

- [x] Установлен Sass
- [x] Создан `vite.config.js`
- [x] Настроена работа Vite внутри WordPress темы
- [x] Настроена точка входа `assets/scss/main.scss`
- [x] Настроена папка сборки `build`
- [x] Настроена генерация CSS в `build/css/main.css`
- [x] Проверена сборка SCSS через Vite
- [x] Проверено подключение собранного CSS через WordPress

### v1.2

- [x] Настроена сборка JavaScript через Vite
- [x] Создана структура JS:
  - components
  - modules
  - utils
- [x] Настроена сборка JS в build/js/main.js
- [x] Настроена сборка CSS в build/css/main.css
- [x] Настроены отдельные точки входа JS и SCSS
- [x] Проверена работа сборки через npm run build

### v1.3

- [x] Создан файл `inc/constants.php`
- [x] Добавлена константа версии темы `TW_THEME_VERSION`
- [x] Настроено подключение constants.php через functions.php
- [x] Обновлено подключение CSS через `wp_enqueue_style()`
- [x] Обновлено подключение JS через `wp_enqueue_script()`
- [x] Настроено использование версии темы при подключении ассетов
- [x] Проверена корректная генерация версии в HTML

### v1.3.1

- [x] Создан загрузчик init.php
- [x] в functions.php всё подключается через init.php
- [x] Настроены alias в `vite.config.js`
- [x] Добавлены пути:
  - `@scss`
  - `@js`
  - `@img`
  - `@icons`
  - `@fonts`
- [x] Проверена отдельная сборка SCSS и JS
- [x] Исправлена структура подключения стилей
- [x] JS и CSS собираются в отдельные файлы build

### v1.4.0

- Настроен Vite.
- Настроена сборка SCSS и JavaScript.
- Создана базовая архитектура проекта.
- Подготовлена SCSS-библиотека:
  - Helpers
  - Variables
  - Normalize
  - Globals
  - Utils
- Подготовлена структура JavaScript.

---

## Автор

Alex / truewebmaster
