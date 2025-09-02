<?php

use function Livewire\Volt\{state};
use App\Models\Article;

state(['title', 'body']);

$store = function () {
    $article = Article::create([
        'title' => $this->title,
        'body' => $this->body,
    ]);
    return redirect()->route('articles.index');
};

?>

<div>
    <a href="{{ route('articles.index') }}">戻る</a>
    <h1>新規論文投稿</h1>
    <form wire:submit="store">
        <p>
            <label for="title">論文タイトル</label><br>
            <!-- wire:model="title"で入力値とコンポーネントの状態($this->title)を自動的に同期 -->
            <input type="text" wire:model="title" id="title">
        </p>
        <p>
            <label for="body">本文</label><br>
            <!-- wire:model="body"で入力値とコンポーネントの状態($this->body)を自動的に同期 -->
            <textarea wire:model="body" id="body"></textarea>
        </p>
        <button type="submit">投稿</button>
    </form>
</div>
