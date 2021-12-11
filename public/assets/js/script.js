(function ($) {
  "use strict";
  $(document).on("click", function (e) {
    var outside_space = $(".outside");
    if (
      !outside_space.is(e.target) &&
      outside_space.has(e.target).length === 0
    ) {
      $(".menu-to-be-close").removeClass("d-block");
      $(".menu-to-be-close").css("display", "none");
    }
  });

  $(".prooduct-details-box .close").on("click", function (e) {
    var tets = $(this).parent().parent().parent().parent().addClass("d-none");
    console.log(tets);
  });

  if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
    $(".sidebar-list").hover(
      function () {
        $(this).addClass("hoverd");
      },
      function () {
        $(this).removeClass("hoverd");
      }
    );
    $(window).on("scroll", function () {
      if ($(this).scrollTop() < 600) {
        $(".sidebar-list").removeClass("hoverd");
      }
    });
  }

  /*----------------------------------------
     passward show hide
     ----------------------------------------*/
  $(".show-hide").show();
  $(".show-hide span").addClass("show");

  $(".show-hide span").click(function () {
    if ($(this).hasClass("show")) {
      $('input[name="login[password]"]').attr("type", "text");
      $(this).removeClass("show");
    } else {
      $('input[name="login[password]"]').attr("type", "password");
      $(this).addClass("show");
    }
  });
  $('form button[type="submit"]').on("click", function () {
    $(".show-hide span").addClass("show");
    $(".show-hide")
      .parent()
      .find('input[name="login[password]"]')
      .attr("type", "password");
  });

  /*=====================
      02. Background Image js
      ==========================*/
  $(".bg-center").parent().addClass("b-center");
  $(".bg-img-cover").parent().addClass("bg-size");
  $(".bg-img-cover").each(function () {
    var el = $(this),
      src = el.attr("src"),
      parent = el.parent();
    parent.css({
      "background-image": "url(" + src + ")",
      "background-size": "cover",
      "background-position": "center",
      display: "block",
    });
    el.hide();
  });

  $(".mega-menu-container").css("display", "none");
  $(".header-search").click(function () {
    $(".search-full").addClass("open");
  });
  $(".close-search").click(function () {
    $(".search-full").removeClass("open");
    $("body").removeClass("offcanvas");
  });
  $(".mobile-toggle").click(function () {
    $(".nav-menus").toggleClass("open");
  });
  $(".mobile-toggle-left").click(function () {
    $(".left-header").toggleClass("open");
  });
  $(".bookmark-search").click(function () {
    $(".form-control-search").toggleClass("open");
  });
  $(".filter-toggle").click(function () {
    $(".product-sidebar").toggleClass("open");
  });
  $(".toggle-data").click(function () {
    $(".product-wrapper").toggleClass("sidebaron");
  });
  $(".form-control-search input").keyup(function (e) {
    if (e.target.value) {
      $(".page-wrapper").addClass("offcanvas-bookmark");
    } else {
      $(".page-wrapper").removeClass("offcanvas-bookmark");
    }
  });
  $(".search-full input").keyup(function (e) {
    console.log(e.target.value);
    if (e.target.value) {
      $("body").addClass("offcanvas");
    } else {
      $("body").removeClass("offcanvas");
    }
  });

  $("body").keydown(function (e) {
    if (e.keyCode == 27) {
      $(".search-full input").val("");
      $(".form-control-search input").val("");
      $(".page-wrapper").removeClass("offcanvas-bookmark");
      $(".search-full").removeClass("open");
      $(".search-form .form-control-search").removeClass("open");
      $("body").removeClass("offcanvas");
    }
  });
  $(".mode").on("click", function () {
    $(".mode i").toggleClass("fa-moon-o").toggleClass("fa-lightbulb-o");
    $("body").toggleClass("dark-only");
    var color = $(this).attr("data-attr");
    localStorage.setItem("body", "dark-only");
  });
})(jQuery);

$(".loader-wrapper").fadeOut("slow", function () {
  $(this).remove();
});

