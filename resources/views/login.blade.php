
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            form{
                text-align:left;
                line-height:35px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref ">
           

            <div class="content">
                <div class="title m-b-md">
                    Freelance 
                </div>
              
                <h2>Log In</h2>
                    
                    <form method="POST" action="/login">
                        {{ csrf_field() }}

                            <label >Email:</label><br>
                            <input type="email" class="form-control" id="email" name="email">  <br>              
                        
                            <label >Password:</label><br>
                            <input type="password" id="password" name="password"><br>
                        
                            <button type="submit">Login</button><br>
                    
                        @if($errors->any())
                            {{$errors->first()}}
                        @endif
                    </form>
            </div>
        </div>
    </body>
</html>