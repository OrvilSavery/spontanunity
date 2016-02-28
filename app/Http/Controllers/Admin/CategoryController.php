<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Event;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class CategoryController extends Controller {
    /**
     * @var Category
     */
    private $category;

    /**
     * CategoryController constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->orderby('name', 'asc')->where('archive', 0)->get();
        return view('admin.pages.categories.index', compact('categories'));
    }

    public function archives()
    {
        $categories = $this->category->orderby('name', 'asc')->where('archive', 1)->get();
        return view('admin.pages.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.categories.create');
    }

    public function store(Request $request)
    {
        $category = $this->category->create($request->all());
        return redirect('admin/categories/'.$category->id.'/edit')->with('success', 'Category Created!');
    }

    public function edit($id)
    {
        $category = $this->category->find($id);
        if($category->archive == 1) {
            Event::where('archive', 0)->where('type', $category->id)->update(['archive' => 1, 'archived_through_category' => 1]);
        } else {
            Event::where('archive', 1)->where('type', $category->id)->where('archived_through_category', 1)->update(['archive' => 0, 'archived_through_category' => 0]);
        }
        return view('admin.pages.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = $this->category->find($id);
        $category->update($request->all());
        return back()->with('success', 'Category Updated!');
    }


}