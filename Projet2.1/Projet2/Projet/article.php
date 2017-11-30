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
       
        <div class="modal-alert hidden">
            <div class="overlay"></div>
            <div class="modal-content">   
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias vel itaque facere vitae? Consequatur assumenda provident optio soluta beatae suscipit dolorem porro id accusamus. Quidem vitae commodi omnis magni in!</p>
                <button class="confirm">J'accepte</button>
            </div>
        </div>

        
        <header>
            <div class="row center-xs top-xs around-xs">
               <div class="dashed-border header"></div>
                <div class="col-xs-2">
                    <div class="logo"><a href ="index.php" style="text-decoration:none;color:white;z-index:70000;">Coding Pool 3</a></div>
                </div>
                <div class="col-xs-offset-8 col-xs-2">
                    <div class="search">Recherche</div>
                </div>
            </div>
        </header>


        <main>
            <div class="content">
                <section class="row top-xs" id="content">
                    <div class="col-xs-9">
                        <div class="mainContent">
                            <div class="article">
                                <div class="labelTitle">
                                    <div class="dashed-border label"></div>
                                    <h1>Lorem ipsum dolor sit amet</h1>
                                </div>
                                <div class="contentArticle" id="contentArticle">
                                    <h1>A woman is a lot like a refrigerator. Six feet tall, 300 pounds…it makes ice.</h1>
                                    <p>Uh, no, you got the wrong number. This is 9-1…2. Whoa, slow down there, maestro. There's a *New* Mexico? Brace yourselves gentlemen. According to the gas chromatograph, the secret ingredient is… Love!? Who's been screwing with this thing?</p>
                                    <p>Marge, you being a cop makes you the man! <strong> Which makes me the woman — and I have no interest in that, besides occasionally wearing the underwear, which as we discussed, is strictly a comfort thing.</strong> <em> Mrs.</em> Krabappel and Principal Skinner were in the closet making babies and I saw one of the babies and then the baby looked at me.</p>
                                    <h2>Save me, Jeebus.</h2>
                                    <p>Attempted murder? Now honestly, what is that? Do they give a Nobel Prize for attempted chemistry? Marge, you being a cop makes you the man! Which makes me the woman — and I have no interest in that, besides occasionally wearing the underwear, which as we discussed, is strictly a comfort thing.</p>
                                    <ol>
                                        <li>That's why I love elementary school, Edna. The children believe anything you tell them.</li><li>Beer. Now there's a temporary solution.</li><li>Dad didn't leave… When he comes back from the store, he's going to wave those pop-tarts right in your face!</li>
                                    </ol>

                                    <h3>I'll keep it short and sweet — Family. Religion. Friendship. These are the three demons you must slay if you wish to succeed in business.</h3>
                                    <p>I'm going to the back seat of my car, with the woman I love, and I won't be back for ten minutes! I'm a Spalding Gray in a Rick Dees world. Hi. I'm Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!"</p>
                                    <ul>
                                        <li>Facts are meaningless. You could use facts to prove anything that's even remotely true!</li><li>Lisa, vampires are make-believe, like elves, gremlins, and Eskimos.</li><li>Please do not offer my god a peanut.</li>
                                    </ul>

                                    <p>How could you?! Haven't you learned anything from that guy who gives those sermons at church? Captain Whatshisname? We live in a society of laws! Why do you think I took you to all those Police Academy movies? For fun? Well, I didn't hear anybody laughing, did you? Except at that guy who made sound effects. Makes sound effects and laughs. Where was I? Oh yeah! Stay out of my booze. And here I am using my own lungs like a sucker.</p>
                                    <p>I'm allergic to bee stings. They cause me to, uh, die. "Thank the Lord"? That sounded like a prayer. A prayer in a public school. God has no place within these walls, just like facts don't have a place within an organized religion.</p>
                                    <p>Attempted murder? Now honestly, what is that? Do they give a Nobel Prize for attempted chemistry? Look out, Itchy! He's Irish! They only come out in the night. Or in this case, the day. I'm allergic to bee stings. They cause me to, uh, die.</p>
                                    <p>Dear Mr. President, There are too many states nowadays. Please, eliminate three. P.S. I am not a crackpot. Attempted murder? Now honestly, what is that? Do they give a Nobel Prize for attempted chemistry?</p>
                                    <p>Oh, so they have Internet on computers now! The Internet King? I wonder if he could provide faster nudity… Dear Mr. President, There are too many states nowadays. Please, eliminate three. P.S. I am not a crackpot.</p>
                                    <p>And here I am using my own lungs like a sucker. I'm going to the back seat of my car, with the woman I love, and I won't be back for ten minutes! Last night's "Itchy and Scratchy Show" was, without a doubt, the worst episode *ever.* Rest assured, I was on the Internet within minutes, registering my disgust throughout the world.</p>
                                    <p>"Thank the Lord"? That sounded like a prayer. A prayer in a public school. God has no place within these walls, just like facts don't have a place within an organized religion. Your questions have become more redundant and annoying than the last three "Highlander" movies.</p>
                                    <p>Uh, no, they're saying "Boo-urns, Boo-urns." This is the greatest case of false advertising I've seen since I sued the movie "The Never Ending Story." Human contact: the final frontier. What's the point of going out? We're just going to wind up back here anyway.</p>
                                    <p>I stand by my racial slur. I was saying "Boo-urns." I don't like being outdoors, Smithers. For one thing, there's too many fat children. When will I learn? The answers to life's problems aren't at the bottom of a bottle, they're on TV!</p>
                                    <p>No children have ever meddled with the Republican Party and lived to tell about it. Save me, Jeebus. Son, when you participate in sporting events, it's not whether you win or lose: it's how drunk you get.</p>
                                    <p>Whoa, slow down there, maestro. There's a *New* Mexico? The Internet King? I wonder if he could provide faster nudity… I'll keep it short and sweet — Family. Religion. Friendship. These are the three demons you must slay if you wish to succeed in business.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="labelTitle">
                                <div class="dashed-border comment"></div>
                                <h1>Commentaires</h1>
                            </div>
                            <section class="comments">
                                <div class="comment-author">Rémy Vast <small>a écrit :</small></div>
                                <div class="comment-commentaire">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis voluptatibus natus laboriosam ex obcaecati sed iste cumque. Ex non, voluptate obcaecati consectetur nisi deserunt. Iure perspiciatis nobis dicta, ullam beatae!</div>
                                <div class="comment-date">13/09/1996</div>
                            </section>
                            <div class="labelTitle">
                                <div class="dashed-border comment"></div>
                                <h1>Ajouter un commentaire</h1>
                            </div>
                            <fieldset>
                                <form action="index.html" class="form">
                                   <legend>
                                        <div class="field-form">
                                            <label for="name-writer">Nom : <input type="text" id="name-writer" name="name"  placeholder="ex : Dupont" required/></label>
                                        </div>
                                        <br>
                                        <div class="field-form">
                                            <label for="email">E-mail <i>(obligatoire)</i> : <input type="email" id="email" required/></label>
                                        </div>
                                        <br>
                                        <div class="field-form">
                                            <label for="comment">Commentaire : <input type="text" name="comment" id="comment" required/></label>
                                        </div>
                                        <br>
                                        <div class="field-options">
                                        <input type="submit" class="send-btn-form" value="Envoyer">
                                        </div>
                                    </legend>
                                </form>
                            </fieldset>
                        </div>
                    </div>


                    <div class="col-xs-3">
                        <aside>
                            <div id="containerTitleAside">
                                <div class="dashed-border aside"></div>
                                <div class="titleAside">
                                    <h1>Articles populaires</h1>
                                </div>
                            </div>
                            <div class="row" id="articleAside">
                                <div class="col-xs-12">
                                    <div class="imgArticleAside"></div>
                                    <div class="contentAside"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, laudantium in repudiandae error aspernatur quos rem incidunt obcaecati eos minima. Dolore necessitatibus doloremque error, harum voluptas vel labore minima quia.</p></div>
                                </div>
                            </div>  
                            <div class="row" id="articleAside">
                                <div class="col-xs-12">
                                    <div class="imgArticleAside"></div>
                                    <div class="contentAside"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, laudantium in repudiandae error aspernatur quos rem incidunt obcaecati eos minima. Dolore necessitatibus doloremque error, harum voluptas vel labore minima quia.</p></div>
                                </div>
                            </div>  
                            <div class="categories">  
                                <div id="containerTitleAside">
                                    <div class="dashed-border aside"></div>
                                    <div class="titleAside">
                                        <h1 id="categories">Catégories</h1>
                                    </div>
                                </div>
                                <div class="listCategories">
                                    <ul>
                                        <li>Lorem <i>(12)</i></li>
                                        <li>Ipsum <i>(4)</i></li>
                                        <li>Hello <i>(8)</i></li>
                                        <li>World <i>(4)</i></li>
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
    </body>
</html>