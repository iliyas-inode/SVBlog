<x-filament::page>
    <h3>{{ $record->title }}</h3>
    <h3>{{ $record->meta['description'] }}</h3>
    @foreach($record->content as $content)
        @switch($content['type'])
            @case('heading')
                <{{ $content['data']['level'] }}>
                    {{ $content['data']['content'] }}
                </{{ $content['data']['level'] }}>
            @break
        @endswitch
        {{ json_encode($content) }}
    @endforeach
</x-filament::page>
