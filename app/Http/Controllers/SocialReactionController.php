<?php

namespace App\Http\Controllers;

use App\User;
use App\Article;

class SocialReactionController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(1);
        if (empty($user->love_reacter_id)) {
            $user->registerAsLoveReacter(); // You need to register your Reacterable models as Reacter.
        }
        $article = Article::findOrFail(1);
        if (empty($article->love_reactant_id)) {
            $article->registerAsLoveReactant();
		}
        $reacterFacade = $user->viaLoveReacter();
		echo '設定對該文章為喜歡' . PHP_EOL;
        $reacterFacade->reactTo($article, 'Like');
        echo '是否有反應：' . ($reacterFacade->hasReactedTo($article) ? '是' : '否') . PHP_EOL;
		echo '取消對該文章為喜歡' . PHP_EOL;
		$reacterFacade->unreactTo($article, 'Like');
        echo '是否有反應：' . ($reacterFacade->hasReactedTo($article) ? '是' : '否') . PHP_EOL;
        $reactions = $reacterFacade->getReactions();
        foreach ($reactions as $reaction) {
            $userId = $reaction->getReacter()->id;
            echo '使用者編號：' . $userId . PHP_EOL;
        }
		echo '使用者關係結束。' . PHP_EOL;
    }
}
