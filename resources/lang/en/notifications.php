<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'all_read' => 'All notifications read!',
    'mark_read' => 'Clear :type',
    'none' => 'No notifications',
    'see_all' => 'see all notifications',

    'filters' => [
        '_' => 'all',
        'user' => 'profile',
        'beatmapset' => 'beatmaps',
        'forum_topic' => 'forum',
        'news_post' => 'news',
        'build' => 'builds',
        'channel' => 'chat',
    ],

    'item' => [
        'beatmapset' => [
            '_' => 'Beatmap',

            'beatmapset_discussion' => [
                '_' => 'Beatmap discussion',
                'beatmapset_discussion_lock' => 'Discussion on ":title" has been locked',
                'beatmapset_discussion_lock_compact' => 'Discussion was locked',
                'beatmapset_discussion_post_new' => 'New post on ":title" by :username: ":content"',
                'beatmapset_discussion_post_new_empty' => 'New post on ":title" by :username',
                'beatmapset_discussion_post_new_compact' => 'New post by :username: ":content"',
                'beatmapset_discussion_post_new_compact_empty' => 'New post by :username',
                'beatmapset_discussion_review_new' => 'New review on ":title" by :username containing problems: :problems, suggestions: :suggestions, praises: :praises',
                'beatmapset_discussion_review_new_compact' => 'New review by :username containing problems: :problems, suggestions: :suggestions, praises: :praises',
                'beatmapset_discussion_unlock' => 'Discussion on ":title" has been unlocked',
                'beatmapset_discussion_unlock_compact' => 'Discussion was unlocked',
            ],

            'beatmapset_problem' => [
                '_' => 'Qualified Beatmap problem',
                'beatmapset_discussion_qualified_problem' => 'Reported by :username on ":title": ":content"',
                'beatmapset_discussion_qualified_problem_empty' => 'Reported by :username on ":title"',
                'beatmapset_discussion_qualified_problem_compact' => 'Reported by :username: ":content"',
                'beatmapset_discussion_qualified_problem_compact_empty' => 'Reported by :username',
            ],

            'beatmapset_state' => [
                '_' => 'Beatmap status changed',
                'beatmapset_disqualify' => '":title" has been disqualified',
                'beatmapset_disqualify_compact' => 'Beatmap was disqualified',
                'beatmapset_love' => '":title" was promoted to loved',
                'beatmapset_love_compact' => 'Beatmap was promoted to loved',
                'beatmapset_nominate' => '":title" has been nominated',
                'beatmapset_nominate_compact' => 'Beatmap was nominated',
                'beatmapset_qualify' => '":title" has gained enough nominations and entered the ranking queue',
                'beatmapset_qualify_compact' => 'Beatmap entered ranking queue',
                'beatmapset_rank' => '":title" has been ranked',
                'beatmapset_rank_compact' => 'Beatmap was ranked',
                'beatmapset_reset_nominations' => 'Nomination of ":title" has been reset',
                'beatmapset_reset_nominations_compact' => 'Nomination was reset',
            ],

            'comment' => [
                '_' => 'New comment',

                'comment_new' => ':username commented ":content" on ":title"',
                'comment_new_compact' => ':username commented ":content"',
            ],
        ],

        'channel' => [
            '_' => 'Chat',

            'channel' => [
                '_' => 'New message',
                'pm' => [
                    'channel_message' => ':username says ":title"',
                    'channel_message_compact' => ':title',
                    'channel_message_group' => 'from :username',
                ],
            ],
        ],

        'build' => [
            '_' => 'Changelog',

            'comment' => [
                '_' => 'New comment',

                'comment_new' => ':username commented ":content" on ":title"',
                'comment_new_compact' => ':username commented ":content"',
            ],
        ],

        'news_post' => [
            '_' => 'News',

            'comment' => [
                '_' => 'New comment',

                'comment_new' => ':username commented ":content" on ":title"',
                'comment_new_compact' => ':username commented ":content"',
            ],
        ],

        'forum_topic' => [
            '_' => 'Forum topic',

            'forum_topic_reply' => [
                '_' => 'New forum reply',
                'forum_topic_reply' => ':username replied to ":title"',
                'forum_topic_reply_compact' => ':username replied',
            ],
        ],

        'legacy_pm' => [
            '_' => 'Legacy Forum PM',

            'legacy_pm' => [
                '_' => '',
                'legacy_pm' => ':count_delimited unread message|:count_delimited unread messages',
            ],
        ],

        'user_achievement' => [
            '_' => 'Medals',

            'user_achievement_unlock' => [
                '_' => 'New medal',
                'user_achievement_unlock' => 'Unlocked ":title"!',
                'user_achievement_unlock_compact' => 'Unlocked ":title"!',
            ],
        ],
    ],

    'mail' => [
        'beatmapset' => [
            'beatmapset_discussion' => 'The discussion on ":title" has new updates',
            'beatmapset_discussion_lock' => 'The discussion on ":title" has been locked',
            'beatmapset_discussion_unlock' => 'The discussion on ":title" has been unlocked',
            'beatmapset_problem' => 'A new problem reported was reported on ":title"',
            'beatmapset_state' => 'The state of ":title" has changed',
            'comment' => ' Beatmap ":title" has new comments',
        ],

        'channel' => [
            'channel' => [
                'pm' => 'You\'ve received a new message from :username',
            ],
        ],

        'build' => [
            'comment' => 'Changelog ":title" has new comments',
        ],

        'news_post' => [
            'comment' => 'News ":title" has new comments',
        ],

        'forum_topic' => [
            'forum_topic_reply' => 'There are new replies in ":title"',
        ],

        'user_achievement' => [
            'user_achievement_unlock' => ':username has unlocked a new medal, ":title"!',
            'user_achievement_unlock_self' => 'You\'ve unlocked a new medal, ":title"!',
        ],
    ],
];
