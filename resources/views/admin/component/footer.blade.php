<script type="text/javascript">
		$('.money').each(function(index, value){
		$(this).html(commaSeparateNumber($(this).html()));
	})
	function commaSeparateNumber(val){
	    while (/(\d+)(\d{3})/.test(val.toString())){
	      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
	    }
	    return val;
	}
</script>