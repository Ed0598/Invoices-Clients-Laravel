<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation facture</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    <header class="bg-red-800 text-white justify-center p-10 text-center text-4xl md:h-40">
        <h1 class="md:text-6xl">Gestionnaire clients - factures</h1>
    </header>
    <h2 class="text-2xl text-center mt-8 font-semibold mb-20">Créer votre facture</h2>
    <form action='/factures/create' method="post" class="max-w-md mx-auto mt-8">
        @csrf
        <div class="mb-4">
            <label for="ref" class="block text-gray-700 font-bold mb-2">Référence</label>
            <input type="text" name="ref" id="ref" class="shadow appearance-none border rounded md:w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="titre" class="block text-gray-700 font-bold mb-2">Titre</label>
            <input type="text" name="titre" id="titre" class="shadow appearance-none border rounded md:w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="prix" class="block text-gray-700 font-bold mb-2">Prix</label>
            <input type="text" name="prix" id="prix" class="shadow appearance-none border rounded md:w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="tva" class="block text-gray-700 font-bold mb-2">TVA</label>
            <input type="text" name="tva" id="tva" class="shadow appearance-none border rounded md:w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="client" class="block text-gray-700 font-bold mb-2">Client</label>
            <input type="text" name="client" id="client" class="shadow appearance-none border rounded md:w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class=" mb-96">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
      <textarea name="description" id="description" class="shadow appearance-none border rounded md:w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
    </div>
    <div class="mb-4 flex justify-center">
      <input type="submit" value="Ajouter" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
    </div>
  </form>
  <a href="/factures" class="block mb-92 bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-center">Retour aux factures </a>
    </div>
    <footer class="bg-gray-200 text-white md:bottom-0 w-full md:h-24">
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