ver. 0.99.21
  - зробив виведення ID для публікацій в адмінці (functions.php)
  - пошук top3 публікацій по ID (/top3-posts/settings.php)

ver. 0.99.20
  - додав повноваження для top3-posts - "edit_dashboard" (top3-posts.php)
	- надав заст. гол. редактора повноваження до top3-posts
	- видалив лишні теги з адмінки (залишив теги: CentralMedia та Оновлюється)
	- створив файли документації для сайту
	- забрав виведення тегу img, коли немає головного зображ. для публікації (всі файли single)

ver. 0.99.19
  - додав виведення категоріїв на сторінках single
  - пофіксили дофіга багів у top3-posts

ver. 0.99.18
  - нічого не залазить на рекламу
  - забрав паддінг для архів блогів
  - big video клікається по всій області

ver. 0.99.17
  - виправив:
    - напис "блогів не знайдено" перед слайдером блогів (slider-blogers.php)
    - дублювання основного поста у сайдбарі (single-video.php, single-articles.php, single-blogs.php, single-news.php) 

ver. 0.99.16
  - видалив файли:
    - content.php
    - single.php
  - виправив:
    - виводило 5 популярних статтей замість 3 (single-blogs.php)
    - додав можливість коментувати народного кориспондента (custom-posts-types.php)
    - виводило блок з коментарями коли вони були закриті (усі файли single)
    - 2 блоги замість 3 на головній (content-home-mobile.php)
  - приховав непотріб для адміна (functions.php)
  - оновив плагіни:
    - Akismet
    - Contact Form 7
    - Share Buttons & tools to grow traffic by GetSocial.io

ver. 0.99.15
  - зменшили висоту top-3

ver. 0.99.14
  - зробив правильне виведення шаблонів для новин в архівній сторінці( шаблон: show_latest_news() ) та на всіх інших сторінках( шаблон: show_short_latest_news() ) (function.php)
  - focus для форми пошуку

ver. 0.99.13
 - забрав падінг для популярного відео

ver. 0.99.12
  - створив content-home-mobile
  - top3posts - повісив ссилки на соціалки
  - пофіксив теги
  - забрав соціалки з top3posts
  - поділив content-home
  - перейменував content-home на content-home-desktop
  - переніс content-home-desktop і content-home-mobile в template-parts

ver. 0.99.11
  - створив сторінку archive-news
  - експортував БД

ver. 0.99.10
  - виправив результати пошуку і топ-3 пост

ver. 0.99.9
  - виправив всі помилки на всіх сторінках в валідаторі

ver. 0.99.8
  - посунув дату для однієї статті та новини
  - забрав бордер в популярних відео
  - порівняв тексти
  - пофіксив дрібні баги
  -в футері ссилки зробив в навігації
  - добавив кнопку новини
  - слово кориспондент виправив на кореспондент

ver. 0.99.7
  - розбили народний кориспондент на два файли для мобільних та декстопу
  - зробили ссилки на весь блок прев’юшок

ver. 0.99.6
  - пофіксив виведення блогів у слайдер
  - забрав червону пляму, коли немає тега
  - слайдер блогів - висянув а з а

ver. 0.99.5
  - куча правок шо були в листі

ver. 0.99.4
  - налаштував сповіщенння про кількість блогів, які знаходяться на модерації(в адмінці) (functions.php)
  - пошук по заголовкам (є баг) (/top3-posts/settings.php)

ver. 0.99.3
  - підключив кнопки "Більше (відео/статтей/блогів)" для архівних сторінок (functions.php, loadmore.js, archive-(articles/video/blogs).php )

ver. 0.99.2
  - забрав доступ до Contact Form 7 в усіх крім адміна(гол. ред.) (wp-config.php)
  - приховав коментарі для усіх крім адміна(гол. ред.) та заст. гол. редактора (functions.php)
  - змінив плагін User Roles Editor на Members (бо простіший і кращий інтерфейс)
  - надав доступ до категорій для усіх користувачів

ver. 0.99.1
  - обмежив розмір реклами
  - зжав картинку олівця, тепер 25кб
  - виправив посилання на single-сторінках
  - поправив структуру в top-3 post
  - іконка "закрити" для авторизації
  - розтягнув слайдер топ-статей на головні
  - кнопка play-button має більший z-ondex
  - не дублює картинку при зумуванні top-3-post video
  - заокруглив актуальні блоги
  - зменшив z-index для слайдера блогів

ver. 0.99
  - встановив плагін Contact Form 7
  - підключив форму для народного кориспондента (файли до 200 мб)
    - форма відправляє дані на вказаний email, після чого адмін може додати надіслане в "народний кориспондент"
  - редагував файл wp-config.php, щоб у формі нар. кор. автоматично не добавлялися теги br
  - підключив вивід даних в слайдер народного кориспондента

ver. 0.98
  - зробив шаблони для виведення блогів на головній та в архіві блогів (functions.php)
  - single-articles.php:
    - виправив помилку з відображенням блогів у блоці "по темі" (якщо в статті немає категорії, то виводиться останні 4 статті)
    - зробив виведення блогів у блоці "по темі" за допомогою функції show_homepage_blog()
  - header.php:
    - динамічний title для різних сторінок
    - виправив помилку відображення аватара та опису користувача в формі modal-login (header.php)
  - правильна дата в слайдері культурних подій (була дата публікації) (functions.php, custom-posts-types.php)
  - оптимізував зображення на усіх сторінках

ver. 0.97
  - написав плагін для реклами (plugins/advertising)
  	- створив окремий файл, через який виводиться реклама (template-parts/advertising-block-1.php)
  	- підключив рекламу до усіх сторінок
  - поправив top3-posts:
    - виведення зображення для великого шаблону
    - виведення посилання на стрім в iframe
    - якщо хоча б один id поста вказаний невірно, то виводяться 3 останні публікації, типу: news, articles, video
  - забрав можливість змінювати display-name у користувачів (wp-admin/user-edit.php)
  - модальне вікно при натисканні на посилання:
    - "Ви повинні бути зареєстрованими" (comments.php)
    - "Авторизуйтесь щоб відповісти" (wp-includes/comment-template.php)

ver. 0.96
  -  слайдер блогів клікається по всій області блоку (slider-blogers.php)
  -  топ-3 пост клікається по всій області{top3-post.php}
  -  читабельність тексті в формі( входу, пошуку, реєстрації)
  -  обмежив ширину аватарів блогерів (author.php)
  -  кнопка народний кориспондент не залазить на блоги
  -  популярні статті мають однакову висоту з новинами (big-latest-article)


ver. 0.95
  - написав функцію для створення правильного url для відео(iframe) (functions.php - youtube_iframe_url() )
  - підключив відтворення відео (single-video.php)
  - single-blogs.php:
    - популярні статті (за 21 день)
    - новини партнерів (створив новий файл template-parts/partners-news.php)
  - підключив сторінку автора (author.php)

ver. 0.94
  - пофіксив плей-кнопку, щоб не лізла
  - пофіксив висоту блогів на головній
  - адаптивність для відео на головній (m6)
  - пофіксив адаптивність для блогів на головній
  - пофіксив адаптивність бля сторінки відео


ver. 0.93
  - зробив виведення усіх відео через 2 функції: (functions.php)
    - show_big_video()
    - show_small_video()
  - підключив: (тут вивід усіх типів публікацій у стандартизованому шаблоні, без зображення)
    - категорії (category.php)
    - теги (tag.php)
    - пошук (search.php)

ver. 0.92
  - пофіксив дублювання статтей в попередніх і популяпних статтях
  - збільшив шрифт на головній статті
  - додав бекграунд тегів топ статей
  - повісив ссилки на соціальні мережі

ver. 0.91
  - single-video.php:
    - попередні відео
    - створив новий шаблон для виводу малого і великого відео:
      - small-video (title - до 80 символів)
      - big_video (title - до 120 символів)
    - популяпні відео (за 21 день), не повторюються із "попередніми відео"
  - зробив вивід стилів для віджета погоди, тільки на головній (functions.php)
  - додав іконку лайку для усіх постів (functions.php)

ver. 0.90 
  - пофіксили адаптивність 
  - перейменували "від автора" на "актуальне"

ver. 0.89
  - archive-video.php:
    - попередні відео
    - створив новий шаблон для виводу малого і великого відео
    - small-video (title до 80 символів)
    - big-video (title до 120 символів)
    - Популярні відео (за 21 день), не повторюються із попередніми відео
   -адаптивність для сторінок

ver. 0.88
  - додав відобрпження іконок для новин (по тегам) (functions.php, latest-news.php)
  - виправив стилі для топ-3
  - забрав іконду для слайдера культурних подій
  - посунув контент на слайдері топ статтів
  - поправив теги на на топ слайдері

