<?php

namespace App\Services;

use App\Contracts\ParserContract;
use App\Models\News;
use XmlParser;

class ParserService implements ParserContract
{
    public function parse(string $url): void
    {
        $load = XmlParser::load($url);
        $data = $load->parse([
            'news' => ['uses' => 'channel.item[title,link,guid,description,pubDate]'],
            'image' => ['uses' => 'channel.image.url']
        ]);
        $news = $data['news'];
        $image = $data['image'];
        foreach ($news as $item) {
            News::create([
                'title' => $item['title'],
                'content' => $item['description'],
                'image' => $image,
                'user_id' => auth()->id(),
            ]);
        }
    }
}
