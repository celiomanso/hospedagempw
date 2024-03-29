<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

<style>
  *{
      padding:0px;
      margin: 0px;
  }

#main{
    display: grid;
    grid-template-areas: "header header header "  "content aside aside" "footer footer footer";
    grid-template-rows: 15vh  69vh 16vh;
}

.mainheader{
    grid-area: header;
    background-color: #35424a;
     color: white;
     padding-top: 30px;
     border-bottom:  #e8491d 3px solid;
}

.mainheader a{
    color: white;
    text-decoration: none;
}

.mainheader a:hover{
    color: gray;
    font-style: italic;
    font-weight: bold;
  }

 .mainheader .highlight{
    margin-left: 4px;
  }

                    header .highlight , header .currente{
                        color: #e8491d;
                        font-weight: bold;
                    }

                    .mainheader li{
                        
                        display: inline;
                        padding: 0px 20px 0px 20px;
                    }

                    .mainheader nav{
                        float: right;
                        margin-top: 0px;
                        margin-left: 10px;
                        color:white;
                    }

/**ASIDE (APRESENTACAO)*/
 #showcasee{ 
width: 100%;       
 color: white;
 text-align: center;
 background-color: #35424a;
 height: 50%;
 }

#celio{
    margin-top: 7px;
	border-radius: 50%;
	height: 140px;
	width: 200px;
	box-shadow: 0 3px 6px rgba(#ACC0E9,.5);
}


.maincontent{
    grid-area: content;
    background: white;
    width: 39%;
}



 #apresentacao{
	float: left;
	width: 100%;
	background-color: lightgray;
    height: 257px;
    color:black;
    margin-top:4%;
}


 #apresentacao h2{
    margin-top:20%;
    text-align: center;
}

 #apresentacao p{
    margin-top:2%;
    text-align: center;
}

.mainaside{
    grid-area:aside;
    background: white;
    width:129vh;
   margin-left:-400px;
}
/**ASIDE (APRESENTACAO)*/




/**rodape*/
                    .mainfooter{
                        grid-area:footer;
                        background-color: #e8491d;
                        margin-top:4%;
                        padding-top:10px;
                        padding-bottom: 10px;
                        color: white;
                        text-align: center;
                    }
/**rodape*/


/**CARTAO DE APRESENTACAO**/
#card{
    
    width:100%;
    
    margin-left: 0px;
    box-shadow: 0 0 100px rgba(0,0,0, 0.3);
    /* margin-right: 100px; */
    margin-top: 9%;
    text-align: center;
    position: relative;
    height: 220px;
    
}

#cardi{
   
    width:700px;
    margin-top: 10px;
    
}
#cardbody{
    box-shadow: 0 0 100px rgba(0,0,0, 0.3);
    padding-bottom: 30px;
}
#cardi img{
    
    background-size: cover;
    background-position: top;
    width: 129vh;
    height: 240px;
    
}
.redes_sociais img{
  width: 15px;
}

.redes_sociais a{
  margin-left: 10px;
  color:#919191;
  text-decoration: none;
}
.redes_sociais a:first-child{
  margin-left: 0;
}

.card-body{
  text-align:center;
  padding-left: 10px;
}

.nome{
  font-size: 20px;
  font-weight: 700;
  text-transform: uppercase;
  margin: 0 auto;
}

.job-title{
  font-size: 14px;
  font-weight: 300;
  margin-top: 5px;
  color: #919191;
}

.biografia{
  font-size: 14px;
  color: #7B7B7B;
  font-weight: 300;
  margin: 10px auto;
  line-height: 20px;
}

.email{
    
    float: right;
    font-size: 14px;
  color: #7B7B7B;
  font-weight: 300;
}
.email img{
    width: 25px;  
}

.contacto{
    float: left;
    font-size: 14px;
  color: #7B7B7B;
  font-weight: 300;
}
.contacto img{
    width: 25px;
    
}






/**breakpoint*/

@media screen and (max-width:760px){
body{

}
#main{
    grid-template-areas:"header "  "content" "aside" "footer"; 
}
.mainnav{
    grid-area: header;
    margin-top: 20px;
}
.mainaside{
    grid-area:aside;
    background: white;
    width:100%;
   margin-left:0px;
}

}

@media screen and (max-width:710px){
    #main{
    grid-template-areas:"header"  "content " "aside" "footer"; 
}

.maincontent{
    grid-area: content;
    background: yellow;
    width: 100%;
}

.mainaside{
    grid-area:aside;
    background: white;
    width:90%;
   margin-left:0px;
}

}


@media screen and (max-width:650px){
    #main{
    grid-template-areas:"header"  "content " "aside" "footer"; 
}
.mainheader{
    grid-area: header;
    background-color: #35424a;
     color: white;
     padding-top: 30px;
     border-bottom:  #e8491d 3px solid;
     width: 58%;
}
.maincontent{
    grid-area: content;
    background: white;
    width: 58%;
}

.mainaside{
    grid-area:aside;
    background: white;
    width:90%;
   margin-left:0px;
}

}
</style>


</head>
<body>
    <section id="main">
        <header class="mainheader">
            <div class="conteiner">
                <div>
                    <h1 ><span class="highlight">Célio</span> Manso <span  class="highlight">Sorftware</span> Engineer</h1>
                </div>
        </div>

        <nav>
            <ul>
             <li ><a class="currente" key="home" href="grid.php">Inicio</a></li>
            <li><a href="sobre.php"  >Sobre</a>
            
                <!-- <ul id="ulc" >
    
                    <li><a href="sobre.html#educacao">Educacao</a></li>
    
                    <li><a href="sobre.html#experiencia">Experiencia</a></li>
                </ul> -->
            
            </li>
            
            
            </ul>
        </nav>

        </header>
       

         <!--Area de apresentacao--> 
        <article class="maincontent">

            <section >
                <div id="showcasee">
                    <img id="celio" src="img/celio.jpg">
                        <h1>Célio Manso</h1>
                    <p>Software developer</p>
              </div>

                <div id="apresentacao">
                        <h2>Apresentação</h2>
                        <p>Actualmente estudante do curso de informatica na Universidade Eduardo Mondlane, frequentando o terceiro nivel.</p>
                    </div>
            </section>   
       
        </article>
          <!--Area de apresentacao--> 


        <aside class="mainaside">
                <div id="card">
       
                        <div id="cardi">
                         <img src="img/showcase.jpg">
                        </div>
                         <div id=cardbody>
                                 <h2 class="nome">Célio MANSO</h2>
                                 <h4 class="job-title">Web Designer</h4>
                                 <div class="biografia">Estudante do curso de informatica pela universidade Eduardo mondlane</div>
                                 <div class="redes_sociais">
                                   <a href="#"><img src="img/twitter.png" alt=""><span class="sr-only">twitter</span></a>
                                   <a href="#"><img src="img/face.png" alt=""><span class="sr-only">facebook</span></a>
                                   <a href="#"><img src="img/insta.png" alt=""><span class="sr-only">Instagram</span></a>
                                 </div>
                                
                                        <div class="contacto">
                                         <img src="img/tell.png" alt="">
                                         cell:+258843828759
                                          
                                        </div>
                 
                                        <div class="email">
                                             <img src="img/mail.png" alt="">
                                             E-mail: celiomanso@outlook.com
                                            </div>       
                                        
                         </div>
                 
                 
                     </div>
        </aside>
        <footer class="mainfooter"> <p>Célio Manso, Copyright © 2019</p></footer>
    </section>
</body>
</html>