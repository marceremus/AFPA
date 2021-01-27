<?php

// afiche le titre du site
echo get_bloginfo('name');

the_post();

get_template_part('template-parts', 'page');
// cette function va chercher le contenue du fichier page.php dans le dossier template-parts

get_template_part('template-parts/content', 'page');
// cette function va chercher le contenue du fichier <b>content-page.php</b> dans le dossier template-parts

get_template_part('template-parts/content/content', 'page');
// cette function va chercher le contenue du fichier <b>content-page.php</b> dans le dossier template-parts puis dans le sous dossier content

get_template_part('template-parts/content/content', 'none');
// cette function va chercher le contenue du fichier <b>content.php</b> dans le dossier template-parts puis dans le sous dossier content. L'argument "none" signifie que le fichier ne possède pas de signe "-" dans son nom expl: content-page

get_comments_number();
// cette function renvoie le nombre de commentaire de la page

comments_open();
// cette function permet de savoir si les commentaires sont approuvées; renvoie true/faulse

is_singular();
// cette function permet de vérifier s'il s'agit d'une simple page

the_post_navigation(
	array(
		/* translators: %s: parent post link */
		'prev_text' => sprintf(__(
				'<span class="meta-nav">
			Published in</span>
			<span class="post-title">
			%s
			</span>', 'afpa'), '%title'),
	)
);

// function crée un menu de navigation dant laquelle on remplace %s par argument (ici afpa) puis attribue à cette valeur la variable %title. Cela est utile pour créer la navigation de type texte précedent (prev_text), texte suivant

the_title('<h1 class="entry-title">', '</h1>');
// cette fonction peut prendre des veleurs tel que les balises qui seront situées avant le titre et après le titre

the_excerpt();
// cette fonction affiche un extrait de l'article

esc_url('test');
//cette fonction affiche http://test

echo absint(10, 23);		   // 10
echo absint(20.33);            // 20
echo absint(-20.33);           // 20
echo absint(false);            // 0
echo absint(true);             // 1
echo absint(array(10,20,30))   // 1
echo absint(NULL)              // 0
//Données que vous souhaitez convertir en un entier non négatif. ici la fonction affiche la valeur 10


language_attributes();
// cette fonction affiche lang="fr-FR"


bloginfo( 'charset' ); 
// cette function affiche UTF-8
/*
les valeurs possibles : 
name
description
wpurl
url
admin_email
charset
version
html_type
text_direction
language
stylesheet_url
stylesheet_directory
template_url
template_directory
pingback_url
atom_url
rdf_url
rss_url
rss2_url
comments_atom_url
comments_rss2_url
*/

rewind_posts();
//Rembobinez les messages de la boucle.


has_nav_menu( 'footer' );
/* le menu se trouve dans le footer
vous pouvez utliser cette fonction avec if (si le menu existe dans le footer)
*/

esc_attr_e( 'Footer Menu', 'afpa' );
//Afficher le texte traduit qui a été échappé pour une utilisation en toute sécurité dans un attribut. Le premier argument : text a traduire. Le dexième c'est identifiant unique permettant de récupérer les chaînes traduites.

_e($text, $domain);
//Afficher le texte traduit. $text = Texte à traduire. $domain = Identifiant unique permettant de récupérer les chaînes traduites.



