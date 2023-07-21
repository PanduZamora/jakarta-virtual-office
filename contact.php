
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<form id="test-form">
  
  <div>
    <label>Field 1</label>
    <input type="text" name="nama" placeholder="Field 1"/>
  </div>

  <div>
    <label>Field 2</label>
    <input type="text" name="form_field_2" placeholder="Field 2"/>
  </div>
  
  <div>
    <label>Field 3</label>
    <input type="text" name="form_field_3" placeholder="Field 3"/>
  </div>
  
  <div>
    <label>Field 4</label>
    <input type="text" name="form_field_4" placeholder="Field 4"/>
  </div>

  <div>
    <button type="submit"id="submit-form">Submit</button>
  </div>

</form>


<script src="js/jquery.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.countdown.min.js"></script>

<script type="text/javascript">
var $form = $('form#test-form'),
    url = 'https://script.google.com/macros/s/AKfycbygRcgb-41fMz5ItRLFGnmC0VU3aDkoDfcthtisCY1xqMpi55c/exec'

$('#submit-form').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serialize()
  }).success(
    // do something
  );
})
</script>

</body>
</html>