<?php 

    include "connection.php";

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" Content="fr">
        <title>Projet - Coding Pool 3</title>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="script.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Enriqueta|Lobster" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <div class="modal">
           <div class="overlay"></div>
           <div class="modal-content"><br>
             <div class="label-modal">
                 <div class="dashed-border modal"></div>
                 <h1>Test</h1>
             </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid rerum optio voluptatum, quasi cupiditate possimus et nihil dolore voluptatem labore magnam voluptatibus enim explicabo animi voluptate eum, nisi! Dolor, quisquam.</p>
               <button class="valid-button">J'accepte</button><br>
           </div>
       </div>
       
       
        
        <header>
            <div class="row center-xs top-xs around-xs">
               <div class="dashed-border header"></div>
                <div class="col-xs-2">
                    <div class="logo">Coding Pool 3</div>
                </div>
                <div class="col-xs-offset-8 col-xs-2">
                    <div class="search">Recherche</div>
                </div>
            </div>
        </header>


        <main>
            <div class="content">
                <section class="row center-xs around-xs" id="headerContent">
                    <div class="col-xs-2">
                        <nav>
                            <div class="dashed-border border-nav"></div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="add_article.php">Articles</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="#categories">Catégories</a></li>
                                <li><a href="#">À propos</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-10">
                        <div class="slider">
                            <div class="images" data-id="1"></div>
                            <div class="overlayimg"></div>
<!--                            <div class="images" id="2"></div>-->
                        </div>
                    </div>
                </section>


                <section class="row top-xs" id="content">
                    <div class="col-xs-9">
                        <div class="mainContent">
                           <div class="article">
                                <div class="labelTitle">
                                    <div class="dashed-border label"></div>
                                        <h1>Hey, you add a one and two zeros to that or we walk!</h1>
                                </div>
                                <div class="row top-xs" id="bodyArticle">
                                    <div class="col-xs-4" id="imgArticle">
<!--                                    <img src="img/lemons.jpg" alt="Lemons" width="350" height="200"/>-->
                                    </div>
                                    <div class="col-xs-8" id="contentArticle">
                                        <p>Now Fry, it's been a few years since medical school, so remind me. Disemboweling in your species: fatal or non-fatal? Fry, we have a crate to deliver. If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right. OK, if everyone's finished being stupid. And when we woke up, we had these bodies. Come, Comrade Bender! We must take to the streets! Then we'll go with that data file! Well, then good news! It's a suppository.Bender, quit destroying the universe! You don't know how to do any of those. In your time, yes, but nowadays shut up! Besides, these are adult stemcells, harvested from perfectly healthy adults whom I killed for their stemcells.</p>
                                    <button class="readMore">lire la suite</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6" id="legendArticle">
                                        <span class="dateArticle">13/09/1996</span> 
                                        - écrit par
                                        <span class="writerArticle">rémy vast</span>
                                        - 
                                        <span class="nbDCommentArticle">12 commentaires</span>
                                    </div>
                                    <div class="col-xs-6">
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            
                            <div class="article">
                                <div class="labelTitle">
                                    <div class="dashed-border label"></div>
                                        <h1>Five hours? Aw, man! Couldn't you just get me the death penalty?</h1>
                                </div>
                                <div class="row top-xs" id="bodyArticle">
                                    <div class="col-xs-4" id="imgArticle">
<!--                                    <img src="img/lemons.jpg" alt="Lemons" width="350" height="200"/>-->
                                    </div>
                                    <div class="col-xs-8" id="contentArticle">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis facere, unde odio dolor, aperiam laborum rerum pariatur commodi voluptatem? Quaerat consectetur id deleniti sunt corrupti vel at, sapiente ducimus nemo.ipsum dolor sit amet, consectetur adipisicing elit. Modi praesentium vitae quos vero odio sequi nulla earum explicabo, inventore ipsum suscipit, laboriosam asperiores vel eaque unde voluptas ex in autem!</p>
                                    <button class="readMore">lire la suite</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6" id="legendArticle">
                                        <span class="dateArticle">13/09/1996</span> 
                                        - écrit par
                                        <span class="writerArticle">rémy vast</span>
                                        - 
                                        <span class="nbDCommentArticle">12 commentaires</span>
                                    </div>
                                    <div class="col-xs-6">
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            
                            <div class="article">
                                <div class="labelTitle">
                                    <div class="dashed-border label"></div>
                                        <h1>Lorem ipsum dolor sit amet.</h1>
                                </div>
                                <div class="row top-xs" id="bodyArticle">
                                    <div class="col-xs-4" id="imgArticle">
<!--                                    <img src="img/lemons.jpg" alt="Lemons" width="350" height="200"/>-->
                                    </div>
                                    <div class="col-xs-8" id="contentArticle">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis facere, unde odio dolor, aperiam laborum rerum pariatur commodi voluptatem? Quaerat consectetur id deleniti sunt corrupti vel at, sapiente ducimus nemo.ipsum dolor sit amet, consectetur adipisicing elit. Modi praesentium vitae quos vero odio sequi nulla earum explicabo, inventore ipsum suscipit, laboriosam asperiores vel eaque unde voluptas ex in autem!</p>
                                    <button class="readMore">lire la suite</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6" id="legendArticle">
                                        <span class="dateArticle">13/09/1996</span> 
                                        - écrit par
                                        <span class="writerArticle">rémy vast</span>
                                        - 
                                        <span class="nbDCommentArticle">12 commentaires</span>
                                    </div>
                                    <div class="col-xs-6">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                            <button id="previous" data-page="0">Previous</button>
                            <div id="numberpage" style="display:inline-block;">1</div>
                            <button id="next" data-page="2">Next</button>
                    </div>
                    <div class="col-xs-3">
                        <aside>
                            <div id="containerTitleAside">
                               <div class="dashed-border aside"></div>
                                <div class="titleAside">
                                    <h1>Articles populaires</h1>
                                </div>
                            </div>
                            <div id="most_popular">
                                <div class="row" id="articleAside">
                                    <div class="col-xs-12">
                                        <div class="imgArticleAside"></div>
                                        <div class="contentAside"><p>Lorem ipsum dolor sit amet,     consectetur adipisicing elit. Omnis, laudantium in repudiandae     error aspernatur quos rem incidunt obcaecati eos minima. Dolore     necessitatibus doloremque error, harum voluptas vel labore     minima quia.</p></div>
                                    </div>
                                </div>  
                                <div class="row" id="articleAside">
                                    <div class="col-xs-12">
                                        <div class="imgArticleAside"></div>
                                        <div class="contentAside"><p>Lorem ipsum dolor sit amet,     consectetur adipisicing elit. Omnis, laudantium in repudiandae     error aspernatur quos rem incidunt obcaecati eos minima. Dolore     necessitatibus doloremque error, harum voluptas vel labore     minima quia.</p></div>
                                    </div>
                                </div> 
                            </div>
                            <div class="categories">  
                                <div id="containerTitleAside">
                                    <div class="dashed-border aside"></div>
                                    <div class="titleAside">
                                        <h1 id="categories">Meilleurs rédacteurs</h1>
                                    </div>
                                </div>
                                <div class="listCategories">
                                    <ul id="best_authors">
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <section id="items" class="row center-xs">
               <div class="dashed-border footer"></div>
                <div class="col-xs-4">
                    1
                </div>
                <div class="col-xs-4">
                    2
                </div>
                <div class="col-xs-4">
                    3
                </div>
            </section>
            <section id="copyrights" class="row center-xs">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </section>
        </footer>
        
        
        <script src="homepage_script.js"></script>
    </body>
</html>