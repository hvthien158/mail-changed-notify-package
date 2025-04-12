<?php

namespace Thientra\MailChangedNotifyPackage\Observers;

use Thientra\MailChangedNotifyPackage\Contract\MailChangedNotificationContract;

class MailChangedNotificationObserver
{
    public function updated(MailChangedNotificationContract $model)
    {
        $model->sendMailChangedNotification();
    }
}
