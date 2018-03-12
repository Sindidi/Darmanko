$(function() {

    $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({ keys: true });
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable({ ajax: "{{asset('assets/plugins/datatables/json/scroller-demo.json')}}", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true });
        var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true,
            "iDisplayLength": 6,
            "language": {
                "sProcessing": "Traitement en cours...",
                "sSearch": "Rechercher&nbsp;:",
                "sLengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo": "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty": "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix": "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable": "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst": "Premier",
                    "sPrevious": "Pr&eacute;c&eacute;dent",
                    "sNext": "Suivant",
                    "sLast": "Dernier"
                },
                "oAria": {
                    "sSortAscending": ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                }
            }
        });
    });
    TableManageButtons.init();

    ;

    $("#add").on("click", function() {
        $("#list").hide();
        $("#ajout").show();
    })

    $("#lister").on("click", function() {
        $("#ajout").hide();
        $("#list").show();
    })

    // $(".localite").on("submit", function() {
    //     $.ajax({
    //         url: "http://localhost/perso/Darmanko/web/app_dev.php/bien",
    //         type: "POST",
    //         data: $(this).serialize(),

    //         success: function(data) {
    //             alert(data.test);
    //         },
    //         error: function(res, stat, error) {
    //             alert(error);
    //         }
    //     })

    //     return false;
    // })

    // $.ajax({

    //     url: "http://localhost/perso/Darmanko/web/app_dev.php/bien",
    //     type: "POST",
    //     dataType: "json",

    //     success: function(data) {
    //         alert(data)
    //     },

    //     error: function(res, stat, error) {
    //         alert(error);
    //     }
    // })

})