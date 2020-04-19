$(document).ready(function() {
	    $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
	    $('#search-user').click(function() {
	    	var name = $('#name').val();
	        $.ajax({
	            type: 'GET',
	            url: '/search/' + name,
	            dataType: 'json',
	            success: function(data) {        
	                append_json(data);
	            }
	        });
	    });
	    function append_json(data){
            var table = document.getElementById('gable'); 
            data.forEach(function(user) {
                var tr = document.createElement('tr');
                tr.innerHTML = '<td>' + user.name + '</td>' +
                '<td>' + user.email + '</td>' +
                '<td>' + user.username + '</td>' +
                '<td>' + user.role + '</td>';
                table.appendChild(tr);
            });
        }
	});