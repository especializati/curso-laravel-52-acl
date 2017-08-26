@extends('painel.templates.template')

@section('content')

<!--Filters and actions-->
<div class="actions">
    <div class="container">
        <a class="add" href="forms">
            <i class="fa fa-plus-circle"></i>
        </a>

        <form class="form-search form form-inline">
            <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
            <input type="submit" name="pesquisar" value="Encontrar" class="btn btn-success">
        </form>
    </div>
</div><!--Actions-->

<div class="clear"></div>

<div class="container">
    <h1 class="title">
        Permissions: <b>{{$role->name}}</b>
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Label</th>
            <th width="100px">Ações</th>
        </tr>

        @forelse( $permissions as $permission )
        <tr>
            <td>{{$permission->name}}</td>
            <td>{{$permission->label}}</td>
            <td>
                <a href="{{url("/painel/permission/$permission->id/delete")}}" class="delete">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="90">
                <p>Nenhum Resultado!</p>
            </td>
        </tr>
        @endforelse
    </table>

</div>

@endsection