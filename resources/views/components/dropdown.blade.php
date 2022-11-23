@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false">
  {{-- Trigger --}}
  <div @click="show = !show">
    {{ $trigger }}
  </div>

  {{-- Link --}}
  <div x-show="show" class="absolute bg-gray-100 w-full mt-2 rounded-xl z-50" style="display: none">
    {{ $slot }}
  </div>
</div>