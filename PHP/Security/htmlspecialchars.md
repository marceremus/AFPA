 ## Htmlspecialchars — Convertit les caractères spéciaux en entités HTML

#### htmlspecialchars ( string $string ,  int $flags = ENT_COMPAT | ENT_HTML401 , string $encoding = ini_get("default_charset") , bool $double_encode = TRUE  ) : string

`echo htmlspecialchars($string, ENT_COMPAT,'ISO-8859-1', true);`

String => La chaîne à convertir.

### Flags

Constante	Description
ENT_COMPAT	Convertit les guillemets doubles, et ignore les guillemets simples.
ENT_QUOTES	Convertit les guillemets doubles et les guillemets simples.
ENT_NOQUOTES	Ignore les guillemets doubles et les guillemets simples.
ENT_IGNORE	Ignore les séquences de caractères invalides plutôt que de retourner une chaine vide. L'utilisation de ce drapeau est fortement déconseillé pour des » raisons de sécurité.
ENT_SUBSTITUTE	Remplace les séquences de code invalide avec un caractère de remplacement Unicode U+FFFD (UTF-8) ou &#xFFFD; (sinon) au lieu de retourner une chaîne vide.
ENT_DISALLOWED	Remplace les points du code invalides du document fourni avec un caractère de remplacement Unicode U+FFFD (UTF-8) ou &#xFFFD; (sinon) au lieu de le laisser tel quel. Ceci peut être utile pour, par exemple, s'assurer du bon formatage de documents XML contenant du contenu externe.
ENT_HTML401	Gère le code comme étant du HTML 4.01.
ENT_XML1	Gère le code comme étant du XML 1.
ENT_XHTML	Gère le code comme étant du XHTML.
ENT_HTML5	Gère le code comme étant du HTML 5.


 $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new;

 // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;`



