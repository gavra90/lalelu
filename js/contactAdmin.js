$(function () {
    var oTable;
    function crtajTabelu() {
        oTable = $("#tabela").DataTable({
            "bProcessing": true,
            "jQueryUi": false,
            "b$UI": false
        });
    }

    var ex = document.getElementById("tabela");
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
            url: "delContact.php",
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
                    alert("Contact was successfuly deleted.");
                }
                else {

                    alert('Deleting row was NOT successed, call your web site developer');
                }
            },
            error: function () {
                alert("GRESKA!");
            }

        }); //kraj ajax

    }); // kraj del


    $(".edit").on("click", function () {
       // alert("asd");
        var $this = $(this);
        var $id = $this.attr('id');
       
        $("#id").attr('value', $id);
        $("#flag").attr('value', '1');

        var $row = $this.parents('tr').children();

        var city = $($row[0]);
        var street = $($row[1]);
        var phone = $($row[2]);
        var email = $($row[3]);
        var lon = $($row[4]);
        var lat = $($row[5]);

        $("#city").attr('value', city.text());
        $("#street").attr('value', street.text());
        $("#phone").attr('value', phone.text());
        $("#email").attr('value', email.text());
        $("#long").attr('value', lon.text());
        $("#lati").attr('value', lat.text());



    }); //end edit


});