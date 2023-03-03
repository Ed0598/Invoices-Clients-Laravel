<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification client</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - factures</h1>
    <form action="/clients/edit/{{$clients->id}}" method="post" class="">
  @csrf
  @method('PATCH')
    <h2 class=" font-semibold mt-20 mb-4 ml-20 text-3xl bg-gray-100 rounded-lg p-4 max-w-7xl">Modifier Clients: {{$clients->société}}</h2>
    <div class="flex flex-col gap-4 mb-4 ml-20 max-w-7xl">
        <input type="text" name="société" id="société" value='{{$clients->société}}' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">
        @if ($errors->has('société'))
            <p class="text-red-500 text-xs italic">{{$errors->first('société')}}</p>
        @endif
        <input type="text" name="téléphone" id="téléphone" value="{{$clients->téléphone}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">
        <input type="text" name="email" id="email" value="{{$clients->email}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">
        <input type="text" name="adresse" id="adresse" value="{{$clients->adresse}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">
        <input type="text" name="TVA" id="TVA" value="{{$clients->TVA}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">
        <input type="text" name="Description" id="Description" value="{{$clients->Description}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">
        <input type="text" name="facture" id="facture" value="{{$clients->facture}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4">

    </div>
    <div class="flex items-center justify-between ml-16">
        <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Modifier le client</button>
    </div>
</form>
    <footer class="bg-gray-200 text-white mt-20">
        <div class="container mx-auto py-6 px-4">
            <div class="lex items-center justify-between">
            <div class="text-center mb-4 ">
                <p class="text-black">&copy; 2023 - Réalisé par Edouard de Romrée de Vichenet</p>
            </div>
            </div>
        </div>
    </footer>

    
</body>
</html>