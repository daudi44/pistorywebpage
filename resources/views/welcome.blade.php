
<x-guest-layout>
  
  @include('navigation-menu')

  <div class="bg-white">
    <div class="relative overflow-hidden">
      <main>
        <div class="pt-10 bg-black sm:pt-16 lg:pt-8  lg:overflow-hidden">
          <div class="mx-auto max-w-7xl lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
              <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                <div class="lg:py-24">
                  <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                    <span class="block">Get</span>
                    <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-teal-200 to-cyan-400 sm:pb-5">started</span>
                  </h1>
                  <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">T'agrada fer fotografíes? O ets més d'escriure relats? T'agradi el que t'agradi, PiStory pot ser una molt bona opció per tu!</p>
                  
                </div>
              </div>
              <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                  <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://i.ibb.co/bd2VMFT/PiStory.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div id="pricing" class="bg-black">
          <div class="pt-12 px-4 sm:px-6 lg:px-8 lg:pt-20">
            <div class="text-center">
              <h2 class="text-lg leading-6 font-semibold text-gray-300 uppercase tracking-wider">Packs</h2>
              <p class="mt-2 text-3xl font-extrabold text-white sm:text-4xl lg:text-5xl">Escull els teus propis límits</p>
              <p class="mt-3 max-w-4xl mx-auto text-xl text-gray-300 sm:mt-5 sm:text-2xl">Paga només pel recurs que vagis a utilitzar, no gastis de més</p>
            </div>
          </div>

          <div class="mt-16 bg-white pb-12 lg:mt-20 lg:pb-20">
            <div class="relative z-0">
              <div class="absolute inset-0 h-5/6 bg-black lg:h-2/3"></div>
              <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative lg:grid lg:grid-cols-7">
                  <div class="mx-auto max-w-md lg:mx-0 lg:max-w-none lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3">
                    <div class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-l-lg">
                      <div class="flex-1 flex flex-col">
                        <div class="bg-white px-6 py-10">
                          <div>
                            <h3 class="text-center text-2xl font-medium text-gray-900" id="tier-hobby">Escriptor</h3>
                            <div class="mt-4 flex items-center justify-center">
                              <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900">
                                <span class="mt-2 mr-2 text-4xl font-medium"> $ </span>
                                <span class="font-extrabold"> 9 </span>
                              </span>
                              <span class="text-xl font-medium text-gray-500"> /mes </span>
                            </div>
                          </div>
                        </div>
                        <div class="flex-1 flex flex-col justify-between border-t-2 border-gray-100 p-6 bg-gray-50 sm:p-10 lg:p-6 xl:p-10">
                          <ul role="list" class="space-y-4">
                            <li class="flex items-start">
                              <div class="flex-shrink-0">
                                <!-- Heroicon name: outline/check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                              </div>
                              <p class="ml-3 text-base font-medium text-gray-500">Creació d'històries il·limitades</p>
                            </li>

                            <li class="flex items-start">
                              <div class="flex-shrink-0">
                                <!-- Heroicon name: outline/check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                              </div>
                              <p class="ml-3 text-base font-medium text-gray-500">Accés a estadístiques de visualitzacions dels teus relats</p>
                            </li>
                          </ul>
                          <div class="mt-8">
                            <div class="rounded-lg shadow-md">
                              <a href="{{ route('subscribe')}}" class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50" aria-describedby="tier-hobby"> Escrivim junts! </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-10 max-w-lg mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-start-3 lg:col-end-6 lg:row-start-1 lg:row-end-4">
                    <div class="relative z-10 rounded-lg shadow-xl">
                      <div class="pointer-events-none absolute inset-0 rounded-lg border-2 border-indigo-600" aria-hidden="true"></div>
                      <div class="absolute inset-x-0 top-0 transform translate-y-px">
                        <div class="flex justify-center transform -translate-y-1/2">
                          <span class="inline-flex rounded-full bg-indigo-600 px-4 py-1 text-sm font-semibold tracking-wider uppercase text-white"> El més complert </span>
                        </div>
                      </div>
                      <div class="bg-white rounded-t-lg px-6 pt-12 pb-10">
                        <div>
                          <h3 class="text-center text-3xl font-semibold text-gray-900 sm:-mx-6" id="tier-growth">Multi - User</h3>
                          <div class="mt-4 flex items-center justify-center">
                            <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900 sm:text-6xl">
                              <span class="mt-2 mr-2 text-4xl font-medium"> $ </span>
                              <span class="font-extrabold"> 15 </span>
                            </span>
                            <span class="text-2xl font-medium text-gray-500"> /mes </span>
                          </div>
                        </div>
                      </div>
                      <div class="border-t-2 border-gray-100 rounded-b-lg pt-10 pb-8 px-6 bg-gray-50 sm:px-10 sm:py-10">
                        <ul role="list" class="space-y-4">
                          <li class="flex items-start">
                            <div class="flex-shrink-0">
                              <!-- Heroicon name: outline/check -->
                              <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                              </svg>
                            </div>
                            <p class="ml-3 text-base font-medium text-gray-500">Escriu tot el que et vingui de gust</p>
                          </li>

                          <li class="flex items-start">
                            <div class="flex-shrink-0">
                              <!-- Heroicon name: outline/check -->
                              <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                              </svg>
                            </div>
                            <p class="ml-3 text-base font-medium text-gray-500">Penja totes les imatges que creguis</p>
                          </li>

                          <li class="flex items-start">
                            <div class="flex-shrink-0">
                              <!-- Heroicon name: outline/check -->
                              <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                              </svg>
                            </div>
                            <p class="ml-3 text-base font-medium text-gray-500">Accés total de les teves estadístiques</p>
                          </li>

                          <li class="flex items-start">
                            <div class="flex-shrink-0">
                              <!-- Heroicon name: outline/check -->
                              <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                              </svg>
                            </div>
                            <p class="ml-3 text-base font-medium text-gray-500">Amplicació del públic que veurà les teves imatges o relats</p>
                          </li>

                          <li class="flex items-start">
                            <div class="flex-shrink-0">
                              <!-- Heroicon name: outline/check -->
                              <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                              </svg>
                            </div>
                            <p class="ml-3 text-base font-medium text-gray-500">Perfil d'usuari distintiu al de la resta</p>
                          </li>
                        </ul>
                        <div class="mt-10">
                          <div class="rounded-lg shadow-md">
                            <a href="{{ route('subscribe')}}" class="block w-full text-center rounded-lg border border-transparent bg-indigo-600 px-6 py-4 text-xl leading-6 font-medium text-white hover:bg-indigo-700" aria-describedby="tier-growth"> Desvelem el teu talent! </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-10 mx-auto max-w-md lg:m-0 lg:max-w-none lg:col-start-6 lg:col-end-8 lg:row-start-2 lg:row-end-3">
                    <div class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-r-lg">
                      <div class="flex-1 flex flex-col">
                        <div class="bg-white px-6 py-10">
                          <div>
                            <h3 class="text-center text-2xl font-medium text-gray-900" id="tier-scale">Fotógraf</h3>
                            <div class="mt-4 flex items-center justify-center">
                              <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900">
                                <span class="mt-2 mr-2 text-4xl font-medium"> $ </span>
                                <span class="font-extrabold"> 9 </span>
                              </span>
                              <span class="text-xl font-medium text-gray-500"> /mes </span>
                            </div>
                          </div>
                        </div>
                        <div class="flex-1 flex flex-col justify-between border-t-2 border-gray-100 p-6 bg-gray-50 sm:p-10 lg:p-6 xl:p-10">
                          <ul role="list" class="space-y-4">
                            <li class="flex items-start">
                              <div class="flex-shrink-0">
                                <!-- Heroicon name: outline/check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                              </div>
                              <p class="ml-3 text-base font-medium text-gray-500">Puja imatges sense límit</p>
                            </li>

                            <li class="flex items-start">
                              <div class="flex-shrink-0">
                                <!-- Heroicon name: outline/check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                              </div>
                              <p class="ml-3 text-base font-medium text-gray-500">Accedeix a les estadístiques de les teves fotografíes</p>
                            </li>
                          </ul>
                          <div class="mt-8">
                            <div class="rounded-lg shadow-md">
                              <a href="{{ route('subscribe')}}" class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50" aria-describedby="tier-scale"> Fotografiem junts! </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Testimonial section -->
        <div class="pb-16 bg-gradient-to-r from-teal-500 to-cyan-600 lg:pb-0 lg:z-10 lg:relative">
          <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
            <div class="relative lg:-my-8">
              <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
              <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                  <img class="object-cover lg:h-full lg:w-full" src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Mahatma-Gandhi%2C_studio%2C_1931.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
              <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                <blockquote>
                  <div>
                    <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                      <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                    </svg>
                    <p class="mt-6 text-2xl font-medium text-white">Es que amar y leer no es igual. Amar es sufrir, leer es gozar.</p>
                  </div>
                  <footer class="mt-6">
                    <p class="text-base font-medium text-white">Mahatma Gandhi</p>
                    <p class="text-base font-medium text-cyan-100">Pensador i polític</p>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>

        <!-- Blog section -->
        <div id="about" class="relative bg-gray-50 py-16 sm:py-24 lg:py-32">
          <div class="relative">
            <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
              <h2 class="text-base font-semibold tracking-wider text-cyan-600 uppercase">our team</h2>
              <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Qui sóm?</p>
              <p class="mt-5 mx-auto max-w-prose text-xl text-gray-500">Hola! El aquest és l'equip que ha desenvolupat el projecte, sóm 3 estudiants que hem decidit portar aquesta idea a la realitat.</p>
            </div>

              <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
                <div href="https://avantecaballe.github.io/" class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                  <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                  </div>
                  <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                      <p class="text-sm font-medium text-cyan-600">
                        <a href="https://avantecaballe.github.io/" class="hover:underline"> 22 anys </a>
                      </p>
                      <a href="https://avantecaballe.github.io/" class="block mt-2">
                        <p class="text-xl font-semibold text-gray-900">Marc Avante</p>
                        <p class="mt-3 text-base text-gray-500">Hola bon dia blablablabla.</p>
                      </a>
                    </div>
                  </div>
                </div>


                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                      <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                      <div class="flex-1">
                        <p class="text-sm font-medium text-cyan-600">
                          <a href="http://danielaudibielsa.me/" class="hover:underline"> 19 anys </a>
                        </p>
                        <a href="http://danielaudibielsa.me/" class="block mt-2">
                          <p class="text-xl font-semibold text-gray-900">Daniel Audí</p>
                          <p class="mt-3 text-base text-gray-500">TETATETATETATETA</p>
                        </a>
                      </div>
                    </div>
                </div>

              <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                  <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                  <div class="flex-1">
                    <p class="text-sm font-medium text-cyan-600">
                      <a href="https://jhon1348.github.io/" class="hover:underline"> 21 anys </a>
                    </p>
                    <a href="https://jhon1348.github.io/" class="block mt-2">
                      <p class="text-xl font-semibold text-gray-900">Jhon Deiby</p>
                      <p class="mt-3 text-base text-gray-500">SEXSEXSEXSEXSEX</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <!-- This example requires Tailwind CSS v2.0+ -->
    <footer class="bg-white">
      <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
          <div class="px-5 py-2">
            <a href="#about" class="text-base text-gray-500 hover:text-gray-900"> About </a>
          </div>

          <div class="px-5 py-2">
            <a href="#pricing" class="text-base text-gray-500 hover:text-gray-900"> Pricing </a>
          </div>

          <div class="px-5 py-2">
            <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Jobs </a>
          </div>

          <div class="px-5 py-2">
            <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Press </a>
          </div>

          <div class="px-5 py-2">
            <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Accessibility </a>
          </div>

          <div class="px-5 py-2">
            <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Partners </a>
          </div>
        </nav>
          <a href="https://github.com/daudi44/pistorywebpage" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">GitHub</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
            </svg>
          </a>

        </div>
        <p class="mt-8 text-center text-base text-gray-400">&copy; 2020 Workflow, Inc. All rights reserved.</p>
      </div>
    </footer>

    </div>
  </div>
</x-guest-layout>
