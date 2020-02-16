<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </head>
    <body>
    <br />
        <br />
        <br />
        <div class="container box">
        <h2 align="left" style="margin-top: ;">นายมาโนชวิษฐ์ ศรีวิเศษ</h2><br />
        <h3 align="left">5910110262</h3><br/>
        <form method="post" action="{{url('/sendbasicemail')}}">
            {{ csrf_field() }}
            <div class="form-group">
              <label>Enter Your Name</label>
              <input type="text" name="name" class="form-control" value="" />
            </div>
            <div class="form-group">
              <label>Enter Your Email</label>
              <input type="text" name="email" class="form-control" value="" />
            </div>
            <div class="form-group">
              <label>Enter Your Message</label>
              <textarea name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="send" class="btn btn-info" value="Send" />
            </div>
        </form>
        </div>
    
    </body>
</html>
