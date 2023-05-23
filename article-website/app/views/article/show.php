<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>

<body>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Summary</th>
                    <th scope="col">Content</th>
                    <th scope="col">Created</th>
                    <th scope="col">Category</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete </th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>
                        <?= $article['title'] ?>
                    </td>
                    <td>
                        <?= $article['summary'] ?>
                    </td>
                    <td>
                        <?= $article['content'] ?>
                    </td>
                    <td>
                        <?= $article['created'] ?>
                    </td>
                    <td>
                        <?= $article['name'] ?>
                    </td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>