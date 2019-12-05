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

