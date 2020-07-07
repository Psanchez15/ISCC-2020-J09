<html>
    <head>
<title> Mini site routing </title>

<div class=navigation>
    <a class="nav-link active" href="?page=1#">page1</a>
    <a class="nav-link" href="?page=2#">page2</a>
    <a class="nav-link" href="?page=3#">page3</a>
    <a href="C:\Users\Sanchez\Documents\Iseg\ISCC-2020\ISCC-2020\Jour-01\ISCC-2020-J08\contact-form.php">Contact form</a>
    
</div>


<h1> 
    
    <?php 
   
        if ($_GET['page']==1) {echo "Accueil !";}
        if ($_GET['page']==2) {echo "Page 2 !";}
        if ($_GET['page']==3) {echo "Page 3 !";}
    
    
    ?>
</h1>
</head>

</html>