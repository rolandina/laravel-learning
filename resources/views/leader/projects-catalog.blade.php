@extends('layout.leader')

@section('content')


    <h1 class="h1-page" id="h1-projects-catalog">Projects catalog</h1>
    
    <div class="projects-grid" id="projects-catalog-grid">
        @for ($i = 0; $i < 15; $i++)
            <div class="project-box">
                <h2>{{$i}} project name</h2>
                <p>{{$i}}-project description</p>
                <p>type</p>
                <p>country</p>
                <p>1000$</p>    
            </div>
        @endfor

    </div>
    
    
@endsection