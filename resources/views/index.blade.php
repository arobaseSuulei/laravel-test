<x-navbar class="">

    <div class="mt-8 border-b border-b-gray-400 pb-4 flex flex-col gap-4 sm:max-w-3xl sm:mx-auto">

        <div class="w-full overflow-hidden rounded-xl h-64 sm:h-72">
            <img src="{{ $property->image }}"
                 class="w-full h-full object-cover"
                 alt="" />
        </div>

        <p class="text-center">{{$property->description}}</p>

        <nav class="flex items-center justify-between p-4 gap-4">
            <p class="font-semibold">{{$property->name}}</p>
            <p class="font-semibold text-red-400">{{$property->price_per_night}} € / nuit</p>


            <a href="/reservations" class="p-2 px-4 rounded-xl bg-black text-white whitespace-nowrap">
                panier
            </a>

        </nav>

    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:max-w-3xl sm:mx-auto">
        <nav class="sm:flex hidden justify-center border mt-4 rounded-xl p-4 gap-2">
            <p class="font-semibold">coup de coeur</p>
            <p class="flex">

            </p>
        </nav>

        <nav class="flex mb-12 justify-center border mt-4 rounded-xl p-4 gap-4">
            @auth
                <form method="POST" action="/booking/{{$property->id}}">
                    @csrf
                    <input type="date" name="start_date" required>
                    <input type="date" name="end_date" required>
                    <button type="submit" class="p-2 rounded-xl bg-black text-white">Réserver</button>
                </form>
            @else
                <a href="/register" class="p-2 rounded-xl bg-black text-white">Réserver</a>
            @endauth
        </nav>
    </div>

</x-navbar>
