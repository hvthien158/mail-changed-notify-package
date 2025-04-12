<?php

use Illuminate\Support\Facades\Mail;
use Thientra\MailChangedNotifyPackage\Tests\Models\User;

it('can send mail when user\'s email is changed', function () {
    Mail::fake();
    $user = User::factory()->create();
    $user->email = "test1@gmail.com";
    $user->save();

    Mail::assertSent(($user->emailChangedNotificationMail())::class);
});

it('can not send mail when user\'s email is not changed', function () {
    Mail::fake();
    $user = User::factory()->create();
    $user->name = "test1";
    $user->save();

    Mail::assertNotSent(($user->emailChangedNotificationMail())::class);
});
