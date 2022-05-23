<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>View Essay</title>
    </head>


    <body class="bg-dark">
<div class="col d-flex justify-content-center">
        <div class="card" style="width: 50rem;">

            <div class="card-header">
                <a href="/view-essay-approve/" class="btn btn-success btn-sm ">Back</a>
                <div class="text-center">
                    <h1 style="font-size:2rem;">Document Details: No.{{ $essay->id }}</h1>
                </div>
              </div>
            <div class="card-body">
            <div class="row ">
                <span class="text-uppercase" style="font-weight:500;">Project Name: {{ $essay->project_name }}
                <br>Student Name: {{ $essay->student_name }}
                <br>Student ID: {{ $essay->student_id }}<br></span>
            </div>
            <div class="row">
                <iframe src="https://drive.google.com/file/d/{{ $essay->file_code }}/preview" frameborder="0" width="750" height="500" allow="autoplay"></iframe>
            </div>
            </div>
        </div>
        <div class="row">
                        <a href="/approve-essay/{{ $essay->id }}" class="btn btn-success btn-lg btn-block" style="max-height: 50%;">Approve</a>
                        <a href="/delete-essay/{{ $essay->id }}" class="btn btn-danger btn-lg btn-block" style="max-height: 50%;">Reject</a>
                </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
