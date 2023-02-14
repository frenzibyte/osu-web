<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'deleted' => '[изтрит потребител]',

    'beatmapset_activities' => [
        'title' => ":user Редакторска История",
        'title_compact' => 'Редактиране',

        'discussions' => [
            'title_recent' => 'Наскоро започнати дискусии',
        ],

        'events' => [
            'title_recent' => 'Последни събития',
        ],

        'posts' => [
            'title_recent' => 'Скорошни публикации',
        ],

        'votes_received' => [
            'title_most' => 'Най-харесвани от (последните 3 месеца)',
        ],

        'votes_made' => [
            'title_most' => 'Най-харесвани (последните 3 месеца)',
        ],
    ],

    'blocks' => [
        'banner_text' => 'Вие блокирахте този потребител.',
        'comment_text' => 'Този коментар е скрит.',
        'blocked_count' => 'блокирани потребители (:count)',
        'hide_profile' => 'Скрий профил',
        'hide_comment' => 'скрий',
        'not_blocked' => 'Този потребител не е блокиран.',
        'show_profile' => 'Покажи профил',
        'show_comment' => 'покажи',
        'too_many' => 'Достигнат е лимита за блокиране.',
        'button' => [
            'block' => 'Блокиране',
            'unblock' => 'Отблокиране',
        ],
    ],

    'card' => [
        'loading' => 'Зареждане...',
        'send_message' => 'изпрати съобщение',
    ],

    'create' => [
        'form' => [
            'password' => 'парола',
            'password_confirmation' => 'потвърди парола',
            'submit' => 'създаване на профил',
            'user_email' => 'имейл',
            'user_email_confirmation' => 'потвърди имейл',
            'username' => 'потребителско име',

            'tos_notice' => [
                '_' => 'чрез създаването на профил се съгласявате с :link',
                'link' => 'условията за ползване',
            ],
        ],
    ],

    'disabled' => [
        'title' => 'О, не! Изглежда, че вашият профил е деактивиран.',
        'warning' => "В случай, че нарушите правило, имайте предвид, че съществува период на изчакване с продължителност един месец, през който няма да разгледаме вашата молба. След изтичане на този период, свободни сте да се свържите с нас в случай на необходимост. Създаване на нови акаунти след деактивиране на един, ще доведе до <strong>удължаване на този едномесечен период.</strong>. Със създаването на <strong>всеки един нов акаунт, вие допълнително нарушавате правилата</strong>. Силно се надяваме да се вслушате в думите ни!",

        'if_mistake' => [
            '_' => 'Ако мислите, че е станала грешка, свободни сте да се свържете с нас (чрез :email или клик върху "?" в долната дясна част на страницата). Имайте предвид, че сме уверени в действията си, защото са базирани на солидна информация. Ние запазваме правото си да пренебрегнем молбата ви, ако усетим че умишлено ни лъжете.',
            'email' => 'имейл',
        ],

        'reasons' => [
            'compromised' => 'Вашият профил беше счетен за компрометиран. Временно е деактивиран до изясняване на идентичността.',
            'opening' => 'Има редица причини, които могат да доведат до деактивиране на профила ви:',

            'tos' => [
                '_' => 'Нарушили сте едно или повече от нашите :community_rules или :tos.',
                'community_rules' => 'обществени правила',
                'tos' => 'условия за ползване',
            ],
        ],
    ],

    'filtering' => [
        'by_game_mode' => 'Потребители по вид игра',
    ],

    'force_reactivation' => [
        'reason' => [
            'inactive_different_country' => "Вашият акаунт не е ползван от дълго време.",
        ],
    ],

    'login' => [
        '_' => 'Вход',
        'button' => 'Влизане',
        'button_posting' => 'Влизане...',
        'email_login_disabled' => 'Влизането чрез имейл е в момента деактивирано. Вместо това, моля ползвайте потребителското си име.',
        'failed' => 'Неправилен опит за влизане',
        'forgot' => 'Забравихте си паролата?',
        'info' => 'Моля, влез в профила си, за да продължите',
        'invalid_captcha' => 'Прекалено много неуспешни опити за влизане! Докажете, че не сте робот и опитайте отново. (Обновете страницата, в случай че не се вижда задачата)',
        'locked_ip' => 'Вашият IP адрес е блокиран. Моля изчакайте няколко минути.',
        'password' => 'Парола',
        'register' => "Нямате osu! акаунт? Направете си един",
        'remember' => 'Запомни ме на този компютър',
        'title' => 'Моля, влез в профила си, за да продължите',
        'username' => 'Потребителско име',

        'beta' => [
            'main' => 'Ранният достъп е ограничен само за привилегировани потребители.',
            'small' => '(osu!supporter ще има достъп скоро)',
        ],
    ],

    'posts' => [
        'title' => 'публикациите на :username',
    ],

    'anonymous' => [
        'login_link' => 'кликнете, за влизане',
        'login_text' => 'вход',
        'username' => 'Гост',
        'error' => 'Моля, влез в профила си, преди да направите това.',
    ],
    'logout_confirm' => 'Сигурни ли сте, че искате да излезете от профила си? :(',
    'report' => [
        'button_text' => 'Докладване',
        'comments' => 'Допълнителни коментари',
        'placeholder' => 'Моля, предоставете всякаква информация, която смятате че ще бъде полезна.',
        'reason' => 'Причина',
        'thanks' => 'Благодаря за доклада ви!',
        'title' => 'Искате да докладвате :username?',

        'actions' => [
            'send' => 'Изпращане на доклад',
            'cancel' => 'Отмени',
        ],

        'options' => [
            'cheating' => 'Нечестна игра / Измама',
            'multiple_accounts' => 'Използва няколко профила',
            'insults' => 'Обижда мен / друг',
            'spam' => 'Спам',
            'unwanted_content' => 'Изпраща неприлично съдържание',
            'nonsense' => 'Безсмислици',
            'other' => 'Друго (посочете по-долу)',
        ],
    ],
    'restricted_banner' => [
        'title' => 'Вашият профил е ограничен!',
        'message' => 'Докато сте ограничени, няма да може да общувате с други играчи и вашите резултати ще са видими само за вас. Това често е резултат от системата ни за автоматично засичане на измамници и статутът ще бъде премахнат до 24 часа. Ако желаете да обжалвате ограничението, свържете се с<a href="mailto:accounts@ppy.sh"> поддръжка</a>.',
        'message_link' => '',
    ],
    'show' => [
        'age' => 'на :age години',
        'change_avatar' => 'променете аватара си!',
        'first_members' => 'Тук от началото',
        'is_developer' => 'osu!developer',
        'is_supporter' => 'osu!supporter',
        'joined_at' => 'Потребител от :date',
        'lastvisit' => 'Последно видян :date',
        'lastvisit_online' => 'В момента онлайн',
        'missingtext' => 'Вероятно сте допуснали правописна грешка! (или потребителят е бил баннат)',
        'origin_country' => 'От :country',
        'previous_usernames' => 'някога известен като',
        'plays_with' => 'Играе с :devices',
        'title' => "профила на :username",

        'comments_count' => [
            '_' => 'Публикувани :link',
            'count' => ':count_delimited коментар|:count_delimited коментара',
        ],
        'cover' => [
            'to_0' => 'скриване на корицата',
            'to_1' => 'показване на корицата',
        ],
        'edit' => [
            'cover' => [
                'button' => 'Промяна на профилната корица',
                'defaults_info' => 'Повече опции за корици ще бъдат налични в бъдеще',
                'upload' => [
                    'broken_file' => 'Неуспешна обработка на изображението. Проверете каченото изображение и опитайте отново.',
                    'button' => 'Качи изображение',
                    'dropzone' => 'Пуснете файла тук, за да го качите',
                    'dropzone_info' => 'Може да влачите изображението до тук, за качване',
                    'size_info' => 'Корицата трябва да е с размер 2400x620',
                    'too_large' => 'Файлът е прекалено голям.',
                    'unsupported_format' => 'Неподдържан формат.',

                    'restriction_info' => [
                        '_' => 'Качването е налично само за :link',
                        'link' => 'osu!supporters',
                    ],
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => 'стандартен режим на игра',
                'set' => 'задай :mode като стандартен режим на игра',
            ],
        ],

        'extra' => [
            'none' => 'няма',
            'unranked' => 'Няма скорошни данни',

            'achievements' => [
                'achieved-on' => 'Постигнато на :date',
                'locked' => 'Заключенo',
                'title' => 'Постижения',
            ],
            'beatmaps' => [
                'by_artist' => '- :artist',
                'title' => 'Бийтмапове',

                'favourite' => [
                    'title' => 'Любими бийтмапове',
                ],
                'graveyard' => [
                    'title' => 'Изоставени бийтмапове',
                ],
                'guest' => [
                    'title' => 'Предложени трудности към бийтмапове',
                ],
                'loved' => [
                    'title' => 'Обичани бийтмапове',
                ],
                'nominated' => [
                    'title' => 'Номинирани бийтмапове с класация',
                ],
                'pending' => [
                    'title' => 'Чакащи класиране бийтмапове',
                ],
                'ranked' => [
                    'title' => 'Класирани и одобрени бийтмапове',
                ],
            ],
            'discussions' => [
                'title' => 'Дискусии',
                'title_longer' => 'Скорошни дискусии',
                'show_more' => 'виж повече дискусии',
            ],
            'events' => [
                'title' => 'Събития',
                'title_longer' => 'Скорошни събития',
                'show_more' => 'виж повече събития',
            ],
            'historical' => [
                'title' => 'Хронология',

                'monthly_playcounts' => [
                    'title' => 'Историята на игра',
                    'count_label' => 'Игри',
                ],
                'most_played' => [
                    'count' => 'пъти изигран',
                    'title' => 'Най-играните бийтмапове',
                ],
                'recent_plays' => [
                    'accuracy' => 'прецизност: :percentage',
                    'title' => 'Скорошна активност (24 часа)',
                ],
                'replays_watched_counts' => [
                    'title' => 'История на гледани повторения от останалите',
                    'count_label' => 'Гледани повторения',
                ],
            ],
            'kudosu' => [
                'recent_entries' => 'Скорошна Kudosu история',
                'title' => 'Kudosu!',
                'total' => 'Общо получено Kudosu',

                'entry' => [
                    'amount' => ':amount kudosu',
                    'empty' => "Този потребител все още няма kudosu!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'Получено :amount от молбата за забрана на kudosu в редакторска публикация :post',
                        ],

                        'deny_kudosu' => [
                            'reset' => 'Отказано :amount от редакторска публикация :post',
                        ],

                        'delete' => [
                            'reset' => 'Загубено :amount за изтриване на редакторска публикация в :post',
                        ],

                        'restore' => [
                            'give' => 'Получено :amount за възстановяване на редакторска публикация в :post',
                        ],

                        'vote' => [
                            'give' => 'Получено :amount за получен глас от редакторска публикация в :post',
                            'reset' => 'Загубено :amount за изгубен глас от редакторска публикация в :post',
                        ],

                        'recalculate' => [
                            'give' => 'Получено :amount за преизчисляване на гласове от редакторска публикация в :post',
                            'reset' => 'Загубено :amount за преизчисляване на гласове от редакторска публикация в :post',
                        ],
                    ],

                    'forum_post' => [
                        'give' => 'Получено :amount от :giver за публикацията в :post',
                        'reset' => 'Kudosu е занулено от :giver за публикацията в :post',
                        'revoke' => 'Kudosu е отказано от :giver за публикацията в :post',
                    ],
                ],

                'total_info' => [
                    '_' => 'Основано на колко е допринесъл потребителят за редактиране на бийтмапове. Вижте :link за повече информация.',
                    'link' => 'тази страница',
                ],
            ],
            'me' => [
                'title' => 'за мен!',
            ],
            'medals' => [
                'empty' => "Този потребител все още няма никакви! Т - Т",
                'recent' => 'Най-новите',
                'title' => 'Медали',
            ],
            'playlists' => [
                'title' => 'Плейлист игри',
            ],
            'posts' => [
                'title' => 'Публикации',
                'title_longer' => 'Скорошни публикации',
                'show_more' => 'виж повече публикации',
            ],
            'recent_activity' => [
                'title' => 'Скорошна активност',
            ],
            'realtime' => [
                'title' => 'Мултиплейър игри',
            ],
            'top_ranks' => [
                'download_replay' => 'Изтегли повторение',
                'not_ranked' => 'Само класирани бийтмапове дават pp точки',
                'pp_weight' => 'с тежест :percentage',
                'view_details' => 'Виж детайли',
                'title' => 'Класации',

                'best' => [
                    'title' => 'Най-добри резултати',
                ],
                'first' => [
                    'title' => 'Класации на първо място',
                ],
                'pin' => [
                    'to_0' => 'Откачане',
                    'to_0_done' => 'Откачен резултат',
                    'to_1' => 'Закачане',
                    'to_1_done' => 'Закачен резултат',
                ],
                'pinned' => [
                    'title' => 'Закачени резултати',
                ],
            ],
            'votes' => [
                'given' => 'Дадени гласове (за последните 3 месеца)',
                'received' => 'Получени гласове (за последните 3 месеца)',
                'title' => 'Гласове',
                'title_longer' => 'Скорошни гласове',
                'vote_count' => ':count_delimited глас|:count_delimited гласа',
            ],
            'account_standing' => [
                'title' => 'Състояние на акаунта',
                'bad_standing' => "Акаунта на <strong>:username</strong> не е в добро състояние :(",
                'remaining_silence' => '<strong>:username</strong> ще бъде в състояние да говори отново след :duration.',

                'recent_infringements' => [
                    'title' => 'Скорошни нарушения',
                    'date' => 'дата',
                    'action' => 'действие',
                    'length' => 'продължителност',
                    'length_permanent' => 'Завинаги',
                    'description' => 'описание',
                    'actor' => 'от :username',

                    'actions' => [
                        'restriction' => 'Бан',
                        'silence' => 'Заглушен',
                        'tournament_ban' => 'Турнирна забрана',
                        'note' => 'Бележка',
                    ],
                ],
            ],
        ],

        'info' => [
            'discord' => '',
            'interests' => 'Интереси',
            'location' => 'Текущо местоположение',
            'occupation' => 'Занимание/Работа',
            'twitter' => '',
            'website' => 'Уебсайт',
        ],
        'not_found' => [
            'reason_1' => 'Този потребител вероятно си е променил името.',
            'reason_2' => 'Акаунтът вероятно е недостъпен по причини за сигурност или злоупотреба.',
            'reason_3' => 'Вероятно сте допуснали правописна грешка!',
            'reason_header' => 'Има няколко вероятни причини за това:',
            'title' => 'Не бе открит такъв потребител! Т - Т',
        ],
        'page' => [
            'button' => 'Редактиране на профил',
            'description' => '<strong>за мен!</strong> е една персонализирана част от профилната ви страница.',
            'edit_big' => 'Редактирай ме!',
            'placeholder' => 'Въведи съдържанието на страницата тук',

            'restriction_info' => [
                '_' => 'Трябва да сте :link, за да отключите тази функционалност.',
                'link' => 'osu!supporter',
            ],
        ],
        'post_count' => [
            '_' => 'Приноси :link',
            'count' => ':count_delimited публикация във форум|:count_delimited публикации във форум',
        ],
        'rank' => [
            'country' => 'Класация на държавата за :mode',
            'country_simple' => 'Държавно класиране',
            'global' => 'Световна класация за :mode',
            'global_simple' => 'Глобално класиране',
            'highest' => 'Най-висок ранг: :rank на :date',
        ],
        'stats' => [
            'hit_accuracy' => 'Прецизност на ударите',
            'level' => 'Ниво :level',
            'level_progress' => 'Прогрес до следващо ниво',
            'maximum_combo' => 'Максимално комбо',
            'medals' => 'Медали',
            'play_count' => 'Брой игри',
            'play_time' => 'Общо играно време',
            'ranked_score' => 'Общ класиран резултат',
            'replays_watched_by_others' => 'Гледани повторения от останалите',
            'score_ranks' => 'Класации по брой точки',
            'total_hits' => 'Общ брой попадения',
            'total_score' => 'Общ брой точки',
            // modding stats
            'graveyard_beatmapset_count' => 'Изоставени бийтмапове',
            'loved_beatmapset_count' => 'Обичани бийтмапове',
            'pending_beatmapset_count' => 'Чакащи класиране бийтмапове',
            'ranked_beatmapset_count' => 'Класирани и одобрени бийтмапове',
        ],
    ],

    'silenced_banner' => [
        'title' => 'В момента сте заглушени.',
        'message' => 'Някои действия може да са недостъпни.',
    ],

    'status' => [
        'all' => 'Всички',
        'online' => 'Онлайн',
        'offline' => 'Офлайн',
    ],
    'store' => [
        'from_client' => 'Моля, регистрирайте се от клиента за игра!',
        'from_web' => 'моля, завършете регистрацията от уебсайта на osu!',
        'saved' => 'Потребител създаден',
    ],
    'verify' => [
        'title' => 'Потвърждение на акаунт',
    ],

    'view_mode' => [
        'brick' => 'Блоков изглед',
        'card' => 'Картов изглед',
        'list' => 'Списъчен изглед',
    ],
];
