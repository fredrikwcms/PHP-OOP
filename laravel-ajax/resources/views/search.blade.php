<!DOCTYPE html>

<html>

<head>

    <title>AJAX Search</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

</head>

<body>

   

<div class="container">

    <h1>AJAX Search</h1>   

    <input class="form-controller" type="text" id="search" name="search" value="" style="background-color: lightgreen;">

    <div id="output"></div>
    <h4>Subreddits returned:</h4>
    <div id="subreddit"></div>
    <h4>User/s returned:</h4>
    <div id="user"></div>
</div>

<script>
    $(document).ready(function(){
        const search = document.getElementById('search');
        const output = document.getElementById('output');

        function getContent() {

            const value = search.value;

            const xhr = new XMLHttpRequest();
            xhr.open('GET', '{{route('search')}}/?search=' + value, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200)
                {
                    output.innerHTML = xhr.responseText;
                    console.log("We have connected");
                    console.log(xhr.responseText);
                }
            }
            xhr.send()
        }
        search.addEventListener('input', getContent);
    });
    </script>

{{-- <script type="text/javascript">

    console.log("we has js?");

    // var path = "{{ route('autocomplete') }}";

    $('input.typeahead').typeahead({

        source:  function (query, process) {

        return $.get('autocomplete', { query: query }, function (data) {

                console.log(data);
                return process(data);

            });

        }

    });

</script> --}}

   

</body>

</html>