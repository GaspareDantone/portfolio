<x-main>
    <div class=" bg-yellow-50   min-h-screen   ">
          <div class="max-w-xl mx-auto px-4 py-8 ">
           <!-- @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
               @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
              @endif -->
          <div>
            <p class="text-5xl">
              CONTATTAMI
            </p>
            <p class="text-2xl mt-10">
              Puoi utilizzare il form in basso per contattarmi
            </p>
          </div>
  <form  action="{{ route('send')}}" method="POST" class="bg-red-50 shadow-md rounded-2xl p-6 space-y-6 mt-5">
        @csrf
    <!-- Username -->
    <div>
      <label for="name" class="block text-sm font-medium ">Username</label>
      <input
        type="text"
        id="name"
        name="name"
        value="{{old('name')}}"
        class="mt-1 block w-full  shadow-sm "
        placeholder="Inserisci il tuo nome e cognome"
        required
      />
    </div>

    <!-- Email -->
    <div>
      <label for="email" class="block text-sm font-medium">Email</label>
      <input
        type="email"
        id="email"
        name="email"
        value="{{old ('email')}}"
        class="mt-1 block w-full  border-gray-300 shadow-sm"
        placeholder="esempio@email.com"
        required
      />
    </div>

    <!-- Messaggio -->
    <div>
      <label for="message" class="block text-sm font-medium ">Messaggio</label>
      <textarea
        
        id="message"
        name="message"
        type="text"
        rows="4"
        class=" form-control mt-1 block w-full  border-gray-300 shadow-sm  form-control" 
        placeholder="Scrivi qui il tuo messaggio..."
        required
        
      >{{ old('message')}}</textarea>
    </div>

    <!-- Submit -->
    <div class="text-right">
      <button
        type="submit"
        class="btn btn-outline btn-medium btn-error">
      
        Invia
      </button>
    </div>
  </form>
</div>


    </div>
</x-main>