<div class="navbar sticky top-0  z-50 bg-sky-100">
  <div class="navbar-start">
    <div class="dropdown ">
      <div tabindex="0" role="button" class=" bg-sky-100 lg:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabindex="0"
        class="bg-sky-100 menu-sm dropdown-content  rounded-box z-[1] mt-3 w-52 p-2 shadow ">
        <!-- effetto hover sui link  -->
        <li class="">
          <a href="{{ route('homepage')}}" class="relative inline-block text-gray-700 hover:text-blue-500 after:block after:h-[2px] after:w-full after:bg-blue-500 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Home</a></li>
        <li>
          <a href="{{ route('project')}}" class="relative inline-block text-gray-700 hover:text-blue-500 after:block after:h-[2px] after:w-full after:bg-blue-500 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Project</a></li>
        <li>
          <a href="{{ route('aboutme')}}" class="relative inline-block text-gray-700 hover:text-blue-500 after:block after:h-[2px] after:w-full after:bg-blue-500 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">About me</a></li>
        <li>
          <a href="{{ route('contact')}}" class="relative inline-block text-gray-700 hover:text-blue-500 after:block after:h-[2px] after:w-full after:bg-blue-500 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Contact</a></li>
      </ul>
    </div>
    <a href="{{ route('homepage')}}" class="relative inline-block text-gray-700 hover:text-blue-500 after:block after:h-[2px] after:w-full after:bg-blue-500 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300 text-xl ">PROJECT 0</a>
  </div>
 
  <div class="navbar-center hidden lg:flex  ">
    <ul class=" space-x-5 text-xl ">
      <a href="{{ route('homepage')}}" class="relative inline-block text-gray-700 hover:text-blue-500 after:block after:h-[2px] after:w-full after:bg-blue-500 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300 ">Home
        
      </a>
     <a href="{{ route('project')}}" class="relative inline-block text-gray-700 hover:text-blue-500 after:block after:h-[2px] after:w-full after:bg-blue-500 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Project</a>
     <a href="{{ route('aboutme')}}" class="relative inline-block text-gray-700 hover:text-blue-500 after:block after:h-[2px] after:w-full after:bg-blue-500 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">About Me</a>
     <a href="{{ route('contact')}}" class="relative inline-block text-gray-700 hover:text-blue-500 after:block after:h-[2px] after:w-full after:bg-blue-500 after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">Contact</a>

    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn">login</a>
  </div>
</div>