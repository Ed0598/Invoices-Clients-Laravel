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
    <h2 class="text-3xl text-center mt-10 font-semibold">Créer votre fiche contact</h2>
    <form action='/clients/create' method="post" class="max-w-md mx-auto">
    @csrf
        <div class="mb-4 mt-20">
            <label for="société" class="block text-gray-700 font-bold mb-2">Société</label>
            <input type="text" name="société" id="société" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($errors->has('société'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('société') }}</p>
                @endif
        </div>
        <div class="mb-4">
            <label for="téléphone" class="block text-gray-700 font-bold mb-2">Téléphone</label>
            <input type="text" name="téléphone" id="téléphone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($errors->has('téléphone'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('téléphone') }}</p>
                @endif
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
            <input type="text" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($errors->has('email'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
                @endif
        </div>
        <div class="mb-4">
            <label for="adresse" class="block text-gray-700 font-bold mb-2">Adresse</label>
            <input type="text" name="adresse" id="adresse" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($errors->has('adresse'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('adresse') }}</p>
                @endif
        </div>
        <div class="mb-4">
            <label for="TVA" class="block text-gray-700 font-bold mb-2">Numéro de TVA</label>
            <input type="text" name="TVA" id="TVA" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($errors->has('TVA'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('TVA') }}</p>
                @endif
        </div>
        <div class="mb-4">
            <label for="facture" class="block text-gray-700 font-bold mb-2">Références</label>
            <input type="text" name="facture" id="facture" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($errors->has('facture'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('facture') }}</p>
                @endif
        </div>
        <div class="mb-4">
            <label for="Description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea name="Description" id="Description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @if($errors->has('Description'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('Description') }}</p>
                @endif
        </div>
        <div class="mb-4 flex justify-center">
            <input type="submit" value="Ajouter" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </div>
    </form>
    <a href="/clients" class="ml-16 mt-16 inline-block bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour aux clients </a>
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