ver. 0.87
  - підключив single-article.php:
    - контент статті
    - по темі:
      - 4 публікації типу news, articles, blogs, video
      - за останні 30 днів
      - за категоріями, які має основна стаття
      - посуртовані по даті
    - публікації "по темі" виводяться по 3 шаблонам (новини та статті, відео, блоги)
    - якщо публікацій "по темі" < 4, то додатково виводяться останні статті
    - слайдер блогів
    - попередні статті:
      - новий файл для шаблону попередніх статтей (big-latest-article.php)
  - створив файли:
    - content-footer.php (новини та опитування)
    - cultural-events-slider.php (слайдер культурних подій)
    - top3-posts.php (шаблон виводу публікацій, які задає адмін)
      - підключив його до потрібних сторінок
  - підключив single-blogs.php

ver. 0.86
  - зробив шаблони для різних сторінок (content-home, style.css)

ver. 0.85
  - підключив archive-blogs.php:
    - популярне
    - блогери по алфавіту
    - новини
  - добавив кілька нових блогерів і блогів від них

ver. 0.84
  - підключив archive-articles.php:
    - попередні статті (6 останніх статтей)
    - популярні статті (публіковані за 21 день і посуртовані за переглядами)
    - статті, які виводяться в блоці "попередні статті" не виводяться в популярних
    - слайдер блогів
    - всі статті
    - новини

ver. 0.83
  - написав плагін "top3-posts", для надання адміну можливості виводу потрібних постів у топі
  - перейменував функцію show_popular_video() на show_small_video($video_id) з необов'язковим аргументом "$video_id" (functions.php, content-home.php)
  - підключив слайдер культурних подій на головній (content-home.php)

ver. 0.82
  - перейменував функціЇ щоб використовувати на інших сторінках: (functions.php)
    - show_news_for_homepage() на show_short_last_news()
    - show_latest_articles() на show_slider_post()
  - забрав опис поста для функції show_slider_post()
  - створив функції для виведення постів у малому та великому вигляді (show_big_post(), show_small_post() )
  - для функції show_small_post() додав необов'язковий аргумент $height (щоб можна було регулювати висоту поста)
  - підключив: (single-news.php, functions.php)
    - популярне 
    - останні новини

ver. 0.81
  - стаття в топі (archive-*.php), додав маску, забрав ховер для тега.
  - додав іконки кількості переглядів на головні для популярних відео (content-home)
  - пофіксив фон для тегів культурного слайдера (content-home)
  - збільшив z-index для pencil
  - для першого розділювача новин по днях забрав padding-top (content-home)
  - пофіксив блоги, додав маску для топ статті (archive-blog)
  - видалив всюди coontent-footer, крім single-news
  - пофіксив блоги (single-blogs)

ver. 0.80
  - забрав кнопку "швидке редагування" для постів та таксономії в адмінці:
    - wp-admin/includes/class-wp-posts-list-table.php
    - wp-admin/includes/class-wp-term-list-table.php
  - перейменував "народний контроль" на "народний кореспондент" (template-parts/custom-posts-types.php)
  - створив тип публікацій "культурні події" і кастомне поле для нього (url) (template-parts/custom-posts-types.php)
  - вимкнув адмін-бар для усіх користувачів (functions.php)
  - пофіксили теги в топ-статтях
  - перенесли іконки в навбар
  - стилізували популярні відео на головній
  - зробили плавніший слайдер народного кореспондента
  - пофіксили попередні блоги на головній


ver. 0.79
  - додав віджет погоди
  - переніс всі скрипти в футер
  - підключив matterialize i jqeary через  cdn

ver. 0.78
  - пофіксили ініціалізації js(header, footer,function)
  - повидалаяли зайві js файли

ver. 0.77
  - модал для народного кориспондента
 
ver. 0.76
  - перейменував my-custom-posts.php на custom-posts-types.php
  - добавив таксономію "категорії" для усіх кастомних типів публікацій, крім стрімів (custom-posts.php)
  - додав назви категорій, які надіслав Мирослав
  - пофіксив лайки для постів (не обновлявся лічильник після натискання на кнопку "подобається") (functions.php)
  - правильно підключив блок статтей на головній: (content-home.php, functions.php)
    - слайдер:останні 3 статті по даті
    - популярні статті: 2 популярні статті по кількості переглядів за 21 день
    - зробив щоб статті не дублювалися в двох блоках
    - в слайдері відображаються максимум 3 категорії, а в популярних статтях тільки 1 (бо мало місця)
  - добавив вивід категорій для популярних відео (виводиться тільки 1 категорія)
  - створив окремі файли для блоків, які повторюються на різних сторінках:
    - latest-news.php (останні новини)
    - slider-blogers.php (слайдер популярних блогів)
    - polls.php (опитування)
  - створив папку template-parts для додаткових файлів теми:
    - переніс туди додаткові файли з кореневої папки теми
  - підключив для single-news.php:
    - заголовок
    - кількість переглядів
    - час публікації
    - контент
    - слайдер популярних блогів
    - останні новини
    - опитування

