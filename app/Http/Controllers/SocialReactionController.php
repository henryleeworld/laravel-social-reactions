<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;

class SocialReactionController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(1);
        $article = Article::findOrFail(1);
        $reacterFacade = $user->viaLoveReacter();
        echo __('Like this article') . PHP_EOL;
        $reacterFacade->reactTo($article, 'Like');
        echo __('Is there any reaction: ') . ($reacterFacade->hasReactedTo($article) ? __('Yes') : __('No')) . PHP_EOL;
        echo __('Unlike this article') . PHP_EOL;
        $reacterFacade->unreactTo($article, 'Like');
        echo __('Is there any reaction: ') . ($reacterFacade->hasReactedTo($article) ? __('Yes') : __('No')) . PHP_EOL;
        $reactions = $reacterFacade->getReactions();
        foreach ($reactions as $reaction) {
            $userId = $reaction->getReacter()->id;
            echo __('User ID: ') . $userId . PHP_EOL;
        }
        echo __('The user relationship ended.') . PHP_EOL;
    }
}
