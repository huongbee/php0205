<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload files</title>
</head>
<body>
    <form 
        action="xulyupload-multi.php"
        enctype="multipart/form-data"
        method="POST"
    >
        <input type="file" name="avatar[]" multiple>
        <button>Upload</button>
    </form>
</body>
</html>