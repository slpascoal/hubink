@props(['title', 'actions'])

<div class="card bg-zinc-800 w-2/3 shadow-xl">
    <div class="card-body">
        <h1 class="card-title mb-3">{{$title}}</h1>
        {{$slot}}

        <div class="card-actions flex items-center justify-between mt-6">
            {{$actions}}
        </div>
    </div>
</div>
