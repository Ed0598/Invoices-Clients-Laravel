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
    <h2 class="text-3xl text-center mt-10 font-semibold">Créer votre facture</h2>
    <form action='/factures/create' method="post" class="max-w-md mx-auto">
  @csrf
  <div class="mb-4 mt-20">
    <label for="ref" class="block text-gray-700 font-bold mb-2">Référence</label>
    <input type="text" name="ref" id="ref" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @if ($errors->has('ref'))
        <p class="text-red-500 text-xs italic">{{ $errors->first('ref') }}</p>
    @endif
  </div>
  <div class="mb-4">
    <label for="titre" class="block text-gray-700 font-bold mb-2">Titre</label>
    <input type="text" name="titre" id="titre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @if ($errors->has('titre'))
        <p class="text-red-500 text-xs italic">{{ $errors->first('titre') }}</p>
    @endif
  </div>
  <div class="mb-4">
    <label for="prix" class="block text-gray-700 font-bold mb-2">Prix</label>
    <input type="text" name="prix" id="prix" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @if ($errors->has('prix'))
        <p class="text-red-500 text-xs italic">{{ $errors->first('prix') }}</p>
    @endif
  </div>
  <div class="mb-4">
    <label for="tva" class="block text-gray-700 font-bold mb-2">TVA</label>
    <input type="text" name="tva" id="tva" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @if ($errors->has('tva'))
        <p class="text-red-500 text-xs italic">{{ $errors->first('tva') }}</p>
    @endif
  </div>
  <div class="mb-4">
    <label for="client" class="block text-gray-700 font-bold mb-2">Client</label>
    <input type="text" name="client" id="client" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @if ($errors->has('client'))
        <p class="text-red-500 text-xs italic">{{ $errors->first('client') }}</p>
    @endif
  </div>
  <div class="mb-4">
    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
    <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
    @if ($errors->has('description'))
        <p class="text-red-500 text-xs italic">{{ $errors->first('description') }}</p>
    @endif
  </div>
  <div class="mb-4 flex justify-center">
    <input type="submit" value="Ajouter" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
  </div>
</form>
<a href="/factures" class="ml-16 mt-16 inline-block bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retour aux factures </a>
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