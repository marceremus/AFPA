$(document).ready(function () {

    let projects = $("#projects");

        projects.on("click", "a.pagination__link", function(e){
            e.preventDefault();

            let titreTop = $("h1");

            let page = $(this).attr("href");
            projects.load(page + " .projects", function(){
                $("body, html").animate({
                    scrollTop: 0
                }, 300);
            })
        });

});




















