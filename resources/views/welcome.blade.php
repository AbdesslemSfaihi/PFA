<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table table-striped shadow">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="sub in subjects" :key="sub.id">

                <td>{{ sub.name }}</td>



                <td>
                    <button class="btn btn-outline-danger mx-2" @click="deletearticle(sub.id)">
                        <i class="fa-solid fa-trash-can"></i>
                        Delete
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>