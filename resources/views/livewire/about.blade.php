<div class="min-h-screen bg-gray-100 flex flex-col font-inconsolata">
    <div class="max-w-7xl mx-auto pt-16 pb-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">About Me</h1>
    </div>

    <main class="flex-grow">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:p-8 md:p-10 lg:p-12">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <h2 class="text-2xl font-semibold mb-6">Personal Information</h2>
                            <p class="mb-3"><span class="font-semibold">Full Name:</span> {{ $fullName }}</p>
                            <p class="mb-3"><span class="font-semibold">Email:</span> {{ $email }}</p>
                            <p class="mb-3"><span class="font-semibold">Website: </span> <a
                                    href="https://www.arymprayoga.com" target="_blank" class="underline">{{ $website }}</a></p>
                            <p class="mb-3"><span class="font-semibold">Linkedin: </span><a
                                    href="https://www.linkedin.com/in/arymprayoga" class="underline" target="_blank">{{ $linkedin }}</a>
                            </p>
                            <p class="mb-3"><span class="font-semibold">Github: </span><a
                                    href="https://www.github.com/arymprayoga" class="underline" target="_blank">{{ $github }}</a>
                        </div>

                        <div>
                            <h2 class="text-2xl font-semibold mb-6">Hello There!</h2>
                            <p class="mb-4">There live the blind texts far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in bookmarksgrove there live the blind
                                texts far from the countries.</p>
                            <p class="mb-4">Far far away, behind the word mountains, Quos quia provident consequuntur
                                culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur
                                expedita. Possimus itaque adipisci there live the blind texts from the countries Vokalia
                                and Consonantia, there live the blind texts. Quos quia provident consequuntur culpa
                                facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita.
                                Possimus itaque adipisci.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
