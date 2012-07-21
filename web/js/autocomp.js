




!function($) {

	var Autocomp = function() {

	}

	$.fn.autocomp = function () {
		var $this = this;

	    return this.each(function () {
	      $this.val('Hello World!');
	   })
	}

	Autocomp.prototype = {

		constructor : Autocomp,


	}
/*

  $(function () {
    $('body').on('focus.typeahead.data-api', '[data-provide="typeahead"]', function (e) {
      var $this = $(this)
      if ($this.data('typeahead')) return
      e.preventDefault()
      $this.typeahead($this.data())
    })
  })*/

}(window.jQuery);