$(window).on("scroll", function () {
  if ($(this).scrollTop() > 600) {
    $(".tap-top").fadeIn();
  } else {
    $(".tap-top").fadeOut();
  }
});

$(".tap-top").click(function () {
  $("html, body").animate(
    {
      scrollTop: 0,
    },
    600
  );
  return false;
});

function toggleFullScreen() {
  if (
    (document.fullScreenElement && document.fullScreenElement !== null) ||
    (!document.mozFullScreen && !document.webkitIsFullScreen)
  ) {
    if (document.documentElement.requestFullScreen) {
      document.documentElement.requestFullScreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullScreen) {
      document.documentElement.webkitRequestFullScreen(
        Element.ALLOW_KEYBOARD_INPUT
      );
    }
  } else {
    if (document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    }
  }
}
(function ($, window, document, undefined) {
  "use strict";
  var $ripple = $(".js-ripple");
  $ripple.on("click.ui.ripple", function (e) {
    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find(".c-ripple__circle");
    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;
    $circle.css({
      top: y + "px",
      left: x + "px",
    });
    $this.addClass("is-active");
  });
  $ripple.on(
    "animationend webkitAnimationEnd oanimationend MSAnimationEnd",
    function (e) {
      $(this).removeClass("is-active");
    }
  );
})(jQuery, window, document);

// active link

$(".chat-menu-icons .toogle-bar").click(function () {
  $(".chat-menu").toggleClass("show");
});

// Language
var tnum = "en";

$(document).ready(function () {
  if (localStorage.getItem("primary") != null) {
    var primary_val = localStorage.getItem("primary");
    $("#ColorPicker1").val(primary_val);
    var secondary_val = localStorage.getItem("secondary");
    $("#ColorPicker2").val(secondary_val);
  }
});

$(".mobile-title svg").click(function () {
  $(".header-mega").toggleClass("d-block");
});

$(".onhover-dropdown").on("click", function () {
  $(this).children(".onhover-show-div").toggleClass("active");
});

// if ($(window).width() <= 991) {
//     $(".left-header .link-section").children('ul').css('display', 'none');
//     $(this).parent().children('ul').toggleClass("d-block").slideToggle();
// }

// if ($(window).width() < 991) {
//     $('<div class="bg-overlay"></div>').appendTo($('body'));
//     $(".bg-overlay").on("click", function () {
//         $(".page-header").addClass("close_icon");
//         $(".sidebar-wrapper").addClass("close_icon");
//         $(this).removeClass("active");
//     });

//     $(".toggle-sidebar").on("click", function () {
//         $(".bg-overlay").addClass("active");
//     });
//     $(".back-btn").on("click", function () {
//         $(".bg-overlay").removeClass("active");
//     });
// }

$("#flip-btn").click(function () {
  $(".flip-card-inner").addClass("flipped");
});

$("#flip-back").click(function () {
  $(".flip-card-inner").removeClass("flipped");
});

function init_photo_removal() {
  $(".photo_deleter").click(function (e) {
    e.preventDefault();

    $(this).closest(".card").prepend(`
        <div class="loader-box fixed-top h-100 bg-adaptive position-absolute">
            <div class="loader-8"></div>
        </div>  
  `);

    var button = $(this);
    var routename = button.attr("data-routename");

    $.ajax({
      type: "POST",
      url: "/admin/" + routename + "/delete_photo",
      data: {
        id: button.attr("data-id"),
        _token: csrf_token,
      },
      success: function (response) {
        if (response.message == "success") {
          button.closest(".card").children(".loader-box").fadeOut(300);
          setTimeout(function () {
            button.closest(".card").children(".loader-box").remove();
            button.closest(".photo-box").remove();
          }, 300);
        }
      },
      error: function (request, error, response) {
        alert(
          request.responseJSON.errors[
            Object.keys(request.responseJSON.errors)[0]
          ]
        );
      },
    });
  });
}

