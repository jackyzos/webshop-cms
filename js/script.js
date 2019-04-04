        $(document).ready(function(){
                $("#nav-ikon").click(function(){
                    $("nav ul").toggle(1500); //visar eller döljer funktion
            });
        });
		
		
    $(document).ready(function() {
        $('#searchlive').keyup(function(event) {
            // $.ajaxSetup({ cache: false });
            $('#result').html('');
            var searchField = $('#searchlive').val();
            var expression = new RegExp(searchField, "i");
            $.getJSON('inc/data.json',function(data) {
                $.each(data, function(key, value) {
                    if (value.name.search(expression) != -1 || value.proid.search(expression) != -1 )
                    {
                     $('#result').append('<li class="list-group-item link-class"><a href="produkt-info.php?id='+value.proid+'" > '+value.name+' <a/>  | <span class="text-muted">'+value.price+' :-</span></li>');
                    }
            });
        });
    });
    });