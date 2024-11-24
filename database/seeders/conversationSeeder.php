<?php

namespace Database\Seeders;

use App\Models\Conversation;
use Illuminate\Database\Seeder;

class ConversationSeeder extends Seeder
{
    public function run(): void
    {
        Conversation::create([
            'facebook_id' => '123456789',
            'snippet' => 'Hello, this is a test message.',
            'participants' => ['User A', 'User B'],
            'last_activity' => now(),
        ]);
    }
}
