<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <form action="/register" accept-charset="UTF-8" method="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <label for="name" class="control-label">name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">email:</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">password:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary">register</button>
                </form>
            </div>
        </div>
    </body>
</html>
