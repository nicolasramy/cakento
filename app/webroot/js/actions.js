$(document).ready(function()
{
	var cbStatus = false;

	$('#btnCheckAll').click(function()
	{
		if (cbStatus)
		{
			$('table :checkbox').attr('checked', false);
			$('#btnCheckAll').attr('src', '/img/icons/ui-check-box.png');
			cbStatus = false;
		}
		else
		{
			$('table :checkbox').attr('checked', true);
			$('#btnCheckAll').attr('src', '/img/icons/ui-check-box-uncheck.png');
			cbStatus = true;
		}


	});


	/**
	 * Add Emission
	 */
	$('#ShootingEmissionsId').change(function()
	{
		emissionId = $(this).val()

		$.get('/shootings/getDefaultValues/' + emissionId , function(data)
		{
			$('#ShootingSeatQuantity').val(data.dft_seat_qty);
			$('#ShootingShootingLocationsId').val(data.dft_shooting_locations_id);

			$('#ShootingCouponQuantity').val(2 * data.dft_seat_qty);


			tDftSitting = (data.dft_sitting == 1) ? true : false;
			$('#ShootingSitting').prop("checked", tDftSitting);

			tDftStanding = (data.dft_standing == 1) ? true : false;
			$('#ShootingSitting').prop("checked", tDftStanding)

			$('#ShootingDresscode').wysiwyg('setContent', data.dft_dresscode);
			$('#ShootingInstructions').wysiwyg('setContent', data.dft_instructions);

		}, 'json');
	});


});
