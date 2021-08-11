<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminCategoryControllerTest extends TestCase
{
    /**
     * @test
     * @see NewsController::index()
     */
    public function index(): void
    {
        $this->get(route('admin.category.index'))->assertOk()->assertViewIs('admin.category.index');
    }
    /**
     * @test
     * @see NewsController::create()
     */
    public function create(): void
    {
        $this->get(route('admin.category.create'))->assertOk()->assertViewIs('admin.category.create');
    }
}
