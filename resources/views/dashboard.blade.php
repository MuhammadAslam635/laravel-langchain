<x-app-layout>
    <div class="py-2">
        <div class="mx-auto max-w-7xl">
            <div class="relative p-5 bg-white shadow-xl sm:rounded-lg">
                <div class="flex flex-col space-y-1.5 pb-3">
                    <h2 class="text-lg font-semibold tracking-tight">Chatbot</h2>
                    <p class="text-sm text-[#6b7280] leading-3">Powered by Mendable and Vercel</p>
                </div>
                <div class="pr-4 h-[400px] overflow-y-auto" >
                    <!-- Chat Message AI -->
                    <div class="flex flex-1 gap-3 my-2 text-sm text-gray-600"><span
                            class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <div class="p-1 bg-gray-100 border rounded-full"><svg stroke="none" fill="black"
                                    stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="20"
                                    width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Hi, how can
                            I help you today?
                        </p>
                    </div>

                    <!--  User Chat Message -->
                    <div class="flex flex-1 gap-3 my-2 text-sm text-gray-600"><span
                            class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <div class="p-1 bg-gray-100 border rounded-full"><svg stroke="none" fill="black"
                                    stroke-width="0" viewBox="0 0 16 16" height="20" width="20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">You </span>fewafef
                        </p>
                    </div>
                    <!-- Ai Chat Message  -->
                    <div class="flex flex-1 gap-3 my-2 text-sm text-gray-600"><span
                            class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <div class="p-1 bg-gray-100 border rounded-full"><svg stroke="none" fill="black"
                                    stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="20"
                                    width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Sorry, I
                            couldn't find any
                            information in the documentation about that. Expect answer to be less accurateI could
                            not find the answer to
                            this in the verified sources.</p>
                    </div>
                    <div class="flex flex-1 gap-3 my-2 text-sm text-gray-600"><span
                            class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <div class="p-1 bg-gray-100 border rounded-full"><svg stroke="none" fill="black"
                                    stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="20"
                                    width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Hi, how can
                            I help you today?
                        </p>
                    </div>

                    <!--  User Chat Message -->
                    <div class="flex flex-1 gap-3 my-2 text-sm text-gray-600"><span
                            class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <div class="p-1 bg-gray-100 border rounded-full"><svg stroke="none" fill="black"
                                    stroke-width="0" viewBox="0 0 16 16" height="20" width="20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">You </span>fewafef
                        </p>
                    </div>
                    <!-- Ai Chat Message  -->
                    <div class="flex flex-1 gap-3 my-2 text-sm text-gray-600"><span
                            class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <div class="p-1 bg-gray-100 border rounded-full"><svg stroke="none" fill="black"
                                    stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="20"
                                    width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Sorry, I
                            couldn't find any
                            information in the documentation about that. Expect answer to be less accurateI could
                            not find the answer to
                            this in the verified sources.</p>
                    </div>
                    <div class="flex flex-1 gap-3 my-2 text-sm text-gray-600"><span
                            class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <div class="p-1 bg-gray-100 border rounded-full"><svg stroke="none" fill="black"
                                    stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="20"
                                    width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Hi, how can
                            I help you today?
                        </p>
                    </div>

                    <!--  User Chat Message -->
                    <div class="flex flex-1 gap-3 my-2 text-sm text-gray-600"><span
                            class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <div class="p-1 bg-gray-100 border rounded-full"><svg stroke="none" fill="black"
                                    stroke-width="0" viewBox="0 0 16 16" height="20" width="20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">You </span>fewafef
                        </p>
                    </div>
                    <!-- Ai Chat Message  -->
                    <div class="flex flex-1 gap-3 my-2 text-sm text-gray-600"><span
                            class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <div class="p-1 bg-gray-100 border rounded-full"><svg stroke="none" fill="black"
                                    stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="20"
                                    width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Sorry, I
                            couldn't find any
                            information in the documentation about that. Expect answer to be less accurateI could
                            not find the answer to
                            this in the verified sources.</p>
                    </div>
                </div>
                <x-mary-card>
                    <x-mary-form wire:submit="save" no-separator>
                        <x-mary-textarea label="Bio" wire:model="bio" placeholder="Your story ..."
                            hint="Max 1000 chars" rows="3" inline />

                        <x-slot:actions>
                            <x-mary-button label="Click me!" class="btn-primary" type="submit" spinner="save" />
                        </x-slot:actions>
                    </x-mary-form>
                </x-mary-card>
            </div>

        </div>
    </div>
</x-app-layout>
