@extends('layouts.admin')

@section('content')
<main class="col ps-md-2 pt-2">
    <div class="page-header mt-5 ms-5 ps-4 pt-1" id="titApartado">
            <h2>Gestión de comentarios</h2>
    </div>
    
    <div class="row">
        <div class="col-8">
            <table id="myTable" class="table mt-5">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Id usuario</th>
                        <th>Comentario</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comentarios as $comentario)
                    <tr>
                        <td>{{ $comentario->IdComentario }}</td>
                        <td>{{ $comentario->id }}</td>
                        <td>{{ $comentario->Texto }}</td>
                        <td>
                            
                            <form action="{{ route('admin.destroyUsuario',$comentario->IdComentario) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button> 
                            </form>
                           
                        </td>
                    </tr> 
                    @endforeach
                    
                </tbody>
            </table>
            {!! $comentarios->links() !!}
        </div>
    </div>
</main>
@endsection



   