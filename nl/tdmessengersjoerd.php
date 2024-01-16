<?php
include('../static/nl/header.php');
?>
<body>
<p>Bericht verstuurd!!!</p>

<script>
    var url = "https://www.thinkingdutch.com/nl/tdmmessengersite.php";
    var Request = {};
    Request.phone = "0615358386";
    Request.name = "Freek Boulogne";

    fetch(url, {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Access-Control-Allow-Origin': '*'
        },
        credentials: 'omit',
        redirect: 'follow',
        keepalive: true,
        referrerPolicy: 'no-referrer',
        body: JSON.stringify(Request)
    })
        .then(response => {
            console.log('Response', response);
        })
        .catch(error => {
            console.log('Error', error);
        });
</script>
</body>

<?php
$disableDetails = true;
include('../static/nl/footer.php');
?>