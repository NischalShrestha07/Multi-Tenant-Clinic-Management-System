@props(['href', 'active' => false, 'disabled' => false])

@if($disabled)
<span {{ $attributes->merge([
    'class' => 'group flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-400 cursor-not-allowed'
    ]) }}>
    {{ $slot }}
</span>
@else
<a href="{{ $href }}" {{ $attributes->merge([
    'class' => 'group flex items-center px-2 py-2 text-sm font-medium rounded-md transition-colors duration-200 ' .
    ($active ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900')
    ]) }}>
    {{ $slot }}
</a>
@endif