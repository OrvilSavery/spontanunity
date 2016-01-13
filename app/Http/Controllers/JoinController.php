<?php

namespace App\Http\Controllers;

use App\Application;
use App\Category;
use App\CategoryAccount;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JoinController extends Controller
{
    /**
     * @var Application
     */
    private $application;
    /**
     * @var CategoryAccount
     */
    private $categoryAccount;
    /**
     * @var Category
     */
    private $category;

    /**
     * JoinController constructor.
     */
    public function __construct(Application $application, Category $category, CategoryAccount $categoryAccount)
    {
        $this->application = $application;
        $this->category = $category;
        $this->categoryAccount = $categoryAccount;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('join.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->application->create($request->all());
        return redirect('join/categories')->with('success', 'success');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function categories()
    {
        $categories = $this->category->orderbyRaw('RAND()')->get();
        $categoryList = array();
        $iterator = 0;
        foreach($categories as $category) {
            if(!$this->categoryAccount->where('category_id', $category->id)->where('user_id', Auth::user()->id)->first()) {
                $iterator++;
                if($iterator <= 4) {
                    array_push($categoryList, $category->id);
                }
            }
        }
        $categories = $categoryList;
        $categoryInfo = $this->category;
        $chosen = $this->categoryAccount->where('user_id', Auth::user()->id)->count();
        return view('account.categories', compact('categories', 'categoryInfo', 'chosen'));
    }
}
