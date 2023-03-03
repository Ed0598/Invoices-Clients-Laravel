<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes clients</title>
    @vite('resources/css/app.css')

</head>
<body>
<h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - factures</h1>
<div class="mt-20 mb-4">
        <h2 class="text-3xl font-semibold mb-2 ml-20">Mes clients</h2>
        <p class="ml-16 mb-10">Dans cette section, vous pouvez voir la liste de vos factures clients</p>
    </div>
    <table class="table-auto ml-16 w-3/4">
        <thead>
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Société</th>
                <th class="px-4 py-2">Téléphone</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Adresse</th>
                <th class="px-4 py-2">TVA</th>
                <th class="px-4 py-2">Facture</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Modifier</th>
                <th class="px-4 py-2">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr class="bg-gray-100">
                <td class="border px-4 py-2 text-center">{{$client->id}}</td>
                <td class="border px-4 py-2 text-red-800 text-center"><a href="/clients/{{$client->id}}">{{$client->société}}</a></td>
                <td class="border px-4 py-2 text-center">{{$client->téléphone}}</td>
                <td class="border px-4 py-2 text-center">{{$client->email}}</td>
                <td class="border px-4 py-2 text-center">{{$client->adresse}}</td>
                <td class="border px-4 py-2 text-center">{{$client->TVA}}</td>
                <td class="border px-4 py-2 text-red-800 text-center">{{$client->facture}}</td>
                <td class="border px-4 py-2 text-center">{{$client->Description}}</td>
                <td class="border px-4 py-2 "><a href="/clients/edit/{{$client->id}}" class="text-red-800 hover:text-blue-700 flex justify-center ">Modifier</a></td>
                <form action="/clients/delete/{{$client->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <td class="border px-4 py-2 flex justify-center"><input type="submit" class="inline-block bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"value="Supprimer"></input></td>
                </form>
            </tbody>
        @endforeach
        </table>
        <a href="/" class="ml-16 mt-8 inline-block bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour à l'accueil</a>
        <a href="/clients/create" class="ml-12 mt-8 inline-block bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter un client</a>

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