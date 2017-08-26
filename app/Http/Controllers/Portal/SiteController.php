<?php

namespace App\Http\Controllers\Portal;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use Gate;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return view('portal.home.index');
    }
    
    public function update($idPost)
    {
        $post = Post::find($idPost);
        
        //$this->authorize('update-post', $post);
        if( Gate::denies('update-post', $post) )
                abort(403, 'Unauthorized');
        
        return view('post-update', compact('post'));
    }
    
    public function rolesPermissions()
    {
        $nameUser = auth()->user()->name;
        echo("<h1>{$nameUser}</h1>");
        
        foreach ( auth()->user()->roles as $role ) {
            echo "<b>$role->name</b> -> ";
            
            $permissions = $role->permissions;
            foreach( $permissions as $permission ) {
                echo " $permission->name , ";
            }
            
            echo '<hr>';
        }
    }
}
