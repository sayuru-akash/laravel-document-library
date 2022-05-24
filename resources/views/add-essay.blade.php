<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" />
        <title>Publish New Document - SITC Digital Library</title>
            <link rel="icon" href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-32x32.png" sizes="32x32">
    <link rel="icon" href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-180x180.png">
    </head>
    <body>
<div class="section wf-section">
      <div class="container w-container">
      <a href="../">
        <img
          src="{{ asset('images/621cbcc617ee437d60b1c2e9_photo_2021-11-23_18-40-47.png') }}"
          loading="lazy"
          sizes="170px"
          srcset="
            {{ asset('images/621cbcc617ee437d60b1c2e9_photo_2021-11-23_18-40-47-p-500.png') }}  500w,
            {{ asset('images/621cbcc617ee437d60b1c2e9_photo_2021-11-23_18-40-47.png') }}       1040w
          "
          alt=""
          class="image"
          width="150"
        />
      </a>
      </div>
    </div>
    <div class="section-2 wf-section">
      <div class="w-container">
        <h1 class="heading">#1 Digital Library In Sri Lanka 🇱🇰</h1>
      </div>
    </div>
        <div class="section-3 wf-section">
            <div class="card-header text-center">
                <h3>Publish New Document</h3>
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
                    <button type="submit" style="width:100%;" class="btn btn-success">Submit</button>
                  </form>
            </div>
        </div>
    <div class="section-4 wf-section">
      <div class="w-container">
        <div class="columns w-row">
          <div class="column-4 w-col w-col-4 w-col-tiny-tiny-stack">
            <img
              src="{{ asset('images/621d7d07ca76745ba5249f59_Untitled-1.png') }}"
              loading="lazy"
              sizes="(max-width: 479px) 200px, (max-width: 767px) 26vw, 200px"
              srcset="
                {{ asset('images/621d7d07ca76745ba5249f59_Untitled-1-p-500.png') }} 500w,
                {{ asset('images/621d7d07ca76745ba5249f59_Untitled-1-p-800.png') }} 800w,
                {{ asset('images/621d7d07ca76745ba5249f59_Untitled-1.png') }}       836w
              "
              alt=""
              class="image-4"
              width="150"
            />
          </div>
          <div class="column-5 w-col w-col-4 w-col-tiny-tiny-stack">
            <ul role="list" class="w-list-unstyled">
              <a href="../"><li class="list-item">Home</li></a>
              <a href="https://sitc.lk/privacy-policy/"><li class="list-item">Privacy Policy</li></a>
            </ul>
          </div>
          <div class="column-3 w-col w-col-4 w-col-tiny-tiny-stack">
            <a href="https://www.facebook.com/sitc.campus/" style="width:100%; text-align:center;" class="social w-button"><i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;Facebook</a
            ><a href="https://www.youtube.com/channel/UCLatD85fttdOLDxFJnCbXyQ" style="width:100%; text-align:center;" class="social w-button"
              ><i class="fas fa-heart"></i>&nbsp;&nbsp;&nbsp;Youtube</a
            >
          </div>
        </div>
        <h4 class="heading-3">
          Made With <i class="fas fa-heart"></i> By
          <a href="https://codezela.com/"
            ><strong class="bold-text">Codezela Technologies</strong></a
          >
        </h4>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/35b7a7705f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
