function onChangeCallback(t) {
  console.log("The country was changed: " + t);
}
$("#country_selector").countrySelect({
  defaultCountry: "us",
  responsiveDropdown: !0,
}),
  $(document).ready(function () {
    $(".niceCountryInputSelector").each(function (t, e) {
      new NiceCountryInput(e).init();
    });
  }),
  $(document).ready(function () {
    $("#form-help").submit(function () {
      return (
        $("#response").html("<b>Loading response...</b>"),
        $.ajax({ type: "POST", url: "/submitform/", data: $(this).serialize() })
          .done(function (t) {
            $("#response").html(t),
              $("#form-help")[0].reset(),
              console.log("Data", t),
              (window.location.href = "https://www.opris.exchange/success/");
          })
          .fail(function () {
            alert("Please resubmit form again!.");
          }),
        !1
      );
    });
  }),
  $("#social_select li").click(function () {
    var t = $(this).attr("data-value");
    $(".contact_type").val(t),
      "skype" == t
        ? $(".social_contact").attr("placeholder", "Your " + t + " ID")
        : $(".social_contact").attr("placeholder", "Your " + t + " Number");
  }),
  $("ul.social-select").on("click", ".init", function () {
    $(this).closest("ul").children("li:not(.init)").toggle();
  }),
  $(document).on("click", function (t) {
    var e = $("ul.social-select");
    e === t.target ||
      e.has(t.target).length ||
      $(".init").closest("ul").children("li:not(.init)").slideUp("fast");
  });
var allOptions = $("ul.social-select").children("li:not(.init)");
$("ul.social-select").on("click", "li:not(.init)", function () {
  allOptions.removeClass("selected"),
    $(this).addClass("selected"),
    $("ul.social-select").children(".init").html($(this).html());
  var t = $(this).attr("data-value");
  $("ul.social-select").children(".init").attr("data-value", t),
    allOptions.toggle();
});
