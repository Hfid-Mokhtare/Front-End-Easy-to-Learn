<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@latest"></script>
</head>

<body class="bg-gray-100 font-inter">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-8 max-w-md mx-auto">
            <h1 class="text-2xl font-semibold text-blue-600 mb-6 text-center">Inscription</h1>
            <form action="table.php" method="POST" class="space-y-4">
                <div>
                    <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom :</label>
                    <input type="text" id="nom" name="nom" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email :</label>
                    <input type="email" id="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="mot_de_passe" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe :</label>
                    <input type="password" id="mot_de_passe" name="mot_de_passe" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="confirmation_mot_de_passe" class="block text-gray-700 text-sm font-bold mb-2">Confirmation du mot de passe :</label>
                    <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="date_de_naissance" class="block text-gray-700 text-sm font-bold mb-2">Date de naissance :</label>
                    <input type="date" id="date_de_naissance" name="date_de_naissance" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">S'inscrire</button>
            </form>
        </div>
    </div>
    <?php
    include("table.php");

    ?>
</body>

</html>
