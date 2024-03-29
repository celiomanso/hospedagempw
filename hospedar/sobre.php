<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>TPC CURRICULUM </title>

<style>


/**
Area de header| Estilo para navbar
*/

            .container{
                margin: auto;
                width: 100%;
                overflow: hidden;
            }

            header{
                background-color: #35424a;
                color: white;
                padding-top: 30px;
                border-bottom:  #e8491d 3px solid;
            }

            header .highlight{
                color: #e8491d;
            }

            header nav{
                float: right;
                margin-top: -50px;
                margin-left: 10px;
            }

            header li{
                display: inline;
                padding: 0 20px 0px 20px;

            }

            header a {
                
                color: white;
                text-decoration: none;
            }
            header a:hover{
            color:gray;
            font-weight: bold;
            }

            header .highlight, header .current a{
                color: #e8491d;
                font-weight: bold;
            }
/**
Termino da area de header| Estilo para navbar
*/


/** Area de informacoes| Estilo para informacoes */
.informacao{
background-color: #35424a;
color: white;
height: 40px;
	margin-top: 29px;
	margin-left: 500px;
	width: 600px;
	 border-radius: 20px;
     text-align: center;
}

.educacao{
	background-color: #35424a;
	height: 40px;
	margin-top: 29px;
	margin-left: 360px;
	width: 200px;
	border-left: 20px solid #e8491d;
	border-right: 20px solid #e8491d;
	 border-radius: 20px;
	
}

.educacao h1{
	color: white;
	text-align: center;
	font-weight: 700;
	font-size: 20px;
    padding-top: 7px;
}


.experiencia{
	background-color: #35424a;
	height: 40px;
	margin-top: 226px;
	margin-left: 580px;
	width: 400px;
	border-left: 20px solid #e8491d;
	border-right: 20px solid #e8491d;
	 border-radius: 20px;
}

.experiencia h1{
	color: white;
	text-align: center;
	font-weight: 700;
	font-size: 20px;	
    padding-top: 7px;
	
}
/**
Termino da area de informacoes| Estilo para informacoes
*/



/**
Area de apresentacao
*/

#showcasee {
	width: 24%;
	margin-top:-404px;
	color: white;
	text-align: center;
	background-color: #35424a;
}

#celio{
	margin-top: 7px;
	border-radius: 50%;
	height: 130px;
	width: 200px;
	box-shadow: 0 3px 6px rgba(#ACC0E9,.5);
}

/** Termino de area de apresentacao  */

/**
imagens boxes
*/

#boxes{
	margin-top:160px;
	width: 70%;
	margin-left: 370px;
}

#boxes .box{
	text-align: center;
	float: left;
	width: 30%;
	padding-top: 10px;
}

#boxes .box img{
	width:60px;
}
/**Termino de boxes*/



/**
imagens escolas
*/


.educacao #sosid{
    margin-left: 20px;
	text-align: center;
	
    margin-top: 2px;
	width: 70%;
	padding-top: 6px;
}

.educacao #josinaid{
    margin-left: 270px;
	text-align: center;
	
    margin-top: -60px;
	width: 70%;
	padding-top: 6px;
}
.educacao #uemid{
    margin-left: 600px;
	text-align: center;
	
    margin-top: -50px;
	width: 70%;
	padding-top: 6px;
}
.educacao #josina{
    margin-left: 300px;
	text-align: center;

	width: 70%;
    margin-top: -60px;
	padding-top: 1px;
}
.educacao #uem{
    margin-left: 600px;
	text-align: center;
	
    margin-top: -90px;
	width: 70%;
	padding-top: 1px;
}
.educacao #box1 img,.educacao #box2 img,.educacao #box3 img{
	width:50px;
}
/**Te

/**Termino de escolas*/


/** Skills*/
section#skill{
	
	float: left;
	width: 300px;
	padding-left: 20px;
	background-color:lightgray; 
    height: 380px;
    margin-top:-377px;
}

section#skill h2 {
color:#6d6d6d;	
}
ul{
	padding: 0px;
}
section#skill ul#list-skill{
	display: block;
	list-style-type: none;
	overflow-y: hidden;
	height: 329px;
}


