<?php

namespace App\Http\Controllers;

class PostController extends Controller{
    /*public function index(){
        $title = "Mon Super Titre";
        return view('article',compact('title'));
    }*/
    // public function index(){
    //     $title = "Mon Super Titre";
    //     return view('article')->with('title'=> $title);
    // }
    /*public function index(){
        $title = "Mon Premier Titre";
        $title2 = "Mon Deuxieme Titre";
        return view('article',compact('title','title2'));
    }*/
    /*public function index(){
        $title = "Mon Premier Titre";
        $title2 = "Mon Deuxieme Titre";
        return view('article',[
            'title' => $title,
            'title2' => $title2
        ]);
    }*/
    /**
     * 
     * 
     */

    public function index(){
        $posts = [
            "Mon Premier Titre",
            "Mon Deuxieme Titre"
        ];
        $post =  4;
        return view('article',[
            'posts' => [],
            'post2' => $post
        ]);
    }
    public function show($id){
        $posts = [
            1 => 'Mon titre num 1',
            2 => 'Mon titre num 2'   
        ];
        $post = $posts[$id] ?? 'pas de titre';
        return view('article',[
            'post' => $post
        ]);
    }

    public function contact(){
        return view('contact');
    }
}
?>