<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factures</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - factures</h1>
    <div class="mt-20 mb-4">
        <h2 class="text-3xl font-semibold mb-2 ml-20">Mes factures</h2>
        <p class="ml-16 mb-10">Dans cette section, vous pouvez voir la liste de vos factures clients</p>
    </div>
    <table class="table-auto ml-16 w-3/4">
        <thead>
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Réf</th>
                <th class="px-4 py-2">Titre</th>
                <th class="px-4 py-2">Prix</th>
                <th class="px-4 py-2">TVA</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Client</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Modifier</th>
                <th class="px-4 py-2">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($factures as $facture)
            <tr class="bg-gray-100">
                <td class="border px-4 py-2 text-center">{{$facture->id}}</td>
                <td class="border px-4 py-2 text-red-800 text-center"><a href="/factures/{{$facture->id}}">{{$facture->ref}}</a></td>
                <td class="border px-4 py-2 text-center">{{$facture->titre}}</td>
                <td class="border px-4 py-2 text-center">{{$facture->prix}}€</td>
                <td class="border px-4 py-2 text-center">{{$facture->tva}}%</td>
                <td class="border px-4 py-2 text-center">{{$facture->total}}€</td>
                <td class="border px-4 py-2 text-red-800 text-center"><a href="/factures/{{$facture->id}}">{{$facture->client}}</a></td>
                <td class="border px-4 py-2 text-center w-fit h-fit"> {{$facture->description}}</td>
                <td class="border px-4 py-2 "><a href="/factures/edit/{{$facture->id}}" class="text-red-800 hover:text-blue-700 flex justify-center ">Modifier</a></td>
                <form action="/factures/delete/{{$facture->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <td class="border px-4 py-2 flex justify-center"><input type="submit" class="inline-block bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"value="Supprimer"></input></td>
                </form>
            </tr>
        </tbody>
        @endforeach
    </table>
    <a href="/home" class="ml-16 mt-8 inline-block bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour à l'accueil</a>
    <a href="/factures/create" class="ml-12 mt-8 inline-block bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter une facture</a>
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