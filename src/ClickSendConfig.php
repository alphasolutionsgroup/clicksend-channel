<?php declare(strict_types=1);

namespace NotificationChannels\ClickSend;

class ClickSendConfig
{
    public function __construct(protected array $config) {}

    public function getUsername(): string | null
    {
        return $this->config['username'] ?? null;
    }

    public function getApiKey(): string | null
    {
        return $this->config['api_key'] ?? null;
    }

    public function getBaseUrl(): string | null
    {
        return $this->config['base_url'] ?? null;
    }

    public function getSenderId(): string | null
    {
        return $this->config['sender_id'] ?? null;
    }
}