@props(['node'])

<div class="container">
    <a href="/dashboard/{{ $node->id }}">
        {{ $node -> content}} - {{ $node -> id}}
    </a>

    @foreach($node->children as $child)
        <div class="container">
            <a href="/dashboard/{{ $node->id }}">
                <x-node-item :node="$child" />
            </a>
        </div>
    @endforeach
    
</div>