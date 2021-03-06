<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'edit' => [
        'title_compact' => 'ตั้งค่า',
        'username' => 'ชื่อผู้ใช้',

        'avatar' => [
            'title' => 'รูปโปรไฟล์',
            'rules' => 'โปรดตรวจสอบให้แน่ใจว่า avatar ของคุณเป็นไปตาม :link.<br/> ซึ่งหมายความว่ามันจะต้องเป็น <strong> เหมาะสำหรับทุกวัย </strong> เช่น ไม่มีภาพลามกหยาบคายหรือเนื้อหาที่มีการชักจูง',
            'rules_link' => 'กฎของชุมชน',
        ],

        'email' => [
            'current' => 'อีเมลปัจจุบัน',
            'new' => 'อีเมลใหม่',
            'new_confirmation' => 'ยืนยันอีเมล',
            'title' => 'อีเมล',
        ],

        'password' => [
            'current' => 'รหัสผ่านปัจจุบัน',
            'new' => 'รหัสผ่านใหม่',
            'new_confirmation' => 'ยืนยันรหัสผ่าน',
            'title' => 'รหัสผ่าน',
        ],

        'profile' => [
            'title' => 'โปรไฟล์',

            'user' => [
                'user_discord' => '',
                'user_from' => 'ที่อยู่ปัจจุบัน',
                'user_interests' => 'สิ่งที่สนใจ',
                'user_msnm' => 'skype',
                'user_occ' => 'อาชีพ',
                'user_twitter' => 'ทวิตเตอร์',
                'user_website' => 'เว็บไซต์',
            ],
        ],

        'signature' => [
            'title' => 'ลายเซ็น',
            'update' => 'อัพเดต',
        ],
    ],

    'notifications' => [
        'beatmapset_discussion_qualified_problem' => 'ได้รับการแจ้งเตือนเกียวกับปัญหาของ Qualified beatmaps กับโหมดต่อไปนี้',
        'beatmapset_disqualify' => 'ได้รับการแจ้งเตือนเมื่อบีทแมพในโหมดที่ท่านเลือกถูกตัดสิทธิ์',
        'title' => 'การแจ้งเตือน',
        'topic_auto_subscribe' => 'เปิดการแจ้งเตือนอัตโนมัติในกระทู้ที่คุณสร้างขึ้น',

        'options' => [
            '_' => 'วิธีการรับการแจ้งเตือน',
            'beatmapset:modding' => 'การวิจารณ์บีทแมพ',
            'forum_topic_reply' => 'ข้อความตอบกลับในกระทู้',
            'mail' => 'อีเมล',
            'push' => 'ส่งการแจ้งเตือน',
        ],
    ],

    'oauth' => [
        'authorized_clients' => 'ตัวรับที่ได้รับการยืนยัน',
        'own_clients' => 'own clients',
        'title' => 'OAuth',
    ],

    'options' => [
        'title' => 'ตัวเลือก',

        'beatmapset_download' => [
            '_' => 'ประเภทของบีทแมพที่ต้องการตั้งค่าเป็นตัวเลือกพื้นฐานสําหรับทุกดาวน์โหลด',
            'all' => 'พร้อมวิดีโอ ถ้าใช้ได้',
            'no_video' => 'โดยที่ไม่มีวิดีโอ',
            'direct' => 'เปิดใน osu!direct',
        ],

        'beatmapset_title_show_original' => '',
    ],

    'playstyles' => [
        'keyboard' => 'คีย์บอร์ด',
        'mouse' => 'เมาส์',
        'tablet' => 'แท็บเล็ต',
        'title' => 'รูปแบบการเล่น',
        'touch' => 'จอสัมผัส',
    ],

    'privacy' => [
        'friends_only' => 'บล็อกข้อความส่วนตัวจากคนที่ไม่ได้อยู่ในรายชื่อเพื่อน',
        'hide_online' => 'ซ่อนสถานะออนไลน์ของคุณ',
        'title' => 'ความเป็นส่วนตัว',
    ],

    'security' => [
        'current_session' => 'ปัจจุบัน',
        'end_session' => 'เซสชันสิ้นสุด',
        'end_session_confirmation' => 'ขั้นตอนนี้จะสิ้นสุดเซสชันของคุณในอุปกรณ์นั้นทันที คุณแน่ใจไหม?',
        'last_active' => 'ใช้งานล่าสุด:',
        'title' => 'ความปลอดภัย',
        'web_sessions' => 'เซสชันของเว็บ',
    ],

    'update_email' => [
        'update' => 'อัพเดต',
    ],

    'update_password' => [
        'update' => 'อัพเดต',
    ],

    'verification_completed' => [
        'text' => 'ตอนนี้คุณสามารถปิดแท็บ/หน้าต่างนี้ได้',
        'title' => 'การยืนยันตนสำเร็จ',
    ],

    'verification_invalid' => [
        'title' => 'ลิงก์ยืนยันตนไม่ถูกต้องหรือหมดอายุแล้ว',
    ],
];
