<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>View Approved Essays</title>
</head>


<body class="bg-light">

    <div class="blog-single" style="width: 50rem;">

        <div class="article">
            <a href="/view-essay-approved/" class="btn btn-success btn-sm ">Back</a>
        </div>
        <div class="article-title">
            <h4>Student ID: {{ $essay->stdid }}</h4>
            <h1>Student Name: {{ $essay->name }}</h1>
            <iframe src="https://drive.google.com/file/d/{{ $essay->file_code }}/preview" frameborder="0" width="750" height="550" allow="autoplay"></iframe>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
