$(document).ready(function () {
  $("#zero_configuration_table").DataTable(), $("#feature_disable_table").DataTable({
    paging: !1,
    ordering: !1,
    info: !1
  }), $("#deafult_ordering_table").DataTable({
    order: [
      [1, "desc"]
    ]
  }), $("#multicolumn_ordering_table").DataTable({
    columnDefs: [{
      targets: [0],
      orderData: [0, 1]
    }, {
      targets: [1],
      orderData: [1, 0]
    }, {
      targets: [4],
      orderData: [4, 0]
    }]
  }), $("#hidden_column_table").DataTable({
    responsive: !0,
    columnDefs: [{
      targets: [2],
      visible: !1,
      searchable: !1
    }, {
      targets: [3],
      visible: !1
    }]
  }), $("#complex_header_table").DataTable(), $("#dom_positioning_table").DataTable({
    dom: '<"top"i>rt<"bottom"flp><"clear">'
  }), $("#alternative_pagination_table").DataTable({
    pagingType: "full_numbers"
  }), $("#scroll_vertical_table").DataTable({
    scrollY: "200px",
    scrollCollapse: !0,
    paging: !1
  }), $("#scroll_horizontal_table").DataTable({
    scrollX: !0
  }), $("#scroll_vertical_dynamic_height_table").DataTable({
    scrollY: "50vh",
    scrollCollapse: !0,
    paging: !1
  }), $("#scroll_horizontal_vertical_table").DataTable({
    scrollY: 200,
    scrollX: !0
  }), $("#comma_decimal_table").DataTable({
    language: {
      decimal: ",",
      thousands: "."
    }
  }), $("#language_option_table").DataTable({
    language: {
      lengthMenu: "Display _MENU_ records per page",
      zeroRecords: "Nothing found - sorry",
      info: "Showing page _PAGE_ of _PAGES_",
      infoEmpty: "No records available",
      infoFiltered: "(filtered from _MAX_ total records)"
    }
  })
});