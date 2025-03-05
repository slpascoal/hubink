@props(['title' => null, 'actions' => null])

<div class="card bg-zinc-950 w-2/3 shadow-xl">
    <div class="card-body">
        @if($title)
            <h1 class="card-title mb-3">{{$title}}</h1>
        @endif

        {{$slot}}

        @if($actions)
            <div class="card-actions flex items-center justify-between mt-6">
                {{$actions}}
            </div>
        @endif
    </div>
</div>
