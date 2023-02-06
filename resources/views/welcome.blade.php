<x-guest-layout>
    <!-- Main Hero Content -->
    <div
        class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url(https://cdn.pixabay.com/photo/2020/07/07/16/28/audio-5381049_960_720.jpg)">
        <h1
            class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Dobrodošli u Lumi NightClub</span>
        </h1>
        <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
            Napravi račun, rezerviši stol i pozovi ekipu za najbolji provod u gradu!
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
                            <a href="{{ route('events.show', $event->id) }}">
                                <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-400 uppercase">
                                    {{ $event->name }}</h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class=" bg-slate-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">Specijalne ponude</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Ispod možeš pronaći ponude koje nudimo za oređeni dan i određeni party. Platiš na ulazu i uživaš u do kraja večeri.</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Studentska srijeda</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Belvedere party</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">20KM</span>
                        <span class="text-gray-500 dark:text-gray-400">/noć</span>
                    </div>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>VIP stol</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Belvedere 30% popust</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span> <span class="font-semibold">Zgodne hostese</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Potrošiš 500KM: <span class="font-semibold"></span>Boca gratis</span>
                        </li>

                    </ul>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Pakleni petak</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Privatna pjena party</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">30KM</span>
                        <span class="text-gray-500 dark:text-gray-400" dark:text-gray-400>/noć</span>
                    </div>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>VIP stol</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>20% na pića ispod 150KM</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span><span class="font-semibold">Zgodne hostese</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>4 boce: <span class="font-semibold">+ gratis</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Pjena i <span class="font-semibold">pjena</span></span>
                        </li>
                    </ul>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg- rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Koncert</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">VIP backstage</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">50KM</span>
                        <span class="text-gray-500 dark:text-gray-400">/noć</span>
                    </div>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>VIP backstage stol</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>Izlazak na pozornicu</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span><span class="font-semibold">Pokloni pjevača</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span><span class="font-semibold">Zgodne hostese</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span><span class="font-semibold">Iznenađenje na kraju večeri</span></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-4 pb-12 bg-slate-800">
        <div class="mt-4 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                CJENOVNIK</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
                @foreach($menus as $menu)
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                        <img class="w-full h-54" src="{{ Storage::url($menu->image) }}"
                             alt="Image" />
                        <div class="px-6 py-4">
                            <a href="{{ route('menus.show', $menu->id) }}">
                                <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-400 uppercase">
                                    {{ $menu->name }}</h4>
                            </a>
                            <span class="text-xl text-green-600">{{ $menu->price }} KM </span>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 px-20 bg-slate-900">
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
    <section class="py-20 px-20 bg-slate-900">
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
    <section class="px-2 py-32 bg-slate-800 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
                        class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
                      > -->
                        <h2 class="text-4xl text-green-600">O KLUBU I VIZIJA</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Nudimo nezaboravne žurke uz odličnu ponudu alkohola i muziku. Zaboravi na sve rezerviraj stol i pozovi društvo.
                            Osnivači kluba su Luka Lasić i Mihael Marić po čemu je klub i dobio ime LU(uka) MI(hael).

                        </p>
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Viziju projekta možete pronaći klikom ispod:
                        </p>
                    </div>
                    <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                        <a href="https://docs.google.com/document/d/18uKFBaU9KM9v1In3DYmTPKHztL8D88_H/edit?usp=sharing&ouid=116180029739140699933&rtpof=true&sd=true" type="button">Vizija.docx</a>
                    </button>
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
