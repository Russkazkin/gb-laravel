<?php

namespace Database\Seeders;

use App\Models\Source;
use App\Models\User;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    public const SOURCES = [
        'https://news.yandex.ru/auto.rss',
        'https://news.yandex.ru/auto_racing.rss',
        'https://news.yandex.ru/army.rss',
        'https://news.yandex.ru/gadgets.rss',
        'https://news.yandex.ru/index.rss',
        'https://news.yandex.ru/martial_arts.rss',
        'https://news.yandex.ru/communal.rss',
        'https://news.yandex.ru/health.rss',
        'https://news.yandex.ru/games.rss',
        'https://news.yandex.ru/internet.rss',
        'https://news.yandex.ru/cyber_sport.rss',
        'https://news.yandex.ru/movies.rss',
        'https://news.yandex.ru/cosmos.rss',
        'https://news.yandex.ru/culture.rss',
        'https://news.yandex.ru/fire.rss',
        'https://news.yandex.ru/championsleague.rss',
        'https://news.yandex.ru/music.rss',
        'https://news.yandex.ru/nhl.rss',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::whereIsSuper(true)->first();
        collect(self::SOURCES)->each(function ($source) use ($user) {
            Source::create([
                'url' => $source,
                'user_id' => $user->id,
            ]);
        });
    }
}
