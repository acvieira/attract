    <script type="text/javascript">
function dropdown(obj)
        {
  var elements = document.getElementsByClassName("sub");
  var ids = '';
  for(var i=0; i < elements.length; i++) {
    document.getElementById(elements[i].id).style.display='none';
  }
    
            if(document.getElementById(obj.id+'menu').style.display=='block'){
                document.getElementById(obj.id+'menu').style.display='none';
            }
            else{
                document.getElementById(obj.id+'menu').style.display='block';
            }
            return false;
        };
</script>