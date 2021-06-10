$(document).ready(function () {
    //Ajax setup
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    //Append Subcategory
    $("#category_id").on("change", function () {
        var category_id = $("#category_id").val();
        $.ajax({
            type: "post",
            url: "/app/append/subcategory",
            data: {
                category_id: category_id,
            },
            beforeSend: function () {
                $(".centered").css("visibility", "visible");
            },
            success: function (resp) {
                $(".centered").css("visibility", "visible");
                $("#appendSubCategory").html(resp);
                $("#sub_category").select2({
                    theme: "bootstrap4",
                    width: $(this).data("width")
                        ? $(this).data("width")
                        : $(this).hasClass("w-100")
                        ? "100%"
                        : "style",
                    placeholder: $(this).data("placeholder"),
                    allowClear: Boolean($(this).data("allow-clear")),
                });
            },
            complete: function () {
                $(".centered").css("visibility", "hidden");
            },
        });
    });

    //Append for product Subcategory
    $("#category_id1").on("change", function () {
        var category_id1 = $("#category_id1").val();
        $.ajax({
            type: "post",
            url: "/app/append/product/subcategory",
            data: {
                category_id1: category_id1,
            },
            beforeSend: function () {
                $(".centered").css("visibility", "visible");
            },
            success: function (resp) {
                $(".centered").css("visibility", "visible");
                $("#appendSubCategory").html(resp);
                $("#subcategory_id").select2({
                    theme: "bootstrap4",
                    width: $(this).data("width")
                        ? $(this).data("width")
                        : $(this).hasClass("w-100")
                        ? "100%"
                        : "style",
                    placeholder: $(this).data("placeholder"),
                    allowClear: Boolean($(this).data("allow-clear")),
                });
            },
            complete: function () {
                $(".centered").css("visibility", "hidden");
            },
        });
    });

     //Append for product Subcategory
     $(document).on("change", "#subcategory_id", function (event) {
        var subcategory_id = $("#subcategory_id").val();
        $.ajax({
            type: "post",
            url: "/app/append/product/subsubcategory",
            data: {
                subcategory_id: subcategory_id,
            },
            beforeSend: function () {
                $(".centered").css("visibility", "visible");
            },
            success: function (resp) {
                $(".centered").css("visibility", "visible");
                $("#appendSubSubCategory").html(resp);
                $("#subsubcategory_id").select2({
                    theme: "bootstrap4",
                    width: $(this).data("width")
                        ? $(this).data("width")
                        : $(this).hasClass("w-100")
                        ? "100%"
                        : "style",
                    placeholder: $(this).data("placeholder"),
                    allowClear: Boolean($(this).data("allow-clear")),
                });
            },
            complete: function () {
                $(".centered").css("visibility", "hidden");
            },
        });
    });
});
