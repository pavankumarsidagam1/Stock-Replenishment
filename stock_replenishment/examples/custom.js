<div class="d-flex justify-content-between pb-3 w-75">
                        <span class="ps-3" style="font-size: 15px;">EMPTY</span>
                        <div style="background-color: #EF2B2B8C; width: 15px; height: 15px;" id="empty"></div>                        
                    </div>



var statusContent =
'<div class="d-flex justify-content-between py-3 w-75">' +
'<span class="ps-3" style="font-size: 15px;">' + status.status_name + '</span>' +
'<div style="background-color: ' + status.hex_number + '; width: 15px; height: 15px;"></div>' +
'</div>';

$('#dynamicStatus').append(statusContent);