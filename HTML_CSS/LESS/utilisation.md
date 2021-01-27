# LESS - utilisation

## La commande

### Exemple 
	- lessc styles.less styles.css

où

styles.less => votre fichier scss à transformer

styles.css => le fichier dans lequel le code css sera généré.


### Variables

LESS :

<pre>
	@width: 10px;
	@height: @width + 10px;

	#header {
	  	width: @width;
	  	height: @height;
	}
</pre>

CSS OUTPUT
<pre>
	#header {
 		width: 10px;
  		height: 20px;
	}

</pre>

### Exemple 2

LESS :

<pre>
	@link-color:        #428bca; // sea blue
	@link-color-hover:  darken(@link-color, 10%);

// Usage
	a,
	.link {
		color: @link-color;
	}

	a:hover {
	  	color: @link-color-hover;
	}
	.widget {
	  	color: #fff;
	  	background: @link-color;
	}

</pre>

CSS OUTPUT
<pre>
	a,
	.link {
  		color: #428bca;
	}

	.widget {
  		color: #fff;
  		background: #428bca;
	}

</pre>


### Nesting

Less vous donne la possibilité d'utiliser une imbrication au lieu de, ou en combinaison avec une mise en cascade. 
LESS:

<pre>
	#header {
  		color: black;
  		.navigation {
    	font-size: 12px;
  	}

  	.logo {
		width: 300px;
  	}

</pre>

CSS:

<pre>
	#header {
  		color: black;
	}

	#header .navigation {
  		font-size: 12px;
	}		

	#header .logo {
  		width: 300px;
	}

</pre>


### Mixins

Les mixins sont un moyen d'inclure ("mélanger") un ensemble de propriétés d'un jeu de règles dans un autre. 


LESS: 

<pre>
	.bordered {
  		border-top: dotted 1px black;
  		border-bottom: solid 2px black;
	}
</pre>

CSS: 
<pre>

	#menu a {
  		color: #111;
  		.bordered();
	}

	.post a {
  		color: red;
  		.bordered();
	}
	
</pre>

### Parent Selectors

LESS: 

<pre>
	.button {
  		&-ok {
    	background-image: url("ok.png");
  	}

  	&-cancel {
    	background-image: url("cancel.png");
  	}

  	&-custom {
    	background-image: url("custom.png");
  	}

</pre>

CSS: 
<pre>

	.button-ok {
  		background-image: url("ok.png");
	}

	.button-cancel {
	  	background-image: url("cancel.png");
	}

	.button-custom {
	  	background-image: url("custom.png");
	}
	
</pre>

