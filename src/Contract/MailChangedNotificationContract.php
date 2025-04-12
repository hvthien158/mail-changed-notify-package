<?php

namespace Thientra\MailChangedNotifyPackage\Contract;

use Illuminate\Mail\Mailable;

interface MailChangedNotificationContract
{
    public function getEmailColumnName();
    public function emailChangedNotificationMail(): Mailable;
    public function isEmailChanged(): bool;
    public function sendMailChangedNotification(): void;
}
