<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Add Essay</title>
    </head>
    <body>

        <div class="card position-absolute translate-middle start-50 top-50" style="width: 50rem;">
            <div class="card-header text-center">
                <h3>Submit Your Document</h3>
              </div>
            <div class="card-body">

                @if (Session::has('essay_added'))
                    <div class="alert alert-success" role="alert">
                        {{ session::get('essay_added') }}
                    </div>
                @endif
                @if (Session::has('essay_not_added'))
                    <div class="alert alert-danger" role="alert">
                        {{ session::get('essay_not_added') }}
                    </div>
                @endif
                <form action="{{ route('essay.add') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="project_name" class="form-label">Project Name </label>
                      <input type="text" class="form-control" name="project_name">
                    </div>
                    <div class="mb-3">
                      <label for="student_id" class="form-label">Student ID </label>
                      <input type="text" class="form-control" name="student_id">
                    </div>
                    <div class="mb-3">
                      <label for="student_name" class="form-label">Student Name</label>
                      <input type="text" class="form-control" name="student_name">
                    </div>
                    <div class="mb-3">
                      <label for="file_code" class="form-label">Document Code From GDrive</label>
                      <input type="text" class="form-control" name="file_code">
                    </div>
                    <div class="mb-3">
                      <label for="post_image" class="form-label">Post Thumbnail Image</label>
                      <input type="file" class="form-control" name="post_image">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </form>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
