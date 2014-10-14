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
            url: "DelAboutUs.php",
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
                    alert("Text was successfuly deleted.");
                }
                else {

                    alert('Deleting row was NOT successed, call your web site developer');
                }
            },
            error: function () {
                alert("GRESKA!");
            }

        }); //kraj ajax

    }); //end del




    $(".edit").on("click", function () {
        //alert("asd");
        var $this = $(this);
        var $id = $this.attr('id');
        $("#id").attr('value', $id);
        $("#flag").attr('value', '1');

        var $row = $this.parents('tr').children();
        var text = $($row[0]);
        var textSRB = $($row[1]);
        var textDE = $($row[2]);

        $("#text").text(text.text());
        $("#textSRB").text(textSRB.text());
        $("#textDE").text(textDE.text());

      

        //$.ajax({
        //    url: "editEmployee.php",
        //    type: "POST",
        //    data: {
        //        Id: $id
        //    },
        //    success: function (result) {
        //        //alert(result); skini ovaj komentar ako te nekad pozovu ovi da ne radi brisanje
        //        if (result == '1')//uspelo
        //        {
        //            var target_row = $this.closest("tr").get(0);
        //            oTable
        //            .row(target_row)
        //            .remove()
        //            .draw();
        //            alert("Employee was successfuly deleted.");
        //        }
        //        else {

        //            alert('Deleting row was NOT successed, call your web site developer');
        //        }
        //    },
        //    error: function () {
        //        alert("GRESKA!");
        //    }

        //}); //kraj ajax

    }); //end edit

});