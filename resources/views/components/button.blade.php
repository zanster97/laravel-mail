<div>
    {{-- <button {{ $attributes->merge(['style' => 'border:3px dotted blue;']) }}>Test Button</button> --}}
    <button {{ $attributes->merge(['style' => 'border:3px dotted blue;']) }}>{{ $slot }}</button>
</div>
