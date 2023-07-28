<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'play_more' => 'Защо не поиграете още osu! вместо това?',
    'require_login' => 'Моля, влез в профила си, за да продължите.',
    'require_verification' => 'Моля, потвърди влизането си, за да продължите.',
    'restricted' => "Не може да правите това докато сте ограничени.",
    'silenced' => "Не може да правите това докато сте заглушени.",
    'unauthorized' => 'Достъпът е отказан.',

    'beatmap_discussion' => [
        'destroy' => [
            'is_hype' => 'Не може да се отмени надъхването.',
            'has_reply' => 'Не може да се изтрие дискусия с отговор в нея',
        ],
        'nominate' => [
            'exhausted' => 'Достигнат е вашият дневен лимит за номиниране, моля опитайте утре.',
            'incorrect_state' => 'Грешка при извършване на това действие, опитайте да презаредите страницата.',
            'owner' => "Не може да номинирате собствения си бийтмап.",
            'set_metadata' => 'Трябва да зададете жанр и език преди номиниране.',
        ],
        'resolve' => [
            'not_owner' => 'Само започналият тази дискусия и притежател на бийтмапа могат да я приключат.',
        ],

        'store' => [
            'mapper_note_wrong_user' => 'Само собственикът на биийтмапа или номинатор/член от NAT групата може да публикува бележки.',
        ],

        'vote' => [
            'bot' => "Не може да се гласува в дискусия, създадена от бот",
            'limit_exceeded' => 'Моля изчакайте малко преди да гласувате отново',
            'owner' => "Не може да се гласува в собствената дискусия.",
            'wrong_beatmapset_state' => 'Може да гласувате само в дискусии за бийтмапове чакащи одобрение.',
        ],
    ],

    'beatmap_discussion_post' => [
        'destroy' => [
            'not_owner' => 'Може да се изтрият само собствените публикации.',
            'resolved' => 'Не може да се изтрие публикация в приключена дискусия.',
            'system_generated' => 'Автоматично създадена публикация не може да бъде изтрита.',
        ],

        'edit' => [
            'not_owner' => 'Само създател на публикацията може да я редактира.',
            'resolved' => 'Не може да се редактира мнение в приключена дискусия.',
            'system_generated' => 'Автоматично създадена публикация не може да бъде редактирана.',
        ],
    ],

    'beatmapset' => [
        'discussion_locked' => 'Този бийтмап е заключен за дискусии.',

        'metadata' => [
            'nominated' => 'Не може да се променят метаданните на номиниран бийтмап. Свържете се с номинатор или NAT член ако смятате, че са зададени грешно.',
        ],
    ],

    'chat' => [
        'annnonce_only' => 'Този канал е само за известия.',
        'blocked' => 'Не може да се изпращат съобщения на потребител, който ви блокира или сте блокирали.',
        'friends_only' => 'Потребителят блокира съобщения от всички, които не са в списъка му с приятели.',
        'moderated' => 'Този канал в момента е ограничен.',
        'no_access' => 'Нямате достъп до този канал.',
        'receive_friends_only' => 'Възможно е потребителят да не отговори, защото приемате съобщения само от хората в списъка ви с приятели.',
        'restricted' => 'Не може да изпращате съобщения докато сте заглушени, ограничени или баннати.',
        'silenced' => 'Не може да изпращате съобщения докато сте заглушени, ограничени или баннати.',
    ],

    'comment' => [
        'store' => [
            'disabled' => 'Коментарите са изключени',
        ],
        'update' => [
            'deleted' => "Не може да се редактира изтрита публикация.",
        ],
    ],

    'contest' => [
        'voting_over' => 'Не може да промените гласа си, след като периодът за гласуване изтече.',

        'entry' => [
            'limit_reached' => 'Достигнато е ограничението за участия в този конкурс',
            'over' => 'Благодарим за участието! Записването за този конкурс приключи и гласуването ще започне скоро.',
        ],
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'Нямате право да ръководите този форум.',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'Само последната публикация може да бъде изтрита.',
                'locked' => 'Не може да се изтрие публикация в заключена дискусия.',
                'no_forum_access' => 'Нямате нужния достъп за този форум.',
                'not_owner' => 'Само създателят на публикацията може да я изтрие.',
            ],

            'edit' => [
                'deleted' => 'Не може да се редактира изтрита публикация.',
                'locked' => 'Публикацията е заключена за редактиране.',
                'no_forum_access' => 'Нямате нужния достъп за този форум.',
                'not_owner' => 'Само създател на публикацията може да я редактира.',
                'topic_locked' => 'Не може да се редактира публикация в заключена дискусия.',
            ],

            'store' => [
                'play_more' => 'Играйте още играта, преди да публикувате във форумите, моля! При проблем с играта, моля пишете във форума за Помощ и Поддръжка.',
                'too_many_help_posts' => "Трябва да се играе още играта, преди да създавате повече публикации. Ако все още срещате проблем с играта, пишете имейл на support@ppy.sh", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'Моля, редактирайте последната си публикация, вместо да публикувате отново.',
                'locked' => 'Не може да отговаряте в заключена дискусия.',
                'no_forum_access' => 'Нямате нужния достъп за този форум.',
                'no_permission' => 'Нямате разрешение за писане.',

                'user' => [
                    'require_login' => 'Моля, влез в профила си, за да отговорите.',
                    'restricted' => "Не може да отговорите докато сте ограничени.",
                    'silenced' => "Не може да отговорите докато сте заглушени.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'Нямате нужния достъп за този форум.',
                'no_permission' => 'Нямате разрешение за създаване на нова дискусия.',
                'forum_closed' => 'Форумът е затворен и не може да се публикува в него.',
            ],

            'vote' => [
                'no_forum_access' => 'Нямате нужния достъп за този форум.',
                'over' => 'Гласуването приключи, не може да се гласува повече.',
                'play_more' => 'Необходимо е да играете още на играта, преди да гласувате във форума.',
                'voted' => 'Промяната на глас не е разрешена.',

                'user' => [
                    'require_login' => 'Моля, влез в профила си, за да гласувате.',
                    'restricted' => "Не може да гласувате докато сте ограничени.",
                    'silenced' => "Не може да гласувате докато сте заглушени.",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'Нямате нужния достъп за този форум.',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'Избраната корица е невалидна.',
                'not_owner' => 'Само собственикът може да редактира корицата.',
            ],
            'store' => [
                'forum_not_allowed' => 'Този форум не приема тематични корици.',
            ],
        ],

        'view' => [
            'admin_only' => 'Само админ може да види този форум.',
        ],
    ],

    'score' => [
        'pin' => [
            'disabled_type' => "",
            'not_owner' => 'Само притежателят на резултата може да го закачи.',
            'too_many' => 'Закачени са прекалено много резултати.',
        ],
    ],

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'Профилната страница е заключена.',
                'not_owner' => 'Може да редактирате само собствената си профилна страница.',
                'require_supporter_tag' => 'необходим е osu!supporter',
            ],
        ],
    ],
];
