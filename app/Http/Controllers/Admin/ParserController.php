<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ParserContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'url' => 'required|url'
        ]);
        app(ParserContract::class)->parse($data['url']);
        return redirect()->route('admin.news.index')->with('success', 'Новости успешно добавлены.');
    }
}
