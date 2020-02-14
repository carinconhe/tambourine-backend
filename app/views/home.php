<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assest/css/index.css"  media="screen,projection"/>
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Scripts -->
        <script>
            let ajaxUrl = location.origin;
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <section class="header">
                <h1>Backend test - Camilo Rincón - carincon@gmail.com</h1>
            </section>
            <div class="content">
                <?php if(!empty($result)){ ?>
                    <?php if($result["code"]==-1){?>
                        <div class="content-form color-red">
                            This email was add to the list, please change your email.
                        </div>
                    <?php }else{?>
                        <div class="content-form">
                            Successful registration.
                        </div>
                    <?php } ?>    
                <?php } ?>    
                
                <div class="content-form">
                    Hi, my friend send me your email, please 😜
                </div>
                
                <div class="content-form">
                    <form method="post" action="/save" >    
                        <input name="email" id="email" type="email" placeholder="Email" value="" required >
                        <button type="submit" value="Submit">Submit</button>
                    </form>
                    <br/>
                </div>

                <div class="content-form">
                    <a id="show" href="#">show people</a>
                </div>

                <div id="results">

                </div>
                
            </div>
        </div>
        <!-- footer scripts -->
        <script type="text/javascript" src="assest/js/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="assest/js/home.js"></script>
    </body>
</html>
