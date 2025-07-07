
<x-main>
  <!-- hero section -->
  <div class="hero  min-h-screen -mt-15 bg-yellow-50">
  <div class="hero-content flex-col lg:flex-row-reverse ">
    <img
      src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
      class="max-w-sm rounded-lg shadow-2xl " />
    <div class=" text-center">
      <h2 class="text-6xl font-bold ">Benvenuto in Project 0</h2>
      <h1 class="text-5xl font-bold">Sono Gaspare D'Antone</h1>
      <p class="py-6 text-5xl font-bold ">
      Full-Stack Web Developer</p>
      
      
      <a href="{{ route('project')}}" class="btn btn-outline btn-error">Project</a>
      <a href="{{ route('project')}}" class="btn btn-outline btn-info">Download CV</a>
    </div>
  </div>
  </div>
  <!-- fine hero section -->
<!-- sezione card e tecnologie -->
  <div class=" grid lg:grid-cols-3 grid-cols-1 lg:-my-5 bg-yellow-100 ">
    <!-- sezione1 descrizione -->
    <div class=" flex items-center justify-center text-3xl  ">
      <p class="text-center">
        Queste sono le tecnologie che al momento sto utilizzando per creare i miei progetti,col tempo implementero questa lista arricchendo il mio bagaglio di conoscenze per creare progetti sempre nuovi e diversi
      </p>

    </div>
    <!-- fine sezione 1 -->
 
   <!-- inizio sezione 2 card -->
    <div class="col-span-2  ">
      <div class="grid lg:grid-cols-6 gap-4 p-2 grid-cols-3 font-bold">

        <div class="card card-compact  w-25  m-1 col-span-1">
            <figure>
            <img src="/storage/media/html5.png" alt="">
            </figure>
            <div class="card-body ">
              <h2 class=" text-center text-1xl ">HTML5</h2>
            </div>  
        </div>

        <div class="card card-compact  w-25  m-1 col-span-1">
            <figure>
            <img src="/storage/media/laravel.png" alt="">
            </figure>
            <div class="card-body ">
              <h2 class=" text-center text-1xl ">Laravel</h2>
            </div>  
        </div>

        <div class="card card-compact w-25  m-1 col-span-1">
            <figure>
            <img src="/storage/media/php.png" alt="">
            </figure>
            <div class="card-body ">
              <h2 class=" text-center text-1xl  ">PHP</h2>
            </div>  
        </div>

        <div class="card card-compact w-25  m-1 col-span-1">
            <figure>
            <img src="/storage/media/javascript.png" alt="">
            </figure>
            <div class="card-body ">
              <h2 class=" text-center text-1xl ">Javascript</h2>
            </div>  
        </div>

        <div class="card card-compact  w-25  m-1 col-span-1">
            <figure>
            <img src="/storage/media/css3.png" alt="">
            </figure>
            <div class="card-body ">
              <h2 class=" text-center text-1xl ">CSS3</h2>
            </div>  
        </div>

        <div class="card card-compact w-25  m-1 col-span-1">
            <figure>
            <img src="/storage/media/bootstrap.png" alt="">
            </figure>
            <div class="card-body ">
              <h2 class=" text-center text-1xl ">Bootstrap</h2>
            </div>  
        </div>

        <div class="card card-compact  w-25  m-1 col-span-1">
            <figure>
            <img src="/storage/media/tailwind.png" alt="">
            </figure>
            <div class="card-body ">
              <h2 class=" text-center text-1xl ">Tailwind CSS</h2>
            </div>  
        </div>

        <div class="card card-compact b w-25  m-1 col-span-1">
            <figure>
            <img src="/storage/media/git.png" alt="">
            </figure>
            <div class="card-body ">
              <h2 class="text-center text-1xl ">Git</h2>
            </div>  
        </div>
        
        <div class="card card-compact  w-25  m-1 col-span-1">
            <figure>
            <img src="/storage/media/github.png" alt="">
            </figure>
            <div class="card-body ">
              <h2 class=" text-center text-1xl ">GitHub</h2>
            </div>  
        </div>
        <div class="card card-compact  w-25  m-1 col-span-1">
            <figure>
            <img src="/storage/media/mysql.png" alt="">
            </figure>
            <div class="card-body ">
              <h2 class=" text-center text-1xl ">MySql</h2>
            </div>  
        </div>
        
      </div>
      <!-- fine sezione 2 card -->
        
    </div>

  </div>
        

  <!-- inizio sezione responsive -->
  <div class="hero bg-yellow-50 min-h-screen col-span-2">
    <div class="hero-content text-center flex-col grid lg:grid-cols-2           grid-cols-1 lg:-my-5  ">
        <div class="">
            <div class=""></div>
          <div class="">
            <div class=""><img src="/storage/media/iphone14.png" alt=""></div>
          </div>
        </div>
      <div>
        <div class="text-3xl">
          Il sito è completamente responsive e visualizzabile con chiarezza da qualsiasi dispositivo
        </div>
        
      </div>
    </div>
  </div>

        

        

        


              
        
        
          

        
          

        
        
        
       
   
  
    



  

 

</x-main>
