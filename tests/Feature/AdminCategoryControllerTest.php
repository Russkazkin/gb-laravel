<?php

namespace Tests\Feature;

use App\Http\Controllers\Admin\CategoryController;
use Tests\TestCase;

class AdminCategoryControllerTest extends TestCase
{
    /**
     * @test
     * @see CategoryController::index()
     */
    public function index(): void
    {
        $this->get(route('admin.category.index'))->assertOk()->assertViewIs('admin.category.index');
    }
    /**
     * @test
     * @see CategoryController::create()
     */
    public function create(): void
    {
        $this->get(route('admin.category.create'))->assertOk()->assertViewIs('admin.category.create');
    }
}
