$(function () {
    $('#onclick').click(function () {
       console.log('h');

    });
    
});
 var popin = $('#popin');
$(function () {
    $('#onclick').click(function () {
        popin.toggle()
      

    });
});


$('.close').click(function() {
 popin.fadeOut(300);
}

);
$('body').click(function() {
  if (!$(this.target).is('#popin')) {
popin.hide();
  }
}

);
$('#onclick').click(function(e) {
    e.stopPropagation();
});
popin.click(function(e) {
    e.stopPropagation();
});