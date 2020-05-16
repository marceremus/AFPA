# AJAX en Symfony 5


### fichier js 

            <pre>

            $(document).ready(function(){

                    $('.ajax').addClass('fa fa-thumbs-o-down');

                    $('.ajax').on('click', function(e){
                        e.preventDefault();

                        let uri = $('.ajax').attr("href");

                        $(this).removeClass('fa fa-thumbs-o-down');
                        $(this).children().addClass('fa fa-thumbs-o-up');

                        let that = $(this).children();

                        $.ajax({
                            method: 'POST',
                            url: uri,
                        }).done(function(data) {
                            that[0].innerHTML = "Merci :) " + data.like.liked;
                        })

                    });
                }
            )

            </pre>


### fichier VehiculeController

            <pre>

             /**
                 * @Route("/vehicule/{id}/heart", name="vehicule_show_heart", methods={"GET","POST"})
                 */
                public function aimeToi($id,
                                        VehiculeRepository $vehiculeRepository,
                                        Vehicule $vehicule){

                    $em = $this->getDoctrine()->getManager();


                    $vehicule->setLiked($vehicule->getLiked() + 1);
                    $em->persist($vehicule);
                    $em->flush();

                    $liked = $vehiculeRepository->findLiked($id);

                    return $this->json([
                        "code" => 200,
                        "id" => $id,
                        "like" => $liked,
                    ], 200);
                }


            </pre>


### Fichier show/index.html.twig

                <pre>

                <div id="like" class="m-5">
                        <a href="{{ path('vehicule_show_heart', { 'id': vehicule.id}) }}" class="ajax fa fa-thumbs-o-down">
                            <span class="like">Actuellement, il y a {{ vehicule.liked }} likes sur ce produit</span>
                        </a>
                    </div>

                </pre>
