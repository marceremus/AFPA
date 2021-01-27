
# Template Vehicule
    
```

    <div class="card mb-4">
            {% if(property.filename) %}
                <img src="{{ vich_uploader_asset(property, 'imageFile') |imagine_filter('thumb') }}" style="width:100%; height: auto" class="card-img-top" alt="">
                {%  else %}
                    <img src="{{ '/images/properties/home.jpeg' |imagine_filter('thumb') }}" style="width:100%; height: auto" class="card-img-top" alt="">
            {% endif %}
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ path('property.show', {slug: property.slug, id: property.id}) }}">
                    {{ property.title }}
                </a>
            </h5>
            <p class="card-text">
                {{ property.description | nl2br }}
            </p>
            <p class="card-text">
    {{ property.surface }} m2 - {{ property.city }} ({{ property.postalCode }})
            </p>
            <p class="text-primary" style="font-size:2em; font-weight: bold">
                {{ property.getFormatedPrice }} Euros
            </p>
        </div>
    </div>

```

