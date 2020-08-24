<?php 

function greeklish($str) {
  $greek = array('α','ά','Ά','Α','β','Β','γ','Γ','δ','Δ','ε','έ','Ε','Έ','ζ','Ζ','η','ή','Η','θ','Θ',
  'ι','ί','ϊ','ΐ','Ι','Ί','κ','Κ','λ','Λ','μ','Μ','ν','Ν','ξ','Ξ','ο','ό','Ο','Ό','π','Π','ρ','Ρ','σ',
  'ς','Σ','τ','Τ','υ','ύ','Υ','Ύ','φ','Φ','χ','Χ','ψ','Ψ','ω','ώ','Ω','Ώ',' ');
  $english = array('a', 'a','A','A','b','B','g','G','d','D','e','e','E','E','z','Z','i','i','I','th','Th',
  'i','i','i','i','I','I','k','K','l','L','m','M','n','N','x','X','o','o','O','O','p','P' ,'r','R','s',
  's','S','t','T','u','u','Y','Y','f','F','x','X','ps','Ps','o','o','O','O','_');
  $string = str_replace($greek, $english, $str);
  return $string;
}

$newText='';
if ((isset($_POST['text'])) && ($_POST['text']=='greekText')){

  if (!empty($_POST['textContent'])):
    $newText = greeklish($_POST['textContent']);
  endif;
};

?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Greek to Greeklish</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="container" style="margin:20px; ">
      <div class="description" style="margin:20px 0 20px 0;">
        <h1>Convert Greek to Greeklish</h1>
        <p>Suitable for converting image text</p>
      </div>
      <div class="form-container">
        <form action="" method="post">
          <textarea name="textContent" id="textContent" cols="60" rows="10"></textarea>
          <div class="clearfix"></div>
          <button type="submit" style="padding:15px;color:#FFF;background-color:green;">Submit</button>
          <button type="reset" style="padding:15px;color:#FFF;background-color:red;">Reset</button>
          <input type="hidden" name="text" value="greekText">
        </form>

        <div class="printGreeklish" Style="margin-top:30px;">
          <p><?php echo $newText ? $newText : ''; ?></p>
        </div>
      </div>
    </div>

  </body>

</html>