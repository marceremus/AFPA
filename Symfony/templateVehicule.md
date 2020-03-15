# template Vehicule

### VehiculeController
<pre>
   /**
     * @Route("/vehicule", name="vehicule_index", methods={"GET"})
     */
    public function index(Request $request, VehiculeRepository $vehiculeRepository, PaginatorInterface $paginator): Response
    {
        $pagination = $paginator->paginate(
            $vehiculeRepository->findAllVisibleQuery(),
            $request->query->getInt('page', 1), /*page number*/
            2 /*limit per page*/
        );

        //$result = $vehiculeRepository->findAll();

        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
            //'veh' => $result,
            'pagination' => $pagination,
        ]);
    }

</pre>

### Template (vehicule.index.html.twig)
      <pre>
  
        <div class="card mb-4">
           {%  for pag in pagination %}
               <div class="card-body">
                   <h5 class="card-title">
                       {{ pag.nomVehicule }}
                   </h5>
                   <hr>
                   <p class="card-text">
                       {{ pag.description }}
                   </p>
                   <p class="card-text">
                       {{ pag.prixHt }}
                   </p>
                   <p class="card-text">
                       {{ pag.cv }}
                   </p>
                   <p class="card-text">
                       {{ pag.datePMC|date("d-m-Y") }}
                   </p>
               </div>

           {% endfor %}
               <div class="pagination">
                   {{ knp_pagination_render(pagination) }}
               </div>
         </div>
         */
      </pre>

###  Vehiculerepository

<pre>

    public function findAllVisibleQuery(){
        return $this->createQueryBuilder('v')
            ->getQuery()
            ->getResult();
        ;
    }

</pre>
