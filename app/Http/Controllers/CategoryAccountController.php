<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryAccount;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class CategoryAccountController extends Controller
{
    /**
     * @var Category
     */
    private $category;
    /**
     * @var CategoryAccount
     */
    private $categoryAccount;

    /**
     * CategoryAccountController constructor.
     */
    public function __construct(Category $category, CategoryAccount $categoryAccount)
    {
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = array_except($request->all(), '_method');
        $validation = Validator::make($input, CategoryAccount::$rules);
        if($validation->passes()) {
            $this->categoryAccount->create($input);
            $chosen = $this->categoryAccount->where('user_id', $request['user_id'])->count();
            return response()->json(['message' => 'Yay! This Category Was Chosen!', 'class' => 'chosen', 'chosen' => $chosen]);
        }
        return response()->json(['message' => 'Sorry! There was no error!', 'class' => 'error']);
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
}
