@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.partials.breadcrumb', [
'breadcrumbTitle' => "Time slots",
'breadcrumbItems' => ['Settings', '#' => "Time slots"]
])
<div class="container-fluid note-has-grid">
    
    <ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row">
        <li class="nav-item">
            <a href="javascript:void(0)"
                class="nav-link note-link d-flex align-items-center justify-content-center px-3 px-md-3 me-0 me-md-2 text-body-color active"
                id="setting">
                <i class="ti ti-list fill-white me-0 me-md-1"></i>
                <span class="d-none d-md-block font-weight-medium">Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)"
                class="nav-link note-link d-flex align-items-center justify-content-center px-3 px-md-3 me-0 me-md-2 text-body-color"
                id="note-business">
                <i class="ti ti-briefcase fill-white me-0 me-md-1"></i>
                <span class="d-none d-md-block font-weight-medium">Business</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)"
                class="nav-link note-link d-flex align-items-center justify-content-center px-3 px-md-3 me-0 me-md-2 text-body-color"
                id="setting-social">
                <i class="ti ti-share fill-white me-0 me-md-1"></i>
                <span class="d-none d-md-block font-weight-medium">Social</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)"
                class="nav-link note-link d-flex align-items-center justify-content-center px-3 px-md-3 me-0 me-md-2 text-body-color"
                id="note-important">
                <i class="ti ti-star fill-white me-0 me-md-1"></i>
                <span class="d-none d-md-block font-weight-medium">Important</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="note-full-container" class="note-has-grid row">
            <div class="col-md-12 setting">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie"> Book a
                        Ticket for Movie </h6>
                    <p class="note-date fs-2">11 March 2009</p>
                    <div class="note-content">
                        <p class="note-inner-content"
                            data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                            Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="link me-1">
                            <i class="ti ti-star fs-4 favourite-note"></i>
                        </a>
                        <a href="javascript:void(0)" class="link text-danger ms-2">
                            <i class="ti ti-trash fs-4 remove-note"></i>
                        </a>
                        <div class="ms-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark">
                                            <i class="ti ti-dots-vertical fs-5"></i>
                                        </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="
                            note-business
                            badge-group-item badge-business
                            dropdown-item
                            position-relative
                            category-business
                            d-flex
                            align-items-center
                          " href="javascript:void(0);">Business</a>
                                    <a class="
                            note-social
                            badge-group-item badge-social
                            dropdown-item
                            position-relative
                            category-social
                            d-flex
                            align-items-center
                          " href="javascript:void(0);"> Social</a>
                                    <a class="
                            note-important
                            badge-group-item badge-important
                            dropdown-item
                            position-relative
                            category-important
                            d-flex
                            align-items-center
                          " href="javascript:void(0);"> Important</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 setting-social">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h6 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie"> Book a
                        Ticket for Movie </h6>
                    <p class="note-date fs-2">11 March 2009</p>
                    <div class="note-content">
                        <p class="note-inner-content"
                            data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                            Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="link me-1">
                            <i class="ti ti-star fs-4 favourite-note"></i>
                        </a>
                        <a href="javascript:void(0)" class="link text-danger ms-2">
                            <i class="ti ti-trash fs-4 remove-note"></i>
                        </a>
                        <div class="ms-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark">
                                            <i class="ti ti-dots-vertical fs-5"></i>
                                        </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="
                            note-business
                            badge-group-item badge-business
                            dropdown-item
                            position-relative
                            category-business
                            d-flex
                            align-items-center
                          " href="javascript:void(0);">Business</a>
                                    <a class="
                            note-social
                            badge-group-item badge-social
                            dropdown-item
                            position-relative
                            category-social
                            d-flex
                            align-items-center
                          " href="javascript:void(0);"> Social</a>
                                    <a class="
                            note-important
                            badge-group-item badge-important
                            dropdown-item
                            position-relative
                            category-important
                            d-flex
                            align-items-center
                          " href="javascript:void(0);"> Important</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add notes -->
    <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title text-white">Add Notes</h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="notes-box">
                        <div class="notes-content">
                            <form action="javascript:void(0);" id="addnotesmodalTitle">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="note-title">
                                            <label>Note Title</label>
                                            <input type="text" id="note-has-title" class="form-control" minlength="25"
                                                placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="note-description">
                                            <label>Note Description</label>
                                            <textarea id="note-has-description" class="form-control" minlength="60"
                                                placeholder="Description" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
                    <button id="btn-n-add" class="btn btn-primary" disabled="disabled">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@push('js')
