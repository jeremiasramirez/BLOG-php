<?php
session_start();

function showarticles($conection){
    $statementpublication = "SELECT * FROM blogspot ORDER BY blog_id DESC LIMIT 100 ";
	$queryPublication = mysqli_query($conection, $statementpublication);


	 while($publication=mysqli_fetch_array($queryPublication)){
                print(
                    "<section class=publication id=publication>
                            
                        <span class='time__blog'>$publication[blogDateTime] -     <span class='time__blog'>$publication[timeless]</span></span>
                    

                        <article class='articleBlog' id='articleBlog'>

                            <h1 class='titleArticle'>$publication[blogTitle]</h1>
                            <div class=containerimg>

                                <img src='php/uploads/blogsimg/$publication[blogImage]' class='imageArticle' id='imageArticle' />
                                </div>

                                <div class='containerDescription'>

                                <p class='descriptionArticle' id='descriptionArticle'> 
                                   $publication[blogDescription]
                                </p>

                                </div>
                            </article>

                        </section>
                        "
                    );  
            }
}




