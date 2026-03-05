<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mes Réservations</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">

<x-navbar></x-navbar>

<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-2xl font-semibold mb-6">Mes Réservations</h1>

    @forelse($bookings as $booking)
        <div class="border rounded-xl p-4 mb-4 bg-white flex gap-4">
            <img
                src="{{ $booking->property->image }}"
                class="w-32 h-24 object-cover rounded-xl"
                alt=""
            />
            <div class="flex flex-col gap-1">
                <p class="font-semibold text-lg">{{ $booking->property->name }}</p>
                <p class="text-gray-500">{{ $booking->property->price_per_night }} € / nuit</p>
                <p class="text-sm">Du <span class="font-medium">{{ $booking->start_date }}</span> au <span class="font-medium">{{ $booking->end_date }}</span></p>
            </div>
        </div>
    @empty
        <p class="text-gray-500">Vous n'avez aucune réservation pour le moment.</p>
    @endforelse
</div>

</body>
</html>
