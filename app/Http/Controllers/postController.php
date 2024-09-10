<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class postController extends Controller
{
    public function addPost(Request $request){
        $addPost = DB::table('posts')
        ->insert([
            'post_title' => $request->post_title,
            'post_desc'  => $request->post_desc,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        if ($addPost) {
            return redirect()->route('showPost');
        }else{
            echo  "<h2>Data Not Inserted</h2>";
        }
    }

    public function showPost(){
        $showPost = DB::table('posts')
                ->orderBy('id' , 'desc')
                ->paginate(2)
                // ->appends(['sort' => 'DON'])
                // ->fragment('users')
                ;
        return view('showPost',['data' => $showPost]);
           
    }

    public function updatePost(string $id){
        $updatePost = DB::table('posts')->find($id);
        return view('updatePost',['data' => $updatePost]);
        // return $updatePost;
    }

    public function singlePost(string $id){
        $showSinglePost = DB::table('posts')->where('id' , $id)->get();
        return view('showSinglePost',['data' => $showSinglePost]);
        // return $showSinglePost;
    }

    public function UpdateUser(Request $request , $id){
        // return $request;
        $updateUser = DB::table('posts')->where('id' , $id)
                    ->update([
                        'post_title' => $request->post_title,
                        'post_desc'  => $request->post_desc,
                    ]);
                    if ($updateUser) {
                        return redirect()->route('showPost');
                    }
        }

    public function deletePost(string $id){
        $deletePost = DB::table('posts')->where('id' , $id)->delete();
        // return $deletePost;
        if ($deletePost) {
            return redirect()->route('showPost');
            // echo "<script>confirm('Are Your sure')</script>";
        }
    }
}
