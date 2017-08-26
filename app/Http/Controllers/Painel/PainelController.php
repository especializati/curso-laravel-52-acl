<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Permission;
use App\Post;

class PainelController extends Controller
{
    public function index()
    {
        $totalUsers = '';//User::count();
        $totalRoles = '';//Role::count();
        $totalPermissions = '';//Permission::count();
        $totalPosts = '';//Post::count();
        
        return view('painel.home.index', compact('totalUsers', 'totalRoles', 'totalPermissions', 'totalPosts'));
    }
}