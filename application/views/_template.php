<!DOCTYPE html>
<html lang="en">
    <head>
        <Title>{site_title}</Title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/custom.css"
    </head>
    <body>
        <div id="header" class="container-fluid">
            <img src="https://avatars1.githubusercontent.com/u/5075697?v=3&s=460" alt="" class="img-circle" id="my-picture">
            <h1>{site_title}</h1>
            
        </div>
        {menubar}
        <div class="container">
        {content}
        </div>
        <footer class="container-fluid">{name} {year} {email}</footer>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="/assets/js/banner.js"></script>
    </body>
</html>