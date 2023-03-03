<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - factures</h1>
    <div class="flex justify-center">
        <div id='ensemble' class='flex flex-row space-x-96 mt-32 text-3xl'> 
            <div id='clients' class="flex flex-col">
                <h2 class='flex justify-center mb-8'> Clients </h2>
                <img src="../assets/photo-1556740772-1a741367b93e.avif" alt='clients' class='w-96 mb-4'>
                <a href="/clients" class='mb-4 text-lg text-red-800 flex justify-center'>Afficher tout les clients</a>
                <a href="/clients/create" class='text-lg text-red-800 flex justify-center'>Créer un nouveau client</a>
            </div>
            <div id ='factures'class="flex flex-col">
                <h2 class='flex justify-center mb-8'> Factures </h2>
                <img src="../assets/photo-1634733988138-bf2c3a2a13fa.avif" alt='factures' class='w-96 mb-4'>
                <a href="/factures" class='mb-4 text-lg text-red-800 flex justify-center'>Afficher toutes les factures</a>
                <a href="/factures/create" class='text-lg text-red-800 flex justify-center'>Créer une nouvelle facture</a>
            </div>
        </div>
    </div>
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