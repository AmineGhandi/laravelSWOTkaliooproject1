<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->isMethod('get') && isset($_GET['year'])){
            if($_GET['year'] != 'all'){
                $posts = DB::table('posts')->where('year', $_GET['year'])->get();
                $year=$_GET['year'];
            }else{
                $year='all';
                $posts = Posts::all();
            }
        }else{
            $year='all';
            $posts = Posts::all();
        }
        
        return view('posts.index', compact('posts','year'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this ->validate($request , [
            'title' => 'in:Forces,Faiblesses,Opportunités,Menaces',
            'body' => 'required|min:6|max:255',
            'year' => 'required',
        ]);
        posts::create($request->all());
        return redirect()->route('posts.index') ->with('success','Post created success');

    }

    public function dupliquer(Request $request){
        if($_GET['year']!='all'){
            $posts = DB::table('posts')->where('year', $_GET['year'])->get();
            foreach($posts as $post){ 
                $forces = DB::table('posts')->where('type', 'force')->get();
                $faiblesses = DB::table('posts')->where('type', 'faiblesse')->get();
                $opportunites = DB::table('posts')->where('type', 'opportunite')->get();
                $dangers = DB::table('posts')->where('type', 'danger')->get();
             }
        }
        return redirect()->route('posts.index') ->with('success','Post created success'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      /*  $post = Posts::find($id);
        return view('posts.show',compact('post'));
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::find($id);
        return view('posts.edit',compact('post'));
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
         $this -> validate($request,[
            'title' => 'in :Forces,Faiblesses,Opportunités,Menaces',
            'body' => 'required',
            'year' => 'required'
        ]); 

        Posts::find($id)-> update($request ->all());
        
        return redirect()-> route('posts.index') -> with('success','Post update success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posts::find($id)->delete();
        return redirect() ->route('posts.index')->with('success','Post deleted success');
    }
}
