<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des tâches</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: f2f2f2;
        }

        th, td {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Liste des tâches</h1>
    </header>
    <container>
        <table>
            <tr>
                <th>Titre</th>
                <th>Détail</th>
            </tr>
            @foreach ($tache as $t )
            <tr>
                <td>{{ $t->Titre }}</td>
                <td>{{ $t->Detail }}</td>
            </tr>
            @endforeach
        </table>
    </container>
</body>
</html>
