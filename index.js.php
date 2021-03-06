<script type="text/javascript">

	$(document).ready(function() {

		$("#titleInput").focus();
		$("#btnLess").css("cursor", "default");

		var datepickerOptions = {
			format: "<?php echo SPR_DATEPICKER_FORMAT ?>",
			autoHide: "true",
			weekStart: 1,
			language: "<?php echo SPR_DATEPICKER_LANG ?>",
			days: ["<?php echo SPR_DATEPICKER_SUNDAY ?>",
				   "<?php echo SPR_DATEPICKER_MONDAY ?>",
				   "<?php echo SPR_DATEPICKER_TUESDAY ?>",
				   "<?php echo SPR_DATEPICKER_WEDNESDAY ?>",
				   "<?php echo SPR_DATEPICKER_THURSDAY ?>",
				   "<?php echo SPR_DATEPICKER_FRIDAY ?>",
				   "<?php echo SPR_DATEPICKER_SATURDAY ?>"]
		};

		//init first datepicker
		$(".dateInput").datepicker(datepickerOptions);

		//add new date field
		$("#btnMore").click(function() {
			if ($(".dateInput").length >= <?php echo SPR_MAX_POLL_DATES ?>) return;
            $(".dateInput").last().after($(".dateInput").last().clone());
            $(".dateInput").last().val($(".dateInput:nth-last-child(2)").val());
            $(".dateInput").last().focus();
            $(".dateInput").last().select();
			$(".dateInput").last().datepicker(datepickerOptions);
			$("#btnLess").prop("disabled", false);
			$("#btnLess").css("cursor", "pointer");
        });

		//remove one date field
        $("#btnLess").click(function() {
        	$(".dateInput").not(":first").last().datepicker("destroy");
            $(".dateInput").not(":first").last().detach();
            $(".dateInput").last().focus();
            $(".dateInput").last().select();
            $(".dateInput").last().datepicker(datepickerOptions);
            if ($(".dateInput").length == 1){
            	$("#btnLess").prop("disabled", true);
            	$("#btnLess").css("cursor", "default");
            }
        });

	});

</script>