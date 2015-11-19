<?php

namespace App\Http\Controllers;

use App\Action;
use App\Application;
use App\Category;
use App\CategoryAccount;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * @var Application
     */
    private $application;
    /**
     * @var Category
     */
    private $category;
    /**
     * @var CategoryAccount
     */
    private $categoryAccount;
    /**
     * @var Event
     */
    private $event;
    /**
     * @var Action
     */
    private $action;


    /**
     * PageController constructor.
     * @param Application $application
     */
    public function __construct(Application $application, Category $category, CategoryAccount $categoryAccount, Event $event, Action $action)
    {
        $this->application = $application;
        $this->category = $category;
        $this->categoryAccount = $categoryAccount;
        $this->event = $event;
        $this->action = $action;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (Auth::check()) {
            if ($this->application->where('user_id', Auth::user()->id)->first()) {
                //Show
                return redirect('dashboard');
            } else {
                return redirect('join');
            }
        }
        return view('index');
    }

    public function dashboard()
    {
        $chosenCats = $this->categoryAccount->where('user_id', Auth::user()->id)->get();
        $events = $this->event->orderbyRaw('RAND()')->get();
        $singleEvent = array();
        $iterator = 0;
        foreach ($events as $event) {
            if (!$this->action->where('event_id', $event->id)->where('user_id', Auth::user()->id)->first() && $this->categoryAccount->where('category_id', $event->type)->first()) {
                $iterator++;
                if ($iterator <= 1) {
                    array_push($singleEvent, $event->id);
                    array_push($singleEvent, Auth::user()->id);
                    array_push($singleEvent, $event->name);
                    array_push($singleEvent, $event->description);
                }
            } else {
            }
        }
//        return $singleEvent;
        $event = $this->event;
        $category = $this->category;
        return view('account.dashboard', compact('chosenCats', 'category', 'event', 'singleEvent'));
    }
}
