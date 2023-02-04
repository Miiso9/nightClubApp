<x-guest-layout>
    <!-- Main Hero Content -->
    <div
        class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url(https://cdn.pixabay.com/photo/2019/09/07/12/29/club-4458691_960_720.jpg)">
        <h1
            class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Dobrodošli u Lumi NightClub</span>
        </h1>
        <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
            Napravite rezervaciju za određeni događaj, povedite ekipu i uživajte
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
        <button class=" animate-bounce relative inline-flex w-full md:w-auto">
          <a href="{{ route('reservations.step.one') }}" type="button"
             class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
            Napravi Rezervaciju
          </a>
        </button>
        </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-slate-900 md:px-0">
        <div class="mt-4 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                DOGAĐAJI</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6 ">
                @foreach($events as $event)
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                        <img class="w-full h-48" src="{{ Storage::url($event->image) }}"
                             alt="Image" />
                        <div class="px-6 py-4">
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">{{ $event->name }}</h4>
                            <p class="leading-normal text-gray-500">{{$event->description}}.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 px-20 bg-slate-800">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-2xl font-bold text-green-400">O Nama</h2>
                        <h2
                            class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            Mihael Marić</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Zdravo, ja sam Mihael Marić, student Računarstva u Mostaru.
                        Dolazim iz Jajca, grada u srednjoj Bosni. Imam 21.godinu, trenutno sam 3.godina studija, također pohađam tečaj za grafički dizajn. Hobi: Nogomet</p>
                        <p class="mb-4 font-medium tracking-tight text-gray-500 xl:mb-6"> Nikada prije se nisam susretao sa laravelom i izradom web aplikacija.
                            Čak html i css nisam nešto pretjerano znao prije ovog projekta. Motivirao me profesor na predavanjima koji je tražio od nas da sami istraživamo i učimo jer ćemo tako najbolje
                        naučiti. Projekat je bio zanimljiv naučio sam dosta stvari i nadam se da ću jednog dana raditi na izradi web aplikacija za tržište.</p>
                    </div>
                </div>
                <div class="w-3 px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="object-scale-down h-96 mx-auto rounded-md shadow-xl sm:rounded-xl"
                        src="{{ URL('images/MihaelM.jpg') }}" alt="feature image"></div>
            </div>

        </div>
    </section>
    <section class="py-20 px-20 bg-slate-800">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2
                            class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            Luka Lasić</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Imam 20 godina, rođen u Mostaru, student treće godine računarstva na Fakultetu strojastva, računarstva i elektrotehnike. Volim zabavu, društvo, nogomet i rekreativno igram tenis.</p>
                        <p class="mb-4 font-medium tracking-tight text-gray-500 xl:mb-6">  Nadam se da cu kroz ovaj kolegij naučiti samostalno dizajnirati i kreirati web aplikacije
                        </p>
                    </div>
                </div>
                <div class="w-3 px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="object-scale-down  mx-auto rounded-md shadow-xl sm:rounded-xl"
                        src="{{ URL('images/LukaL.jpg') }}" alt="feature image"></div>
            </div>

        </div>
    </section>
    <section class="px-2 py-32 bg-slate-900 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
                        class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
                      > -->
                        <h2 class="text-4xl text-green-600">NOĆNI KLUB INFO</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Dobrodošli na stranicu poznatog noćnog kluba Lumi. Nudimo nezaboravne žurke uz odličnu ponudu alkohola i muziku. Zaboravi na sve rezerviraj stol i pozovi društvo.
                            Osnivači kluba su Luka Lasić i Mihael Marić po čemu je klub i dobio ime LU(uka) MI(hael). Također prepoznatljivi smo kao jedan od najboljih noćnih klubova u regionu.
                        </p>

                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://cdn.pixabay.com/photo/2015/04/13/13/37/audio-720589_960_720.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
