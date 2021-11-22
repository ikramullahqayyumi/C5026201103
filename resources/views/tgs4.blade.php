<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("normal");
  });
});
</script>
<style>
#panel, #flip {
  padding: 10px;
  text-align: left;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
</head>
<body>

<div id="flip"> see more </div>
<div id="panel"> The slideToggle() Method in jQuery is used to show the hidden elements or hide the visible elements respectively i.e. it toggles between the slideUp() and slideDown() methods. slideDown() is run when the element is hidden. slideUp() is run when the element is visible. </div>

</body>
</html>
