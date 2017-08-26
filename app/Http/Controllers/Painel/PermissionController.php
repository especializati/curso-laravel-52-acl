<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Permission;
use Gate;

class PermissionController extends Controller
{
    private $permission;
    
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
        
        if( Gate::denies('adm') ) 
            return abort(403, 'Não Autorizado!');
    }
    
    public function index()
    {
        $permissions = $this->permission->all();
                
        return view('painel.permissions.index', compact('permissions'));
    }
    
    
    public function roles($id)
    {
        //Recupera a permissão
        $permission = $this->permission->find($id);
        
        //recuperar permissões
        $roles = $permission->roles()->get();
        
        return view('painel.permissions.roles', compact('permission', 'roles'));
    }
}