section#skill ul#list-skill li{
display: block;
	padding: 5px 0;
}

section#skill ul#list-skill li h3{
	color: #6d6d6d;
	font-size: 16px;
}



section#skill ul#list-skill li div.level{
	width: 80%;
	height: 10px;
	background: #E0E0E0;
	border-radius: 10px;
	overflow: hidden;
}
section#skill ul#list-skill li div.level div.level-90{
	width: 80%;
	background: #0A73BC;
	height: 10px;
}

section#skill ul#list-skill li div.level div.level-70{
	width: 50%;
	background: #0A73BC;
	height: 10px;
}

section#skill ul#list-skill li div.level div.level-50{
	width: 70%;
	background: #0A73BC;
	height: 10px;
}

section#skill ul#list-skill li div.level div.level-80{
	width: 69%;
	background: #0A73BC;
	height: 10px;
}
/**Termino de Skills*/

/** Area de footer| Estilo para footer */

            footer{
                background-color: #e8491d;
                margin-top:380px;
                padding-top:10px;
                padding-bottom: 10px;
                color: white;
                text-align: center;
            }

/**
Termino da area de footer| Estilo para footer
*/
</style>

</head>
<body>

<header>
  <div class="conteiner">
        </div id="logotipo">
        <h1><span class="highlight">Celio</span> Manso</h1>
        </div>

        <nav>
            <ul>
                <li><a href="grid.php">Home</a></li>
                <li class="current"><a  href="Sobre.php">Sobre</a></li>
            </ul>
        </nav>

    </div>
</header>


<div class="informacoes">

    <div class="informacao">
        <h1>Sobre mim: </h1>
    </div>

    <div class="educacao" id="educacao">
        <h1>Educacao: </h1>
        <h2 id="sosid">SOS</h2>
        <h2 id="josinaid">josina </h2>
        <h2 id="uemid">UEM</h2>
        <p id="sos">Concluiu o ensino primario na escola SOS,com sucesso.</p>
        <p id="josina">concluiu o ensino secundario na escola josina Machel, com sucesso.</p>
        <p id="uem">Ainda por terminar a licenciatura.</p>

     
    </div>

    <div class="experiencia" id="experiencia">
        <h1>Experiencia com: </h1>
    </div>


</div>

<section id="showcasee">
	<div class="container">
		<img id="celio" src="img/celio.jpg">
			<h1>Célio Manso</h1>
		<p>Software developer</p>
	</div>
</section>

<section id="boxes">
	<div class="conteiner">
	
		<div class="box">
		<img src="img/logo_html.png">
			<h3>HTML5 Markup</h3>
			<p>Tenho habilidades em trabalhar com esta linguagem de marcacao de texto</p>
		</div>
		
		<div class="box">
		<img src="img/logo_css.png">
			<h3>CSS3 Styling</h3>
			<p>experiencia em trabalhar com css, tendo um ano de experiencia adquirida</p>
		</div>
		
		<div class="box">
		<img src="img/logo_brush.png">
			<h3>Graphic Design</h3>
			<p>Sou autodidata no design grafico tendo um ano de experiencia adquirida</p>
		</div>
		
	</div>
</section>




<section id="skill">
	<h2>Skill</h2>
		<div class="list">
			<ul id="list-skill">
				<li>
				<h3>HTML</h3>
				<div class="level">
				<div class="level-90" ></div>	
				</div>	
				</li>
				
				<li>
					<h3>CSS</h3>
				<div class="level">
				<div class="level-80"></div>	
				</div>	
				</li>
				
				
				<li>
					<h3>Android</h3>
				<div class="level">
				<div class="level-70"></div>	
				</div>	
				</li>
				
				<li>
					<h3>java</h3>
				<div class="level">
				<div class="level-50"></div>	
				</div>	
				</li>
			</ul>
		</div>
	</section>


<footer id="rodape">
        <p>Célio Manso, Copyright © 2019</p>
</footer>
</body>

</html>
