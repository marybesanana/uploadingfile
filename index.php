<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>

    <style>
    .me{
        border: 5px solid gray;
    }
    

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
           
            <div class="col-md-4"></div>
            <div class="col-md-4 me" ><div class="card mt-2">
            <div class="card-header text-warning bg-primary text-white bg-sample text-center">
                <h4 class="text-warning bg-primary">File Uploading</h4>
            </div>
            <hr class="col-md-12 mt-4 ">
            <div class="col-md mt-20">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="title"><h4>Select Image to Upload</h4></label>
                     
                    <input type="file" name="files[]" multiple> 
                    <div class="col-md mt-4">
                    <button type="submit" name="submit">upload
                    <i class="fa fa-upload" aria-hidden="true"></i>
                    </button>
                    </div>
                    
                    
                    
                </form>
            </div>
            <div class="col-md-4"></div>
           
        </div>
    </div>
</body>
</html>