<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @var User
     */
    private $user;

    /**
     * UserController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->middleware('auth');
    }

    public function index()
    {
        $users = $this->user->orderby('last_name', 'asc')->get();
        return view('admin.pages.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = $this->user->find($id);
        return view('admin.pages.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = $this->user->find($id);
        $user->update($request->all());
        return back()->with('success', 'User Update');
    }
}
