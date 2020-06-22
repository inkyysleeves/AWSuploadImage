<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <title>AWS Test</title>
</head>
<body>
    <div class="max-w-lg mx-auto py-8">
            <form action="/AWStest/public/" method="POST" class="flex items-center justify-between border border-gray-300 p-4 rounded" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="file" name="image" id="image">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload File</button>
            </form>
    </div>
</body>
</html>