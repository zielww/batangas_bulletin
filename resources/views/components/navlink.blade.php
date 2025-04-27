@props(['active' => false])

<a {{ $attributes }}
   class="{{ $active ? 'text-white font-semibold' : 'text-neutral-200' }} text-sm lg:text-base mb-2 block font-light hover:text-white transition-all duration-500 lg:mr-6 md:mb-0 lg:text-left text-center">{{ $slot }}</a>
