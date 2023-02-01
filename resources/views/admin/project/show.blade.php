@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista Projects</div>

                <div class="card-body">
                    <ul>
                        <li>{{$project->name}}</li>
                        <li>{{$project->description}}</li>
                        <li>{{$project->cover_img}}</li>
                        <li>{{$project->github_link}}</li>
                        <li><a href="{{route('admin.projects.edit', $project->id)}}">Modifica</a></li>
                        <li>
                            <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Elimina</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection