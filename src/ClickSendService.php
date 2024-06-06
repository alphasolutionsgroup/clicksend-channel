<?php declare(strict_types=1);

namespace NotificationChannels\ClickSend;

use Illuminate\Support\Facades\Http;
use function Laravel\Prompts\warning;

class ClickSendService {
    public function __construct(protected ClickSendConfig $config) {}

    public function sendSms($recipient, $message): array
    {
        $route = '/sms/send';

        $postData = [
            'from' => $this->config->getSenderId(),
            'to' => $recipient,
            'body' => $message
        ];

        return Http::withBasicAuth($this->config->getUsername(), $this->config->getApiKey())
            ->post($this->config->getBaseUrl() . $route, ['messages' => [$postData]])
            ->json();
    }

    public function getStatus(String $messageId): array
    {
        $route = '/sms/receipts';

        return Http::withBasicAuth($this->config->getUsername(), $this->config->getApiKey())
            ->get($this->config->getBaseUrl() . $route . $messageId)
            ->json();
    }
}