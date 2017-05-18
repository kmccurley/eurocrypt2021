$(document).ready(function() {
  $.getJSON('./json/papers.json', function(data) {
    var theTemplateScript = $("#acceptedScript").html();
    var theTemplate = Handlebars.compile(theTemplateScript);
    var theCompiledHtml = theTemplate(data);
    $('#accepted').html(theCompiledHtml);
  })
  .fail(function(jqxhr, textStatus, error) {
    if (textStatus === 'error') {
      alert('papers.json not found, check file name and try again');
      document.getElementById('accepted');
      accepted.innerHTML = '<p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;The file that contains the list of accepted papers does not exist. Please check back later.</p>';
    }
    else {
      console.log('There is a problem with papers.json. The problem is ' + error);
      document.getElementById('accepted');
      accepted.innerHTML = '<p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&ensp;The list of accepted papers is not currently available. Please check back later.</p>';
    }
  });
})
