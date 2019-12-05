# SASS - utilisation

## La commande

### Exemple 
sass --watch input.scss output.css

où

input.scss => votre fichier scss à transformer

output.css => le fichier dans lequel le code css sera généré.


### Autre exemple
sass --watch app/sass:public/stylesheets


### Variables

SASS :

<pre>
	$font-stack:    Helvetica, sans-serif
	$primary-color: #333

	body
	font: 100% $font-stack
	color: $primary-color
</pre>

CSS OUTPUT
<pre>
	body {
	font: 100% Helvetica, sans-serif;
	color: #333;
}
</pre>

### Nesting

SASS:

<pre>
	nav
	ul
	margin: 0
	padding: 0
	list-style: none

	li
	display: inline-block

	a
	display: block
	padding: 6px 12px
	text-decoration: none
</pre>

CSS:

<pre>
	nav ul {
		margin: 0;
		padding: 0;
		list-style: none;
	}
	nav li {
		display: inline-block;
	}

	nav a {
		display: block;
		padding: 6px 12px;
		text-decoration: none;
	}

</pre>


### Mixins

SASS: 

<pre>
	=transform($property)
  		-webkit-transform: $property
  		-ms-transform: $property
  		transform: $property
	
	.box
  	+transform(rotate(30deg))
</pre>

CSS: 
<pre>

	.box {
  		-webkit-transform: rotate(30deg);
  		-ms-transform: rotate(30deg);
  		transform: rotate(30deg);
	}
	
</pre>

