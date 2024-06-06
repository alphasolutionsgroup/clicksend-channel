<?php declare(strict_types=1);

namespace NotificationChannels\ClickSend;

use Illuminate\Support\Facades\Facade;

class ClickSend extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ClickSendService::class;
    }
}