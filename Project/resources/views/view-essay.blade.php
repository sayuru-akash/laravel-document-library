<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Admin Dashboard - SITC Library</title>
            <link rel="icon" href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-32x32.png" sizes="32x32">
    <link rel="icon" href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-180x180.png">
    </head>
    <body class="bg-dark">
        <div class="card position-absolute translate-middle start-50 top-50" style="width: 70rem;">
            <a class="btn btn-outline-danger" href="../logout/">LogOut</a>
            <div class="card-header text-center">
                <div class="row">
                    <div class="col"><h3>Documents Pending Approval</h3></div>
                    <form class="d-flex" action="{{ route('essay.search') }}" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search by Student ID" name="search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                </div>
              </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Project Name</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($essays as $essay)
                        <tr>
                            <td>{{ $essay->project_name }}</td>
                            <td>{{ $essay->student_id }}</td>
                            <td>{{ $essay->student_name }}</td>
                            <td><a href="/essay-approval/{{ $essay->id }}" class="btn btn-info">View Document</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