function editresource(routename, id) {
  $.ajax({
    url: "/admin/" + routename + "/edit/" + id,
    type: "GET",
    datatype: "html",
    beforeSend: function () {
      //something before send
    },
    success: function (data) {
      console.log("success");

      if (data.success == true) {
        //user_jobs div defined on page
        setTimeout(function () {
          $(".store-form").closest(".card").html(data.html);
          $(".js-example-basic-single").select2({
            placeholder: "Seçmək üçün klikləyin",
          });
          init_photo_removal();
          feather.replace();
        }, 600);
      } else {
        alert("Əməliyyat uğursuz oldu");
      }
    },
    error: function (xhr, textStatus, thrownError) {
      alert(xhr + "\n" + textStatus + "\n" + thrownError);
    },
  });
}

$('a[data-btn="edit"]').click(function () {
  $(".store-form").prepend(`
        <div class="loader-box fixed-top h-100 bg-adaptive position-absolute">
            <div class="loader-8"></div>
        </div>
        
        `);
  editresource($(this).attr("data-type"), $(this).attr("data-id"));

  $(".summernote").summernote({
    height: 300,
    tabsize: 2,
  });
});

$('input[data-btn="status"]').on("click", function () {
  var routename = $(this).attr("data-routename");
  var id = $(this).attr("data-id");
  var status = $(this).attr("data-status");
  var input = $(this);

  $(this).closest(".card").prepend(`
        <div class="loader-box fixed-top h-100 bg-adaptive position-absolute">
            <div class="loader-8"></div>
        </div>  
  `);
  $.ajax({
    type: "POST",
    url: "/admin/" + routename + "/status",
    data: {
      id: id,
      toggle: status,
      _token: csrf_token,
    },
    success: function (response) {
      if (response.message == "success") {
        input.attr("data-id", response.id);
        input.attr("data-status", response.status);
        input.closest(".card").children(".loader-box").fadeOut(300);
        setTimeout(function () {
          input.closest(".card").children(".loader-box").remove();
        }, 300);
      }
    },
    error: function (request, error, response) {
      alert(
        request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]
      );
    },
  });
});

// ITEMS FILTER

var count = 0;
$("#search-filter").on("input propertychange", function () {
  $(".admin-list tbody tr").hide();
  count = 0;
  for (var i = 0; i < $(".admin-list tbody tr").length; i++) {
    var current_item_text = $(".admin-list tbody tr")
      .eq(i)
      .find("td.name")
      .html()
      .toLowerCase();
    var search_key = $("#search-filter").val().toLowerCase();
    if (current_item_text.includes(search_key)) {
      console.log("WORKS");
      $(".admin-list tbody tr").eq(i).fadeIn(300);
      count++;
    }
  }
  if (count == 0) {
    // $('.list > .col').show();
  }
});

// BULK DELETE

$("#bulk-deleter").on("click", function () {
  var routename = $(this).attr("data-routename");

  var selected = [];
  $(".bulk-delete-check").each(function () {
    if ($(this).is(":checked")) {
      selected.push($(this).attr("id").replace("bulk-delete-", ""));
    }
  });

  $(this).closest(".card").prepend(`
        <div class="loader-box fixed-top h-100 bg-adaptive position-absolute">
            <div class="loader-8"></div>
        </div>  
  `);
  $.ajax({
    type: "POST",
    url: "/admin/" + routename + "/bulk_delete",
    data: {
      selected: selected,
      _token: csrf_token,
    },
    success: function (response) {
      if (response.message == "success") {
        for (var i = 0; i < selected.length; i++) {
          $("#bulk-delete-" + selected[i])
            .closest("tr")
            .remove();
        }

        $("#bulk-deleter")
          .closest(".card")
          .children(".loader-box")
          .fadeOut(300);
        setTimeout(function () {
          $("#bulk-deleter").closest(".card").children(".loader-box").remove();
        }, 300);
      }
    },
    error: function (request, error, response) {
      alert(
        request.responseJSON.errors[Object.keys(request.responseJSON.errors)[0]]
      );
    },
  });
});
