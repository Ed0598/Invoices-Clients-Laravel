<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{URL('build/assets/app-d848cc29.css')}}"> 
    
</head>
<body class="flex flex-col min-h-screen">
    <header class="bg-red-800 text-white justify-center p-10 text-center text-4xl md:h-40">
        <h1 class="md:text-6xl">Gestionnaire clients - factures</h1>
    </header>
    <main class="flex-grow flex justify-center">
        <div id='ensemble' class='flex flex-col md:flex-row md:space-x-96 mt-10 md:mt-32 text-3xl'> 
            <div id='clients' class="flex flex-col">
                <h2 class='flex justify-center mb-8'> Clients </h2>
                <img src="../assets/photo-1556740772-1a741367b93e.avif" alt='clients' class='w-96 mb-4'>
                <a href="/clients" class='mb-4 text-lg text-red-800 flex justify-center'>Afficher tout les clients</a>
                <a href="/clients/create" class='text-lg text-red-800 flex justify-center '>Créer un nouveau client</a>
            </div>
            <div id ='factures'class="mb-10 md:mb-92 flex flex-col">
                <h2 class='flex justify-center mb-8'> Factures </h2>
                <img src="../assets/photo-1634733988138-bf2c3a2a13fa.avif" alt='factures' class='w-96 mb-4'>
                <a href="/factures" class='mb-4 text-lg text-red-800 flex justify-center m'>Afficher toutes les factures</a>
                <a href="/factures/create" class='text-lg text-red-800 flex justify-center'>Créer une nouvelle facture</a>
            </div>
        </div>
    </main>
    <footer class="bg-gray-200 text-white bottom-0 w-full md:h-24 flex items-center">
        <div class="container mx-auto py-6 px-4 flex flex-col items-center">
            <div class="flex items-center justify-center w-full">
            <div class="text-center mb-4 md:mb-0">
                <p class="text-black">© 2023 - Réalisé par Edouard de Romrée de Vichenet</p>
            </div>
            </div>
        </div>
    </footer>
</body>
</html>
