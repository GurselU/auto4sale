<div class="bg-white">
    <!-- Header -->
    <div class="relative bg-gray-800 pb-32">
        <div class="absolute inset-0">
            <img class="h-full w-full object-cover" src="{{asset('images/sellauto-bg.jpg')}}" alt="">
            <div class="absolute inset-0 bg-gray-800 mix-blend-multiply" aria-hidden="true"></div>
        </div>
        <div class="relative mx-auto max-w-7xl py-24 px-6 sm:py-32 lg:px-8">
            <h1 class="text-4xl font-bold tracking-tight text-white md:text-5xl lg:text-6xl">Sellauto</h1>
            <p class="mt-6 max-w-3xl text-xl text-gray-300">
                {{__('header.description') }}
            </p>
        </div>
    </div>

    <!-- Overlapping cards -->
    <section class="relative z-10 mx-auto -mt-32 max-w-7xl px-6 pb-32 lg:px-8" aria-labelledby="contact-heading">
        <h2 class="sr-only" id="contact-heading">Contact us</h2>
        <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
            <div class="flex flex-col rounded-2xl bg-white shadow-xl">
                <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                    <div class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-gray-600 p-5 shadow-lg">
                        <!-- Heroicon name: outline/phone -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                        </svg>

                    </div>
                    <h3 class="text-xl font-medium text-gray-900">{{__('header.form')}}</h3>
                    <p class="mt-4 text-base text-gray-500">{{__('header.form_description')}}</p>
                </div>

            </div><div class="flex flex-col rounded-2xl bg-white shadow-xl">
                <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                    <div class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-gray-600 p-5 shadow-lg">
                        <!-- Heroicon name: outline/phone -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900">{{__('header.contact')}}</h3>
                    <p class="mt-4 text-base text-gray-500">{{__('header.contact_description')}}</p>
                </div>

            </div><div class="flex flex-col rounded-2xl bg-white shadow-xl">
                <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                    <div class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-gray-600 p-5 shadow-lg">
                        <!-- Heroicon name: outline/phone -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>

                    </div>
                    <h3 class="text-xl font-medium text-gray-900">{{__('header.inspection')}}</h3>
                    <p class="mt-4 text-base text-gray-500">{{__('header.inspection_description')}}</p>
                </div>

            </div>


            <div class="flex flex-col rounded-2xl bg-white shadow-xl md:mt-10">
                <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                    <div class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-gray-600 p-5 shadow-lg">
                        <!-- Heroicon name: outline/lifebuoy -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                        </svg>


                    </div>
                    <h3 class="text-xl font-medium text-gray-900">{{__('header.offer')}}</h3>
                    <p class="mt-4 text-base text-gray-500">{{__('header.offer_description')}}</p>
                </div>

            </div>

            <div class="flex flex-col rounded-2xl bg-white shadow-xl md:mt-10">
                <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                    <div class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-gray-600 p-5 shadow-lg">
                        <!-- Heroicon name: outline/newspaper -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900">{{__('header.payment')}}</h3>
                    <p class="mt-4 text-base text-gray-500">{{__('header.payment_description')}}</p>
                </div>

            </div>

            <div class="flex flex-col rounded-2xl bg-white shadow-xl md:mt-10">
                <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                    <div class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-gray-600 p-5 shadow-lg">
                        <!-- Heroicon name: outline/newspaper -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                        </svg>

                    </div>
                    <h3 class="text-xl font-medium text-gray-900">{{__('header.done')}}</h3>
                    <p class="mt-4 text-base text-gray-500">{{__('header.done_description')}}</p>
                </div>

            </div>
        </div>
    </section>
</div>
