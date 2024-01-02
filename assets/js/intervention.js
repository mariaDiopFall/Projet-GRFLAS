function addRow() {
	button("loading");

	var tableLength = $("#tEffectues tbody tr").length;

	var tableRow;
	var arrayNumber;
	var count;

	if(tableLength > 0) {		
		tableRow = $("#tEffectues tbody tr:last").attr('id');
		arrayNumber = $("#tEffectues tbody tr:last").attr('class');
		count = tableRow.substring(2);	
		count = Number(count) + 1;
		arrayNumber = Number(arrayNumber) + 1;					
	} else {
		// no table row
		count = 1;
		arrayNumber = 0;
	}

	$.ajax({
		//url: 'php_action/fetchProductData.php',
		type: 'post',
		dataType: 'json',
		success:function(response) {
			//$("#addRowBtn").button("reset");			

			var tr = '<tr id="row" class="'+arrayNumber+'">'+			  				
				/*'<td>'+
					'<div class="form-group">'+

					//'<select class="form-control" name="productName[]" id="productName'+count+'" onchange="getProductData('+count+')" >'+
						//'<option value="">~~SELECT~~</option>';
						// console.log(response);
						$.each(response, function(index, value) {
							tr += '<option value="'+value[0]+'">'+value[1]+'</option>';							
						});
													
					tr += '</select>'+
					'</div>'+
				'</td>'+
				'<td style="padding-left:20px;"">'+
					'<input type="text" name="rate[]" id="rate'+count+'" autocomplete="off" disabled="true" class="form-control" />'+
					'<input type="hidden" name="rateValue[]" id="rateValue'+count+'" autocomplete="off" class="form-control" />'+
				'</td style="padding-left:20px;">'+
				'<td style="padding-left:20px;">'+
					'<div class="form-group">'+
					'<input type="number" name="quantity[]" id="quantity'+count+'" onkeyup="getTotal('+count+')" autocomplete="off" class="form-control" min="1" />'+
					'</div>'+
				'</td>'+
				'<td style="padding-left:20px;">'+
					'<input type="text" name="total[]" id="total'+count+'" autocomplete="off" class="form-control" disabled="true" />'+
					'<input type="hidden" name="totalValue[]" id="totalValue'+count+'" autocomplete="off" class="form-control" />'+
				'</td>'+*/
				'<td style="padding-left:20px;">'+
					'<input type="text" name="dateTE" id="dateTE" autocomplete="off" />'+
					//'<input type="hidden" name="totalValue[]" id="totalValue'+count+'" autocomplete="off" class="form-control" />'+
					'<input type="text" name="dateTE" id="dateTE" autocomplete="off" />'+
						'<div style="width: 200px" >'+
                        	'<input type="datetime-local" name="dateTE" id="rate" autocomplete="off"  class="form-control" />'+   
                        '</div>'+
                         '<div style="width: 200px" "height: 200px">'+                           
                        	 '<textarea name="TE" rows=10 cols=40>'+
                         	  '</textarea>'+
                     	 '</div>'+
				'</td>'+
				'<td>'+
					'<button class="btn btn-default removeProductRowBtn" type="button" onclick="removeProductRow"><i class="glyphicon glyphicon-trash"></i></button>'+
				'</td>'+
			'</tr>';
			if(tableLength > 0) {							
				$("#tEffectues tbody tr:last").after(tr);
			} else {				
				$("#tEffectues tbody").append(tr);
			}		

		} // /success
	});	// get the product data

} // /add row