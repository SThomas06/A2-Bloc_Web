<!DOCTYPE html>

<!--####################################
 Auteur : Emma Prudent
 Date : 2017
 Contexte : Prosit Exia CESI - PHP/BDD
 #######################################-->

<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/styleConnexion.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <title>GOTO Mountains</title>
    </head>

    <body>

    <!-- L'en-tête -->    
    <header>
    <h1><strong>GOTO</strong>mountains</h1>
    </header>

    

    <!-- Le corps -->
    <div id="corps">

<div class="container">
            
            
            <section>               
                <div id="container" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post" action="scriptCreerPdt.php" autocomplete="on">
                                <h1>Créer un produit</h1>
                                <p> 
                                    <label for="nom" class="uname" data-icon="u" > Nom : </label>
                                    <input id="nom" name="nom" required="required" type="text" placeholder="nom"/>
                                </p>
                                <p> 
                                    <label for="prix" class="uname" data-icon="u"> Prix : </label>
                                    <input id="prix" name="prix" required="required" type="text" placeholder="prix" />
                                </p>

                                <p>
                                    <label for="desc" class="uname" data-icon="u"> Description : </label>
                                    <input id="desc" name="desc" required="required" type="text" placeholder="Description" />
                                </p>

                                <p class="login button"> 
                                    <input type="submit" value="Soumettre" />
                                </p>
                            </form>
                        </div>

                    </div>
                </div>  
            </section>
        </div>

        
    </div>
    
    </body>

</html>