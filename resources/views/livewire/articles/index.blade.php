<?php

use function Livewire\Volt\{state};
use \App\Models\Article;

// ルートモデルバインディング
state(['articles' => fn() => Article::all()]);

?>

<div>
    <h1>タイトル</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
