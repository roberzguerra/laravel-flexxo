<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;


class CategoriesController extends Controller
{

    private $category_model = null;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category_model)
    {
        $this->category_model = $category_model;
    }

    public function index()
    {
        $categories = $this->category_model->paginate(2);
        return view('admin.categories.index', compact('categories'));    
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $this->category_model->create($request->all());
        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        
        $category = $this->category_model->find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {

        $this->category_model->find($id)->update($request->all());
        return redirect()->route('admin.categories.index');
    }
}
