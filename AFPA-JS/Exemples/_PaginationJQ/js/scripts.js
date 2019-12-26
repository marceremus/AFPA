$(document).ready(function () {

    let projects = $("#projects");

        projects.on("click", "a.pagination__link", function(e){
            e.preventDefault();

            let page = $(this).attr("href");
            projects.load(page + " .projects", function(){

            })
        });

});




















