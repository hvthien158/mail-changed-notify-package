<?php

namespace Thientra\MailChangedNotifyPackage\Traits;

use Thientra\MailChangedNotifyPackage\Mail\SendMailChangedNotification;
use Thientra\MailChangedNotifyPackage\Observers\MailChangedNotificationObserver;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
trait SendMailNotificationTrait
{
    protected static function booted()
    {
        self::observe(MailChangedNotificationObserver::class);
    }

    public function getEmailColumnName()
    {
        return 'email';
    }

    public function emailChangedNotificationMail(): Mailable
    {
        return new SendMailChangedNotification();
    }

    public function isEmailChanged(): bool
    {
        return $this->wasChanged($this->getEmailColumnName());
    }

    public function sendMailChangedNotification(): void
    {
        if ($this->isEmailChanged()) {
            Mail::to($this->getRawOriginal($this->getEmailColumnName()))->send($this->emailChangedNotificationMail());
        }
    }
}
