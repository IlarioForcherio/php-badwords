
<?php 

$name= "Ilario";
$paragraph='Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eius veniam odit dolorum dignissimos, vitae consequatur totam commodi incidunt, nemo adipisci! Dolorum minus praesentium voluptate explicabo cum reprehenderit temporibus ipsum!';

$replaceInput=$_GET['replace'];
$replaceString="****";


//$nomeCane = $_GET['fuffi'];

echo $nomeCane;






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>php-badwords</title>
</head>
<body>

<div class="m-auto text-center w-50">
  <form action="" method=''>
  <div class="input-group mb-3">
 <input name="replace" class="mt-5 form-control w-100" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> 
</div> 
  </form>

<!-- <button type="submit" class="btn btn-primary">Send</button> -->


<!-- <h1>Ciao sono : <?php echo $name ?></h1> -->

<p class="mt-4" > Il paragrafo e' lungo: <?php echo strlen($paragraph)?> caratteri. </p>

<p> <?php echo str_replace( "$replaceInput",$replaceString , "$paragraph" ) ?>  </p>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>   
</body>


</html>