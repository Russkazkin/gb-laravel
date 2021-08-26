<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsCreateRequest;
use App\Http\Requests\Admin\NewsUpdateRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Database\Seeders\NewsSeeder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', ['news' => News::with(['categories', 'user'])->latest()->simplePaginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsCreateRequest $request
     * @return RedirectResponse
     */
    public function store(NewsCreateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['user_id'] = User::all()->random()->id;
        $data['image'] = $data['image'] ?? 'static/placeholder.png';
        $news = News::create($data);

        $news->categories()->sync($data['categories']);

        return redirect()->route('admin.news.index')->with('success', 'Новость успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', ['news' => $news, 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsUpdateRequest $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update(NewsUpdateRequest $request, News $news): RedirectResponse
    {
        $data = $request->validated();

        $news->update($data);

        $news->categories()->sync($data['categories']);

        return redirect()->route('admin.news.index')->with('success', 'Новость успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return RedirectResponse
     */
    public function destroy(News $news): RedirectResponse
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Новость удалена.');
    }
}
