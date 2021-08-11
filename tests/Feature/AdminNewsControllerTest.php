<?php

namespace Tests\Feature;

use App\Http\Controllers\Admin\NewsController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminNewsControllerTest extends TestCase
{
    /**
     * @test
     * @see NewsController::index()
     */
    public function index(): void
    {
        $this->get(route('admin.news.index'))->assertOk()->assertViewIs('admin.news.index');
    }
    /**
     * @test
     * @see NewsController::create()
     */
    public function create(): void
    {
        $this->get(route('admin.news.create'))->assertOk()->assertViewIs('admin.news.create');
    }
}
