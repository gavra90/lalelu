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

    }); //end del




    $(".edit").on("click", function () {
        var $this = $(this);
        var $id = $this.attr('id');
        $("#id").attr('value', $id);
        $("#flag").attr('value', '1');

        var $row = $this.parents('tr').children();
        var name = $($row[0]);
        var title = $($row[1]);
        var phone = $($row[2]);
        var email = $($row[3]);

        $("#name").attr('value', name.text());
        $("#title").attr('value', title.text());
        $("#phone").attr('value', phone.text());
        $("#email").attr('value', email.text());


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