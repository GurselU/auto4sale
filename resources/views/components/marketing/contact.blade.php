@if (session()->has('success'))
<x-marketing.notification />
@endif

@if ($errors->any())

<div id="errors" aria-live="assertive" class="pointer-events-none inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6">
    <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
        <div class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="p-4">
                <div class="ml-4 float-right flex flex-shrink-0">
                    <button id="closeErrors" type="button" class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">Close</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                        </svg>
                    </button>
                </div>
                @foreach ($errors->all() as $error)
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                        <p class="text-sm font-medium text-gray-900">{{ $error }}</p>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

@endif

<form action="{{ route('form.store') }}" method="POST" id="contact" class="mx-10 space-y-8 divide-y divide-gray-200 max-w-2xl sm:mx-auto" autocomplete="on">
    @csrf
    @method('POST')
    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">


        <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
            <div>
                <h3 class="mb-5 text-2xl font-medium leading-6 text-gray-900">{{__('contact.title')}}</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">{{__('contact.description')}}</p>
            </div>
            <div class="space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{__('contact.name')}}</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <input type="text" name="name" id="name" autocomplete="full-name" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:max-w-xs sm:text-sm">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{__('contact.email')}}</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <input type="text" name="email" id="email" autocomplete="email" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:max-w-xs sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="mark" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{__('contact.brand')}}</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <input type="text" name="mark" id="mark" autocomplete="mark" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:max-w-xs sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="mileage" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{__('contact.mileage')}}</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <input type="number" min="0" name="mileage" id="mileage" autocomplete="mileage" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:max-w-xs sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="year" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{__('contact.year_of_release')}}</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <input type="number" min="1990" max="2023" name="year" id="year" autocomplete="year" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:max-w-xs sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="zipCode" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{__('contact.ZIPCode')}}</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <input type="text" name="zipCode" id="zipCode" autocomplete="postal-code" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:max-w-xs sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="fuel" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{__('contact.fuelType')}}</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <select id="fuel" name="fuel" autocomplete="fuel-type" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:max-w-xs sm:text-sm">
                            <option value='Diesel'>Diesel</option>
                            <option value='Essence'>{{__('contact.fuel')}}</option>
                            <option value='Plug-in Hybrid Diesel'>Plug-in Hybrid Diesel</option>
                            <option value='Plug-in Hybrid Essence'>{{__('contact.PHE')}}</option>
                            <option value='Mild Hybrid'>Mild Hybrid</option>
                            <option value='Electric'>Electric</option>
                        </select>
                    </div>
                </div>

                <div class="sm:grid border-b pb-6 sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="phone" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{__('contact.phone')}}</label>
                    <div class="mt-1 sm:mt-0">
                        <input type="tel" name="phone" id="phone" autocomplete="phone" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:text-sm">
                    </div>
                </div>

                <div class="pt-6 sm:pt-5">
                    <div role="group" aria-labelledby="available">
                        <div class="sm:grid sm:grid-cols-3 sm:items-baseline sm:gap-4">
                            <div>
                                <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700">{{__('contact.available')}}</div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="max-w-lg">
                                    <div class="mt-4 space-y-4">
                                        <fieldset class="space-y-5">
                                            <legend class="sr-only">Notifications</legend>
                                            <div class="relative flex items-start">
                                                <div class="ml-3 text-sm">
                                                    <label for="available" class="font-medium text-gray-700 mr-1">{{__('contact.yes')}}</label>
                                                </div>
                                                <div class="flex h-5 items-center">
                                                    <input id="available" aria-describedby="available" name="available" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500" value="1" checked onclick="availableToggler()">
                                                </div>

                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="ml-3 text-sm">
                                                    <label for="available_date" class="text-i font-medium text-gray-700 mr-1"><dfn><abbr title="{{__('contact.not_available')}}" style="font-style: normal; text-decoration: none">{{__('contact.no')}}*</abbr></dfn></label>
                                                </div>
                                                <div class="flex h-5 items-center">
                                                    <input id="available_date" name="available_date" type="date" class="rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                                </div>

                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-t pt-6">
                    <label for="message" class="block text-sm font-medium text-gray-700">{{__('contact.message')}}</label>
                    <div class="mt-1">
                        <textarea rows="4" name="message" id="message" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:text-sm"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-5">
        <div class="flex justify-end">
            <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 focus:ring-offset-2">{{__('contact.save')}}</button>
        </div>
    </div>
</form>

<script>
    const isAvailable = document.getElementById('available');
    const hasDate = document.getElementById('available_date');

    isAvailable.checked = false
    hasDate.disabled = false
    const availableToggler = () => {
        isAvailable.addEventListener('click', () => {
            if (!isAvailable.checked) {
                hasDate.disabled = false;
            } else if (isAvailable.checked) {
                hasDate.value = ""
                hasDate.disabled = true;
            }
        }, false);

    };

    document.getElementById('closeErrors')?.addEventListener('click', () => {
        document.getElementById('errors').style.display = 'none'
    })
</script>