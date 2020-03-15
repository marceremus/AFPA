$(document).ready(function () {

    let projects = $("#projects");
    let projectsLinks = $("a.projects__link");

        projects.on("click", "a.pagination__link", function(e){
            e.preventDefault();

            let page = $(this).attr("href");
            projects.load(page + " #projects .projects, #projects .pagination", function(){
                $("body, html").animate({
                    scrollTop: 0
                }, 300);

                $("a.projects__link").lightBox();
            });

        });

    projectsLinks.lightBox();

});




















