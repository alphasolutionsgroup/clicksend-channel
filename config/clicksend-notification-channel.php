<?php declare(strict_types=1);

return [
    'username' => env('CLICKSEND_USERNAME'),
    'api_key' => env('CLICKSEND_API_KEY'),
    'base_url' => env('CLICKSEND_BASE_URL'),
    'sender_id' => env('CLICKSEND_SENDER_ID'),
    /**
     * Specify a number where all messages should be routed. This can be used in dev/staging environments for testing.
     */
    'debug_to' => env('CLICKSEND_DEBUG_TO'),
];