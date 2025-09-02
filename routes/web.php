<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

// 論文一覧画面
Volt::route('/articles', 'articles.index')->name('articles.index');
// 論文の新規投稿画面
volt::route('/articles/create', 'articles.create')->name('articles.create');
// 各論文の詳細画面
Volt::route('/articles/{article}', 'articles.show')->name('articles.show');
// 論文の投稿データ編集
Volt::route('/articles/{article}/edit', 'articles.edit')->name('articles.edit');
