<?php
namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post; // ←★忘れず追記

class PostsController extends Controller
{
    public function create()
{
 return view('create');
}
    public function list()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('list', ['posts' => $posts]);
    }

    public function show(Request $request, $id)
    {
        $post = Post::findOrFail($id);
     
        return view('show', [
            'post' => $post,
        ]);
    }
    public function store(PostRequest $request)
{
    $savedata = [
        'name' => $request->name,
        'subject' => $request->subject,
        'message' => $request->message,
        'category_id' => $request->category_id,
    ];
 
    $post = new Post;
    $post->fill($savedata)->save();
 
    return redirect('/list')->with('poststatus', '新規投稿しました');
}
}