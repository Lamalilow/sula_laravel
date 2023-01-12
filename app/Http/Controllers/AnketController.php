<?php

namespace App\Http\Controllers;


use App\Services\EmojiService;
use App\Services\RandomUserService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnketController extends Controller
{
    public function __construct(EmojiService $emojiService, RandomUserService $randomUserService)
    {
        $this->middleware('auth');
        $this->emojiService = $emojiService;
        $this->randomUserService = $randomUserService;
    }

    public function anketView(): View
    {
        $user = auth()->user();
        $userSettings = $user->settings;

        $otherUser = $this->randomUserService->getUser($user, $userSettings);

        $likeEmoji = $this->emojiService->getPositiveEmojiUrl();
        $dislikeEmoji = $this->emojiService->getNegativeEmojiUrl();
        return view('anket', compact('otherUser', 'user', 'likeEmoji', 'dislikeEmoji'));
    }

}
