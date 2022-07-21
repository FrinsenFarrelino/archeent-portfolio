<nav class="sticky top-0 flex items-center justify-between flex-wrap bg-white p-6 font-questrial">
  <a href="/" class="flex items-center flex-shrink-0 text-white mr-6">
    <img class="fill-current mb-1.5 w-24 mr-2" width="100%" viewBox="0 0 54 54" src="./assets/svg/Logo-Archeent.svg"/>
    {{-- <span class="font-semibold text-xl tracking-tight">Felix Portfolio</span> --}}
  </a>
  <div id="menu-button" class="block md:hidden border-black">
    <button class="flex items-center px-3 py-2 border rounded text-black border-black hover:text-white hover:bg-black">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div id="menu" class="hidden w-full md:flex md:grow-[0.5] md:items-center md:w-auto md:my-auto">
    <div class="text-sm md:flex-grow md:flex">
      <a href="/" class="block mt-4 md:inline-block md:mt-0 text-black hover:text-white hover:bg-slate-800 rounded-full pl-4 pr-4 mr-4 {{$title === 'Home' ? 'active-link' : ''}} ">
        HOME
      </a>
      <a href="/gallery" class="block mt-4 md:inline-block md:mt-0 text-black hover:text-white hover:bg-slate-800 rounded-full pl-4 pr-4 mr-4 {{$title === 'Gallery' ? 'active-link' : ''}} ">
        GALLERY
      </a>
      <a href="/3d-models" class="block mt-4 md:inline-block md:mt-0 text-black hover:text-white hover:bg-slate-800 rounded-full pl-4 pr-4 mr-4 {{$title === '3D Model' ? 'active-link' : ''}} ">
        3D MODEL
      </a>
      <a href="/about" class="block mt-4 md:inline-block md:mt-0 text-black hover:text-white hover:bg-slate-800 rounded-full pl-4 pr-4 mr-4 {{$title === 'About' ? 'active-link' : ''}} ">
        ABOUT
      </a>
    </div>
    <div class="w-full block md:flex md:items-center md:w-auto">
      <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-black border-black hover:border-transparent hover:text-white hover:bg-slate-700 mt-4 md:mt-0">Download</a>
    </div>
  </div>
  
</nav>