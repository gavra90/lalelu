$(function () {
   
    var oTable;
    function crtajTabelu() {    
        oTable = $("#tabelaEMP").DataTable({
            "bProcessing": true,
            "jQueryUi": false,
            "b$UI": false
        });
    }

    var ex = document.getElementById("tabelaEMP");
    if (!$.fn.DataTable.fnIsDataTable(ex)) {
        crtajTabelu();
    }
    else {
        oTable.fnDraw();
    }

    $(".del").on("click", function () {
        var $this = $(this);
        var $id = $this.attr('id');

        $.ajax({
            url: "delEmployee.php",
            type: "POST",
            data: {
                Id: $id
            },
            success: function (result) {
                //alert(result); skini ovaj komentar ako te nekad pozovu ovi da ne radi brisanje
                if (result == '1')//uspelo
                {
                    var target_row = $this.closest("tr").get(0);
                    oTable
                    .row(target_row)
                    .remove()
                    .draw();
                    alert("Employee was successfuly deleted.");
                }
                else {

                    alert('Deleting row was NOT successed, call your web site developer');
                }
            },
            error: function () {
                alert("GRESKA!");
            }

        }); //kraj ajax

    });

});