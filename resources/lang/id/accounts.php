<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'edit' => [
        'title_compact' => 'pengaturan',
        'username' => 'nama pengguna',

        'avatar' => [
            'title' => 'Avatar',
            'rules' => 'Pastikan avatar Anda mematuhi :link yang berlaku.<br/>  Dengan kata lain, avatar Anda harus <strong>cocok untuk segala usia</strong> tanpa mengandung unsur-unsur yang tidak dibenarkan seperti cacian, hinaan, atau konten-konten yang bersifat sugestif.',
            'rules_link' => 'peraturan komunitas',
        ],

        'email' => [
            'current' => 'email saat ini',
            'new' => 'email baru',
            'new_confirmation' => 'konfirmasi email',
            'title' => 'Email',
        ],

        'password' => [
            'current' => 'kata sandi saat ini',
            'new' => 'kata sandi baru',
            'new_confirmation' => 'konfirmasi kata sandi',
            'title' => 'Kata Sandi',
        ],

        'profile' => [
            'title' => 'Profil',

            'user' => [
                'user_discord' => 'discord',
                'user_from' => 'lokasi saat ini',
                'user_interests' => 'minat',
                'user_msnm' => 'skype',
                'user_occ' => 'pekerjaan',
                'user_twitter' => 'twitter',
                'user_website' => 'situs web',
            ],
        ],

        'signature' => [
            'title' => 'Tanda Tangan',
            'update' => 'perbarui',
        ],
    ],

    'notifications' => [
        'beatmapset_discussion_qualified_problem' => 'terima notifikasi ketika terdapat suatu masalah baru pada beatmap yang berstatus Qualified pada mode',
        'beatmapset_disqualify' => 'terima notifikasi ketika terdapat beatmap yang didiskualifikasi pada mode',
        'title' => 'Notifikasi',
        'topic_auto_subscribe' => 'hidupkan notifikasi secara otomatis di topik forum baru yang Anda buat',

        'options' => [
            '_' => 'kirimkan notifikasi melalui',
            'beatmapset:modding' => 'modding beatmap',
            'forum_topic_reply' => 'balasan pada topik',
            'mail' => 'email',
            'push' => 'web',
        ],
    ],

    'oauth' => [
        'authorized_clients' => 'klien yang memiliki akses',
        'own_clients' => 'klien yang dimiliki',
        'title' => 'OAuth',
    ],

    'options' => [
        'title' => 'Pengaturan',

        'beatmapset_download' => [
            '_' => 'unduh beatmap',
            'all' => 'dengan video (apabila tersedia)',
            'no_video' => 'tanpa video',
            'direct' => 'buka melalui osu!direct',
        ],

        'beatmapset_title_show_original' => '',
    ],

    'playstyles' => [
        'keyboard' => 'keyboard',
        'mouse' => 'mouse',
        'tablet' => 'tablet',
        'title' => 'Gaya Bermain',
        'touch' => 'layar sentuh',
    ],

    'privacy' => [
        'friends_only' => 'Blokir pesan pribadi dari orang yang tidak ada dalam daftar teman Anda',
        'hide_online' => 'sembunyikan keberadaan online Anda',
        'title' => 'Kebijakan Privasi',
    ],

    'security' => [
        'current_session' => 'saat ini',
        'end_session' => 'Akhiri Sesi',
        'end_session_confirmation' => 'Aksi ini akan langsung mengakhiri sesi anda di perangkat tersebut. Apakah anda yakin?',
        'last_active' => 'Terakhir aktif:',
        'title' => 'Keamanan',
        'web_sessions' => 'web session',
    ],

    'update_email' => [
        'update' => 'perbarui',
    ],

    'update_password' => [
        'update' => 'perbarui',
    ],

    'verification_completed' => [
        'text' => 'Kamu dapat menutup laman ini sekarang',
        'title' => 'Verifikasi selesai',
    ],

    'verification_invalid' => [
        'title' => 'Tautan verifikasi tidak valid atau kedaluwarsa',
    ],
];
