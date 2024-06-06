<?php
declare(strict_types=1);

namespace NotificationChannels\ClickSend;

use Illuminate\Contracts\Config\Repository;

class ClickSendClient
{
    public function __construct(protected ClickSendService $clickSendService, protected ClickSendconfig $config) {}

}