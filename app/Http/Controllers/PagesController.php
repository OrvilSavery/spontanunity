<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryAccount;
use App\Event;
use App\EventUser;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * @var Category
     */
    private $category;
    /**
     * @var User
     */
    private $user;
    /**
     * @var CategoryAccount
     */
    private $categoryAccount;
    /**
     * @var Event
     */
    private $event;
    /**
     * @var EventUser
     */
    private $eventUser;


    /**
     * PagesController constructor.
     * @param Category $category
     * @param User $user
     * @param CategoryAccount $categoryAccount
     * @param Event $event
     * @param EventUser $eventUser
     */
    public function __construct(Category $category, User $user, CategoryAccount $categoryAccount, Event $event, EventUser $eventUser)
    {
        $this->category = $category;
        $this->user = $user;
        $this->categoryAccount = $categoryAccount;
        $this->event = $event;
        $this->eventUser = $eventUser;
    }

    public function index()
    {
        if (Auth::guest()) {
            return view('pages.home');
        }
        if(strlen(Auth::user()->first_name) < 1) {
            return redirect('user/name-and-gender');
        }
        $chosenCategories = $this->categoryAccount->where('user_id', Auth::user()->id)->orderByRaw('RAND()')->get();
        //Get one random task for the "one for the road"
        $oneForTheRoad = array();
        foreach ($chosenCategories as $category) {
            $events = $this->event->where('type', $category->category_id)->orderByRaw('RAND()')->get();
            foreach ($events as $event) {
                if ((!$this->eventUser->where('event_id', $event->id)->where('user_id', Auth::user()->id)->first()) && (!$this->eventUser->where('user_id', Auth::user()->id)->where('created_at', '<=', date('Y-m-d 24:00:00'))->where('created_at', '>=', date('Y-m-d 00:00:00'))->where('complete', 1)->first())) {
                    array_push($oneForTheRoad, [
                        'id'    => $event->id,
                        'name'  => $event->name,
                        'description' => $event->description,
                        'class' => 'active'
                    ]);
                } else {
                    array_push($oneForTheRoad, [
                        'id'    => '0',
                        'name'  => 'None for today!',
                        'description' => 'One for the road has completed',
                        'class' => 'inactive'
                    ]);
                }
            }
        }
        $category = $this->category;
        return view('pages.dashboard', compact('category', 'chosenCategories', 'oneForTheRoad'));
    }

    public function userSetNameAndGender()
    {
        return view('pages.name-and-gender');
    }
}