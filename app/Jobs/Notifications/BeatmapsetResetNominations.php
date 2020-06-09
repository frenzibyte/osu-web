<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

namespace App\Jobs\Notifications;

use App\Models\Notification;

class BeatmapsetResetNominations extends BeatmapsetNotification
{
    public static function getMailBaseKey(Notification $notification): string
    {
        return '???';
    }

    public static function getMailText(Notification $notification): string
    {
        return trans("notifications.item.beatmapset.beatmapset_state.{$notification->name}", $notification->details);
    }
}
