@extends('layouts.main')

@section('container')

{{-- Interior Design Section --}}
<div class="mt-7 md:mt-11 md:ml-8 md:mr-8 flex justify-between mb-3">
  <p class="text-3xl md:text-4xl lg:text-5xl font-bebas">Interior Design</p>
  <a href="#" class="text-sm md:text-base lg:text-lg font-questrial pt-3">See More</a>
</div>
<div class="h-44 sm:h-60 md:h-96 lg:h-[640px] bg-black flex">
  <div class="w-full bg-slate-900"></div>
  <div class="w-full bg-slate-400"></div>
  <div class="w-full bg-green-600"></div>
  <div class="w-full bg-yellow-900"></div>
</div>
{{-- End of Interior Design Section --}}

{{-- Architecture Section --}}
<div class="mt-11 md:mt-16 md:ml-8 md:mr-8 flex justify-between mb-3">
  <p class="text-3xl md:text-4xl lg:text-5xl font-bebas">Architecture</p>
  <a href="#" class="text-sm md:text-base lg:text-lg font-questrial pt-3">See More</a>
</div>
<div class="h-44 sm:h-60 md:h-96 lg:h-[640px] bg-black flex">
  <div class="w-full bg-slate-900"></div>
  <div class="w-full bg-slate-400"></div>
  <div class="w-full bg-green-600"></div>
  <div class="w-full bg-yellow-900"></div>
</div>
{{-- End of Architecture Section --}}

{{-- Custom Furniture Section --}}
<div class="mt-11 md:mt-16 md:ml-8 md:mr-8 flex justify-between mb-3">
  <p class="text-3xl md:text-4xl lg:text-5xl font-bebas">Custom Furniture</p>
  <a href="#" class="text-sm md:text-base lg:text-lg font-questrial pt-3">See More</a>
</div>
<div class="h-44 sm:h-60 md:h-96 lg:h-[640px] bg-black flex">
  <div class="w-full bg-slate-900"></div>
  <div class="w-full bg-slate-400"></div>
  <div class="w-full bg-green-600"></div>
  <div class="w-full bg-yellow-900"></div>
</div>
{{-- End of Custom Furniture Section --}}

<div class="mt-96"></div>

@endsection