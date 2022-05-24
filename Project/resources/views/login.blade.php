<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <link rel="icon"
        href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-32x32.png"
        sizes="32x32">
    <link rel="icon"
        href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-192x192.png"
        sizes="192x192">
    <link rel="apple-touch-icon"
        href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-180x180.png">
    <title>Admin Area - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <div class="login-form">
        <form action="{{ route('certificate.login') }}" method="POST">
            @csrf
            <h2 class="text-center">Admin Area - Log in</h2>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
        </form>
    </div>
</body>

</html>
