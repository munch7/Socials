<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FacebookMessagesController extends Controller
{
    private $pageAccessToken;
    private $pageId;

    public function __construct()
    {
        $this->pageAccessToken = env('FACEBOOK_PAGE_ACCESS_TOKEN');
        $this->pageId = env('FACEBOOK_PAGE_ID');  // Ensure this is the actual page ID, not the app ID.
    }

    /**
     * Fetch conversations from Facebook Graph API.
     */
    public function getConversations(Request $request)
{
    $url = "https://graph.facebook.com/v21.0/{$this->pageId}/conversations";

    $response = Http::get($url, [
        'access_token' => $this->pageAccessToken,
    ]);

    $conversations = $response->successful() ? $response->json()['data'] ?? [] : [];

    return view('messages', ['conversations' => $conversations]);
}

//     public function getConversations(Request $request)
// {
//     $url = "https://graph.facebook.com/v21.0/{$this->pageId}/conversations";

//     $response = Http::get($url, [
//         'access_token' => $this->pageAccessToken,
//     ]);

//     if ($response->successful()) {
//         $conversations = $response->json()['data'] ?? [];
//         Log::info('API Response:', $response->json()); // Log the full response
//         return view('messages', ['conversations' => $conversations]);
//     } else {
//         $this->logError('Failed to fetch conversations', $response);
//         return view('messages', ['conversations' => []]);
//     }
// }


    /**
     * Log API errors.
     */
    private function logError($message, $response)
    {
        Log::error($message, [
            'status_code' => $response->status(),
            'response_body' => $response->body(),
            'error_details' => $response->json(),  // Capture the JSON error response
            'url' => $response->effectiveUri(),
        ]);
    }
}
