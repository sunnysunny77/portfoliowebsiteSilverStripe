$(document).ready(function () {

  const searchParams = new URLSearchParams(window.location.search)
  const active = searchParams.get('active')

  if (active === "1") {
    return
  } else if (active === "2") {

    const one = $('#isOne')
    const oneA = $('#isOneA')
    const panel1 = $('#panel1')
    const isTwoA = $('#isTwoA')
    const panel2 = $('#panel2')

    one.removeClass("is-active");
    oneA.attr("tabindex", -1);
    oneA.attr("aria-selected", false);
    isTwoA.attr("tabindex", 0);
    isTwoA.attr("aria-selected", true);
    $('#isTwo').addClass("is-active");
    panel1.attr("aria-hidden", true);
    panel1.removeClass("is-active");
    panel2.addClass("is-active");
    panel2.removeAttr("aria-hidden");
    return

  } else if (active === "3") {

    const one = $('#isOne')
    const oneA = $('#isOneA')
    const panel1 = $('#panel1')
    const isThreeA = $('#isThreeA')
    const panel3 = $('#panel3')

    one.removeClass("is-active");
    oneA.attr("tabindex", -1);
    oneA.attr("aria-selected", false);
    isThreeA.attr("tabindex", 0);
    isThreeA.attr("aria-selected", true);
    $('#isThree').addClass("is-active");
    panel1.attr("aria-hidden", true);
    panel1.removeClass("is-active");
    panel3.addClass("is-active");
    panel3.removeAttr("aria-hidden");
    return
  }
})