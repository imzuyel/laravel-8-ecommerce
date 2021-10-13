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
                $("#subcategory_id1").select2({
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

    /**
     * Product status update
     */
    $(".updateProductStatus").click(function () {
        var status = $(this).text();
        var product_id = $(this).attr("product_id");
        $.ajax({
            type: "POST",
            url: "/app/products/update-status",
            data: {
                status: status,
                product_id: product_id,
            },
            beforeSend: function () {
                $(".centered").css("visibility", "visible");
            },
            success: function (resp) {
                toastr.options = {
                    closeButton: true,
                    closeHtml: "<button>&#xd7;</button>",
                    progressBar: true,
                    showMethod: "slideDown",
                };
                if (resp["status"] == false) {
                    $("#product-" + product_id).html(
                        "<a class='badge-warning updateProductStatus'  href='javascript:void(0)'>Inactive</a>"
                    );
                    toastr["success"]("Product inactive successfully!");
                } else {
                    $("#product-" + product_id).html(
                        "<a class='badge-info updateProductStatus'  href='javascript:void(0)'>Active</a>"
                    );
                    toastr["success"]("Product active successfully!");
                }
            },
            complete: function () {
                $(".centered").css("visibility", "hidden");
            },
        });
    });

    /**
     * Slider status update
     */

    $(".updateSliderStatus").click(function () {
        var status = $(this).text();
        var slider_id = $(this).attr("slider_id");
        $.ajax({
            type: "POST",
            url: "/app/sliders/update-status",
            data: {
                status: status,
                slider_id: slider_id,
            },
            beforeSend: function () {
                $(".centered").css("visibility", "visible");
            },
            success: function (resp) {
                toastr.options = {
                    closeButton: true,
                    closeHtml: "<button>&#xd7;</button>",
                    progressBar: true,
                    showMethod: "slideDown",
                };
                if (resp["status"] == false) {
                    $("#slider-" + slider_id).html(
                        "<a class='badge-warning updateSliderStatus'  href='javascript:void(0)'>Inactive</a>"
                    );
                    toastr["success"]("Slider inactive successfully!");
                } else {
                    $("#slider-" + slider_id).html(
                        "<a class='badge-info updateSliderStatus'  href='javascript:void(0)'>Active</a>"
                    );
                    toastr["success"]("Slider active successfully!");
                }
            },
            complete: function () {
                $(".centered").css("visibility", "hidden");
            },
        });
    });

    //Apppend Zilla
    $("#division_id").on("change", function () {
        var division_id = $("#division_id").val();
        $.ajax({
            type: "post",
            url: "/app/place/append/zillas",
            data: {
                division_id: division_id,
            },
            beforeSend: function () {
                $(".centered").css("visibility", "visible");
            },
            success: function (resp) {
                $(".centered").css("visibility", "visible");
                $("#appendZillas").html(resp);
                $("#zilla_id").select2({
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

    $("#division_id2").on("change", function () {
        var division_id = $("#division_id2").val();
        $.ajax({
            type: "post",
            url: "/app/append/zillas",
            data: {
                division_id: division_id,
            },
            beforeSend: function () {
                $(".centered").css("visibility", "visible");
            },
            success: function (resp) {
                $(".centered").css("visibility", "visible");
                $("#appendZillas1").html(resp);
                $("#zilla_id").select2({
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

    $(document).on("change", "#zilla_id", function (event) {
        var zilla_id = $("#zilla_id").val();
        $.ajax({
            type: "post",
            url: "/app/append/upzillas",
            data: {
                zilla_id: zilla_id,
            },
            beforeSend: function () {
                $(".centered").css("visibility", "visible");
            },
            success: function (resp) {
                $(".centered").css("visibility", "visible");
                $("#appendUpZillas").html(resp);
                $("#upzilla_id").select2({
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
