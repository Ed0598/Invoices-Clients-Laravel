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
    <form action="/factures/edit/{{$factures->id}}" method="post" class="">
    @csrf
    @method('PATCH')
        <h2 class=" font-semibold mt-20 mb-4 ml-20 text-3xl bg-gray-100 rounded-lg p-4 max-w-7xl">Modifier facture: {{$factures->client}}</h2>
        <div class="flex flex-col gap-4 mb-4 ml-20 max-w-7xl">
            <input type="text" name="ref" id="ref" value='{{$factures->ref}}' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">
            <input type="text" name="titre" id="titre" value="{{$factures->titre}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">
            <textarea name="description" id="description" cols="30" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">{{$factures->description}}</textarea>
            <input type="text" name="tva" id="tva" value="{{$factures->tva}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">
            <input type="text" name="prix" id="prix" value="{{$factures->prix}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">
            </div>
        <form action="/factures" method="get">
            <div class="flex items-center justify-between ml-16">
                <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Modifier la facture</button>
            </div>
        </form>
    </form>
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