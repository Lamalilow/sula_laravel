<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class EmojiService
{
    private $positiveEmojis = [
        './../assets/img/emoji/crazy_poz.png',
        './../assets/img/emoji/heart_kiss_poz.png',
        './../assets/img/emoji/hearts_poz.png',
        './../assets/img/emoji/smile_poz.png',
        './../assets/img/emoji/smile_side_poz.png',
        './../assets/img/emoji/smirking_face_poz.png'

    ];

    private $negativeEmojis = [
        './../assets/img/emoji/angry_neg.png',
        './../assets/img/emoji/eye_roll_neg.png',
        './../assets/img/emoji/green_neg.png',
        './../assets/img/emoji/neg.png',
        './../assets/img/emoji/scared_neg.png',
        './../assets/img/emoji/terrified_neg.png'
    ];

    public function getPositiveEmojiUrl(): string
    {
        $emojiId = rand(0, count($this->positiveEmojis) - 1);
        return $this->positiveEmojis[$emojiId];
    }

    public function getNegativeEmojiUrl(): string
    {
        $emojiId = rand(0, count($this->negativeEmojis) - 1);
        return $this->negativeEmojis[$emojiId];
    }
}
