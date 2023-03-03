<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - factures</h1>
    <h2 class="text-3xl ml-20 mt-20 font-semibold">Coordonnées : {{$clients->société}}</h2>
    <div class="flex justify-center items-center mt-20">
        <div class="bg-white rounded-lg shadow-2xl flex flex-col justify-center w-2/3 h-2/3 text-center border border-red-800">
            <p class="my-4 text-3xl">{{$clients->téléphone}}</p>
            <p class="text-lg my-4">{{$clients->email}}</p>
            <p class="text-gray-700 my-4 text-lg">{{$clients->adresse}}</p>
            <p class="text-gray-700 my-4 text-lg">{{$clients->TVA}}</p>
        </div>
    </div>
    <a href="/clients" class="ml-16 mt-16 inline-block bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour aux clients</a>
    <footer class="bg-gray-200 text-white mt-20">
        <div class="container mx-auto py-6 px-4">
            <div class="lex items-center justify-between">
            <div class="text-center mb-4 md:mb-0">
                <p class="text-black">&copy; 2023 - Réalisé par Edouard de Romrée de Vichenet</p>
            </div>
            </div>
        </div>
    </footer>
</body>
</html>