ver. 0.75
  - зробив сторінку 404, результати пошуку, всі записи автора, сторінку тега
  - додав слайдер для культурних подій
  - додав ефект для маски при наведені

ver. 0.74
  - зробив народний кориспондент
  - пофіксив сторінку відео

ver. 0.73
  - лайки для постів (functions.php, post-like.js, single-news.php)
  - лайки і дизлайки для коментарів (плагін  Rating System)
  - відображення дня тижня для новин (functions.php)
  - додав функцію виводу скорочених заголовків (слайдер блогів(60), статті(75), новини(75), відео(75), блоги(55) ) (functions.php)

ver. 0.72
  - стилізував коментарі
  - народний кориспондент
  - футер на всіх сторінках одинаковий
  - фікси по мєлочах

ver. 0.71
  - стилізував коментарі

ver. 0.70
  - стилізував опитування
  - змінив в базі слово Votes на Голос

ver. 0.69
  - підключив на головній (content-home.php) :
    - посилання на архівні сторінки
    - слайдер для блогерів (блоги опубліковані за останній 21 день, посуртовані за кількістю переглядів(топовим є блог з найб. кільк. переглядів) )
    - статті (2 останні статті)
    - новини (виводить по 10 новин) (functions.php, style.css, loadmore.js)
    - популярні відео (опубліковані за останній 21 день і посуртовані за кількістю переглядів) (functions.php)
    - попередні блоги (3 останні блоги)
    - новини партнерів (6 останніх новин партнерів)
    - опитування (без стилів)
  - додав можливість коментувати для постів (single-news.php, single-article.php, single-blogs.php, single-video.php)

ver. 0.68
  - встановив плагін GetSocial (для відображення кнопок поділитися у соц. мережах)
  - додав нову тему
  - зробив вивід новин по датах (на головній для нової теми) (content-home.php)

ver.0.67
  - переклав кнопки опитування (frontend) (centralmedia.sql)
  - відновив відображення вкладки "майстерня" в адмінці (functions.php)
  - приховав дочірні вкладки ( домівка і оновлення) для вкладки "майстерня" (wp-admin/menu-header.php)
  - додав 2 нових типи публікацій (my-custom-posts.php):
    - стріми
    - народний контроль
  - додав кастомне поле (посилання на стрім) для стріму (my-custom-posts.php)
  - перейменував:
    - адміністратора на головного редактора
    - редактора на заступника головного редактора
    - автора на журналіста
  - додав 2 нові ролі:
    - журналіст стрічки новин
    - редактор стрічки новин

ver. 0.66
  - встановив і налаштував плагін TinyMCE Advanced (кастомний візуальний редактор)
  - переклав плагіни: (wp-content/languages/plugins/)
    - WP-Polls (wp-polls-uk.mo)
    - WP User Avatar (wp-user-avatar-uk.mo)
    - Video Thumbnails (video-thumbnails-uk.mo)
    - User Role Editor (user-role-editor-uk.mo)
    - TinyMCE Advanced (tinymce-advanced-uk.mo)
  - Перейменував "позначки" на "теги" (wp-content/languages/uk.mo)
  - COOKIE переглянутих постів зберігаються 30 хв (function.php)

ver. 0.65
  - поправив підрахунок переглядів (через COOKIES) (functions.php)
  - приховав тип публікацій записи і сторінки в адмін-барі (wp-includes/admin-bar.php)
  - автоматичний url для постів на латиниці (плагін - "Cyr to Lat enhanced")
  - динамічний title для різних сторінок (header.php)
  - топ 10 блогерів на сторінці блогів (по кількості постів) (functions.php)

ver. 0.64
  - додав кількість переглядів для постів (function.php)
  - вивів топ новин (по кількості переглядів) на головній (content-home.php)

ver. 0.63
  - забрав можливість вибору автора для публікації (my-custom-posts.php)
  - зробив відображення ієрархії коментарів (header.php)
  - зробив виведення новин за тегом "сенсація" на головну (content-home.php)
  - додав час публікації для новин (на головній) (content-home.php)
  - додав дату і час для повної інформації про публікацію (single-news.php(article, blogs) )
   
ver. 0.62
  - додав слово заголовок до форми для редагування публікацій (wp-admin/edit-form-advanced.php)
  - налаштував виведення випадкових опитувань
  - переклав кілька рос. слів (function.php)
  - зробив переадресацію на поточну сторінку після входу(виходу) в адмінку
  - налаштував додавання коментарів тільки для авторизованих користувачів
  - налаштував автоматичний фільтр коментарів по ключовим словам
  - приховав тип публікацій "сторінки" в адмінці
  - відключив сповіщення про оновлення Word Press для усіх крім адміна (файл wp-admin/includes/update.php)

