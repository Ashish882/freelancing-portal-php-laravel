<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multilpe Select</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

    <style>
        .mul-select{
            width: 100%;
        }
    </style>
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
            <h1>Select Multilpe</h1>    
        </div>
        <br>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="form-group">
                    <select class="mul-select" multiple="true">
                        <option value="MYSQL">MYSQL</option>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="Ruby">Ruby</option>
                        <option value="Python">Python</option>
                        <option value="Java">Java</option>
                        <option value="PHP">PHP</option>
                    </select>
                </div> 
           </div>
        </div>
    </div>
     
    <script>
        $(document).ready(function(){
            $(".mul-select").select2({
                    placeholder: "select language", //placeholder
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
            })
    </script>
</body>
</html>