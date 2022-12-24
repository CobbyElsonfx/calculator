<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="row ">
        <div class="w-50 mx-auto pt-4 ">
            <div class="displayer  w-100 h-50 bg-secondary-subtle">
                <p class="fs-1 fw-bold px-3 end">
                    <?php 

                      if(isset($_POST["sum"])){
                        echo $_POST["firstNum"] + $_POST["secondNum"];
                        }

                     elseif (isset($_POST["substract"])){
                            echo $_POST["firstNum"] - $_POST["secondNum"];
                            }

                     elseif(isset($_POST["divide"])){
                            echo $_POST["firstNum"] / $_POST["secondNum"];
                            }
                        
                    elseif(isset($_POST["multiply"])){
                        echo $_POST["firstNum"] * $_POST["secondNum"];
                        }
                    ?>
                    
                </p>
             

            </div>

        



        <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method= "post"  >
            <div class="d-flex justify-content-center text-center ">
                <div class="w-20 align-items-center">
                    <label for="firstNum">First Number</label>
                    <input type="number" value=""  name="firstNum"><br>
                </div>
                <div class="w-20">
                     <label for="secondNum"> Second Number</label>
                     <input type="number" value = "" name = "secondNum"> 
                </div>      
            </div>
        


            <div id="buttonsSection" class="grid  text-center mt-4"> 
                <button  type="submit" name="sum" class="btn btn-dark g-col-4">Add</button>
                <button type="submit" name="divide" class="btn btn-dark g-col-4">Divide</button>
                <button type="submit" name="substract" class="btn btn-dark g-col-4">Substract</button>
                <button type="submit" name="multiply" class="btn btn-dark g-col-4">Multiply</button>    
            </div>
          
   
    </form>
            
        </div>
    </div>
    


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>