<script>
    $(function () {
    function removeNote() {
      $(".remove-note")
        .off("click")
        .on("click", function (event) {
          event.stopPropagation();
          $(this).parents(".single-note-item").remove();
        });
    }
  
    function favouriteNote() {
      $(".favourite-note")
        .off("click")
        .on("click", function (event) {
          event.stopPropagation();
          $(this).parents(".single-note-item").toggleClass("note-favourite");
        });
    }
  
    function addLabelGroups() {
      $(".category-selector .badge-group-item")
        .off("click")
        .on("click", function (event) {
          event.preventDefault();
          /* Act on the event */
          var getclass = this.className;
          var getSplitclass = getclass.split(" ")[0];
          if ($(this).hasClass("badge-business")) {
            $(this).parents(".single-note-item").removeClass("note-social");
            $(this).parents(".single-note-item").removeClass("note-important");
            $(this).parents(".single-note-item").toggleClass(getSplitclass);
          } else if ($(this).hasClass("badge-social")) {
            $(this).parents(".single-note-item").removeClass("note-business");
            $(this).parents(".single-note-item").removeClass("note-important");
            $(this).parents(".single-note-item").toggleClass(getSplitclass);
          } else if ($(this).hasClass("badge-important")) {
            $(this).parents(".single-note-item").removeClass("note-social");
            $(this).parents(".single-note-item").removeClass("note-business");
            $(this).parents(".single-note-item").toggleClass(getSplitclass);
          }
        });
    }
  
    var $btns = $(".note-link").click(function () {
      if (this.id == "all-category") {
        var $el = $("." + this.id).fadeIn();
        $("#note-full-container > div").not($el).hide();
      }
      if (this.id == "important") {
        var $el = $("." + this.id).fadeIn();
        $("#note-full-container > div").not($el).hide();
      } else {
        var $el = $("." + this.id).fadeIn();
        $("#note-full-container > div").not($el).hide();
      }
      $btns.removeClass("active");
      $(this).addClass("active");
    });
  
    $("#add-notes").on("click", function (event) {
      $("#addnotesmodal").modal("show");
      $("#btn-n-save").hide();
      $("#btn-n-add").show();
    });
  
    // Button add
    $("#btn-n-add").on("click", function (event) {
      event.preventDefault();
      /* Act on the event */
      var today = new Date();
      var dd = String(today.getDate()).padStart(2, "0");
      var mm = String(today.getMonth()); //January is 0!
      var yyyy = today.getFullYear();
      var monthNames = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ];
      today = dd + " " + monthNames[mm] + " " + yyyy;
  
      var $_noteTitle = document.getElementById("note-has-title").value;
      var $_noteDescription = document.getElementById(
        "note-has-description"
      ).value;
  
      $html =
        '<div class="col-md-4 single-note-item all-category"><div class="card card-body">' +
        '<span class="side-stick"></span>' +
        '<h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="' +
        $_noteTitle +
        '">' +
        $_noteTitle +
        '</h6>' +
        '<p class="note-date fs-2">' +
        today +
        "</p>" +
        '<div class="note-content">' +
        '<p class="note-inner-content" data-noteContent="' +
        $_noteDescription +
        '">' +
        $_noteDescription +
        "</p>" +
        "</div>" +
        '<div class="d-flex align-items-center">' +
        '<a href="javascript:void(0)" class="link me-1"><i class="ti ti-star fs-4 favourite-note"></i></a>' +
        '<a href="javascript:void(0)" class="link text-danger ms-2"><i class="ti ti-trash fs-4 remove-note"></i></a>' +
        '<div class="ms-auto">' +
        '<div class="category-selector btn-group">' +
        '<a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">' +
        '<div class="category">' +
        '<div class="category-business"></div>' +
        '<div class="category-social"></div>' +
        '<div class="category-important"></div>' +
        '<span class="more-options text-dark"><i class="ti ti-dots-vertical fs-5"></i></span>' +
        "</div>" +
        "</a>" +
        '<div class="dropdown-menu dropdown-menu-right category-menu">' +
        '<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);">Business</a>' +
        '<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"> Social</a>' +
        '<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"> Important</a>' +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div></div> ";
  
      $("#note-full-container").prepend($html);
      $("#addnotesmodal").modal("hide");
  
      removeNote();
      favouriteNote();
      addLabelGroups();
      feather.replace();
    });
  
    $("#addnotesmodal").on("hidden.bs.modal", function (event) {
      event.preventDefault();
      document.getElementById("note-has-title").value = "";
      document.getElementById("note-has-description").value = "";
    });
  
    removeNote();
    favouriteNote();
    addLabelGroups();
  
    $("#btn-n-add").attr("disabled", "disabled");
  });
  
  $("#note-has-title").keyup(function () {
    var empty = false;
    $("#note-has-title").each(function () {
      if ($(this).val() == "") {
        empty = true;
      }
    });
  
    if (empty) {
      $("#btn-n-add").attr("disabled", "disabled");
    } else {
      $("#btn-n-add").removeAttr("disabled");
    }
  });
</script>
@endpush