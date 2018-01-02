<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Http\Requests\StoreBlogPostRequest;
use App\Markdown\Markdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class PostsController extends Controller
{
    //
    protected $markdown;

    public function __construct(Markdown $markdown)
    {
        $this->middleware('auth',['only'=>['create','store','edit','update']]);
        $this->markdown = $markdown;
    }


    public function index()
    {
//        $discussions = Discussion::all();latest
//        $discussions = Discussion::latest()->get();
        $discussions = Discussion::latest()->paginate(7);
        return view('forum.index',compact('discussions'));
//        $discussions = DB::table('$discussions')->paginate(15);
//        return view('user.index', ['$discussions' => $discussions]);
    }

    public function show($id)
    {
        $discussion = Discussion::findOrFail($id);
        $html = $this->markdown->markdown($discussion->body);
        return view('forum.show',compact('discussion','html'));
    }

    public function edit($id)
    {
        $discussion = Discussion::findOrFail($id);
        return view('forum.edit',compact('discussion'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(StoreBlogPostRequest $request)
    {
        $data =[
            'user_id' =>\Auth::user()->id,
            'last_user_id'=>\Auth::user()->id,
        ];
        $discussion = Discussion::create(array_merge($request->all(),$data));

        return redirect()->action('PostsController@show',['id'=>$discussion->id]);
    }

    public function update(StoreBlogPostRequest $request,$id)
    {
        $discussion = Discussion::findOrFail($id);
        $discussion->update($request->all());
        return redirect()->action('PostsController@show',['id'=>$discussion->id ]);
    }

    public  function find()
    {
        return view('forum.find');
    }

    public function showfind(Request $request)
    {
//        $discussion = Discussion::findOrFail($request->id);
//        $html = $this->markdown->markdown($discussion->body);
//        return view('forum.showfind',compact('discussion','html'));
        $findname = $request->id;
        $user = User::where('name',$findname)->first();
//        $username =$user->name;
        if (!empty($user)){
        $userid = $user->id;
        $discussion = Discussion::where('user_id',$userid)->first();

//        echo $discussion->title;
        $html = $this->markdown->markdown($discussion->body);

        return view('forum.showfind',compact('discussion','html'));
        }else{
             return view('forum.findfailed');
        }

    }

    public function profile()
    {

        $discussion = Discussion::findOrFail(20);
        $html = $this->markdown->markdown($discussion->body);
        return view('forum.profile',compact('discussion','html'));
    }
}
