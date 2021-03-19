<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello brother!</title>
</head>

<body>


  <form action="{{ route('uploads.store') }}" method="post" enctype="multipart/form-data">

    @csrf

    <input type="file" name="file" id="file">

    <button type="submit">UUpload </button>
  </form>
</body>

</html>