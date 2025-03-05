@props(['title', 'actions'])

<div class="card bg-zinc-900 w-96 shadow-xl">
    <div class="card-body">
        <h1 class="card-title">{{$title}}</h1>
        {{$slot}}

        <div class="card-actions">
            {{$actions}}
        </div>
    </div>
</div>
