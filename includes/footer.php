<?php echo'
</div>  
</div>  
</div>';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://<?php echo $url;?>/keyword.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){$("#sidebar").mCustomScrollbar({theme:"minimal"});$('#sidebarCollapse').on('click',function(){$('#sidebar, #content').toggleClass('active');$('.collapse.in').toggleClass('in');$('a[aria-expanded=true]').attr('aria-expanded','false')})})
</script>
</body>
</html>
<?php
ob_end_flush();
?>




 