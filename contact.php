<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
</head>

<body>
   
    <?php include 'menu.php' ?>

  <section class="my-5">
        <div class="py-5">
            <h1 class="text-center">Contact Us</h1>
            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mobile No:</label>
                        <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>
                     <div class="form-group">
                        <label>Comments</label>
                        <textarea class="form-control" name="comments">
                            
                        </textarea>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    

    <footer>
        <p class="p-3 bg-dark text-white text-center">@WebMartGroupofAltafCompnay</p>
    </footer>




</body>
</html>