ver. 0.61
  - додав пропущений коміт

ver. 0.60
  - підключив функціонал до файлів:
    - author.php
    - tag.php
  - редагував файли:
    - function.php
    - search.php
    - content-home.php
    - footer.php
  - видалив папку Ajax_Poll

ver. 0.59
  - підключив плагін WP-Pools
  - мінімальна розмітка коментарів, стреба переробити і стилізувати

ver. 0.58
  - додав сторінку tag 
  - видалив(закоментував) посилання "Більше інформаці" в user-edit 

ver. 0.57
  - забрав кольори майстерні

ver. 0.56
  - почистив admin-footer
  - забрав іконку Wordpress
  - доперекладав адмінку

ver. 0.55
  - Добавив посилання на картинки всюди
  - Лого в футері на головну
  - Стилізував форму залогіненого юзера
  - добавив сторінку автора(author.php)
  - редагував сторінку search.php

ver. 0.54
  - поміняв стилі для форм входу, реєстрації та забули пароль

ver. 0.53
  - приховав тип публіквцій 'записи' в адмінці

ver. 0.52
  - добавив файл my-custom-posts.php
  - редагував файли:
    - function.php
    - content-home.php
    - content-footer.php
    - archive-video.php
    - archive-partner-news.php
  - видалив плагін Toolset Types
  - написав код для додавання кастомних типів публікацій
  - написав код для додавання кастомних полів для публікацій:
    - video_url
    - partner_news_url
  - додав повноваження для ролей користувачів
  - додав 6 новин в БД

ver. 0.51
  - випраив вікно авторизації:
  - забрав тінь
  - стилі для меню
  - z-index для SideNav
  - поставив нові шрифти
  - виправив помилки з шрифтами

ver. 0.50
  - налаштував:
    - посилання для відео на головній
    - архів новин партнерів
    - архів відео

ver. 0.49
  - добавив сторінку для всіх новин партнерів

ver. 0.48
  - добавив файл registration.php
  - налаштував форми авторизації та реєстрації
  - налаштував SideNav

ver. 0.47
  - стилізував сторінку пошуку

ver. 0.46
  - додав шрифти для цілого документа

ver. 0.45
  - додав SideNav
  - кнопка меню хедері
  - для Iphone 5 стилі
  = стилі для кнопок голосувань
  - стилі для пагінатора

ver. 0.44
  - виправив стилі голосувань
  - опитимізував головну під різні девайси
  - і по мелочах

ver. 0.43
  - підключив до БД полоси "актуально" для архіву новин і статтей
  - встановив та налаштував плагін wp_user_avatar, для додавання можливості створювати свої аватари
  - добавив новий тип публікацій "новини партнерів"
  - добавив нові сторінки:
    - archive-partner-news.php
    - registration.php
  - підключив стилі до сторінок:
    - 404.php
    - simple-articles.php
    - archive-partner-news.php

ver. 0.421
  - добавив сторінку 404.php

ver. 0.42
  - поміняв форму пошуку
  - добавив форму входу
  - поставив падінги і марджіни в сторінках статтей, блогів, блогу, новин, новини

ver. 0.41
  - добавив слайдер для архівних сторінок

ver. 0.4
  - виправив помилки з пагінацією для архівних сторінок та пошуку
  - добавив стилі для archive-articles.php (all_states.php)
  - добавив стилі для single-blogs.php
  - добавив стилі для single-news.php

ver. 0.35
  - добавив сторінку content-footer.php
  - добавив стилі для archive-blogs.php (all_blogs.php)
  - добавив стилі для archive-news.php (all_news.php)
  - зробив правильне виведення аватарів для блогерів на головні сторінці

ver. 0.34
  - перейменував файл home-content.php на content-home.php
  - добавив файли searchform.php та search.php
  - добавив пагінацію для архівних сторінок та пошуку

ver. 0.33
  - добавив шаблони для виведення всіх новин, статтей, відео та блогів
  - добавив шаблони для виведення повної інформації для новин, статтей, відео та блогів
  - в хедері та в футері видалив меню, яке виводилось з адмінки і повернув стару навігацію

ver. 0.32
  - добавив вивід меню(в хедері і в футері) з адмінки

ver. 0.31
  - зробив підключення стилів та скриптів за допомогою функцій wp_enqueue_style та wp_enqueue_script
  - скачав файли стилів та скриптів, які знаходились на віддалених серверах
