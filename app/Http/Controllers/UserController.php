<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryAccount;
use App\CategoryUser;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * @var CategoryUser
     */
    private $categoryUser;
    /**
     * @var User
     */
    private $user;
    /**
     * @var Category
     */
    private $category;
    /**
     * @var CategoryAccount
     */
    private $categoryAccount;

    /**
     * UserController constructor.
     * @param CategoryAccount $categoryAccount
     * @param User $user
     * @param Category $category
     */
    public function __construct(CategoryAccount $categoryAccount, User $user, Category $category)
    {
        $this->user = $user;
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
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateNameAndGender(Request $request)
    {
        $user = Auth::user();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->gender = $request['gender'];
        $user->save();
        return redirect('user/categories');
    }

    public function addFirstUserCategories(Request $request)
    {
        $user = $this->user->find($request['user_id']);
        $category = $this->category->find($request['category_id']);
        if(!$this->categoryAccount->where('category_id', $category->id)->where('user_id', $user->id)->first()) {
            $this->categoryAccount->create($request->all());
        } else {
            $this->categoryAccount->where('category_id', $category->id)->where('user_id', $user->id)->delete();
        }
        return response()->json(['categories' => $this->categoryAccount->where('user_id', Auth::user()->id)->count()]);
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
