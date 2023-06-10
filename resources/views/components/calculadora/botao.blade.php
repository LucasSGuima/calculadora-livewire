@props([
	'color' => null
])

@switch($color)
    @case('green')
        @php $colorClass = 'bg-green-500'; @endphp
        @break

    @case('blue')
        @php $colorClass = 'bg-blue-500'; @endphp
        @break

    @case('cyan')
        @php $colorClass = 'bg-cyan-700'; @endphp
        @break

    @case('purple')
        @php $colorClass = 'bg-purple-500'; @endphp
        @break

    @default
        @php $colorClass = 'bg-gray-800'; @endphp
@endswitch

<div class="flex-1 justify-center flex items-center text-white text-3xl font-semibold">
    <div
		{{ $attributes->class([
			'rounded-xl h-[4rem] w-[4rem] flex items-center
			justify-center shadow-lg border-2 border-gray-700
			hover:border-2 hover:border-white focus:outline-none cursor-pointer',
            $colorClass,
		])  }}>
        {{ $slot }}
    </div>
</div>
