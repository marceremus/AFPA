# Symfony 4 / Ajax

Pour cet exemple, on va tous simplement envoyer une requête HTTP en POST vers le controlleur en utilisant jQuery, puis on récupère la réponse qu’on aura encodée en json. Le résultat, on l’affichera dans une modal avec Bootstrap.

## Le controlleur

Utiliser les commandes ci-dessous si ce n’est pas déjà fait.
$ composer require symfony/maker-bundle –dev
$ composer require annotations
$ php bin/console make:controller

### Maintenant dans notre controlleur

	<pre>
		/* On oublie pas d'importer les composants */
		use Symfony\Component\HttpFoundation\Request;
		use Symfony\Component\HttpFoundation\Response;


		/**
		* @Route("/", name="index"})
		*/
		public function index()
		{
		return $this->render('index.html.twig');
		}

		/**
		* @Route("/ajax", name="ajax_action")
		*/
		public function ajaxAction(Request $request)
		{
			/* on récupère la valeur envoyée */
		    $idSelect = $request->request->get('idSelect');

			switch ($idSelect) {
				case 0:
					$info = 'Page 1';
					break;
				case 1:
					$info = 'Page 2';
					break;
				case 2:
					$info = 'Page 3';
					break;
				default:
					$info = 'La page n'existe pas';
			}

			/* On renvoie une réponse encodée en JSON */
			$response = new Response(json_encode(array(
		        'info' => $info
		    )));
		    $response->headers->set('Content-Type', 'application/json');

		    return $response;
		}

	</pre>


- La vue dans notre vue, on va crée quelque chose de basique avec un select et un modal qu’on récupère dans la doc Bootstrap 4.  

## La partie HTML

	<pre>
		<div class="form-group">
			<select class="custom-select" id="selectType">
				<option value="0">1</option>
				<option value="1">2</option>
				<option value="2">3</option>
			</select>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body" id="modal-ajax">
					<p id="textAjax"></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</pre>


## La partie Javascript

	<pre>
		$('#selectType').on('change', function (e) {
			var idSelect = $('this').val();
			$.ajax({
				url: '{{ path('ajax_action') }}',
				type: "POST",
				dataType: "json",
					data: {
						"idSelect": idSelect
					},
					async: true,
					success: function (data) {
						$('#textAjax').text(data.info);
						$('#myModal').modal('show');
					}
			})
		});
	</pre>