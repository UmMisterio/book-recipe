
/*
button.addEventListener('click', function (){
    create(name.value, password.value);
});
*/

$("#send").on('click', function () {
    create(
        document.getElementById("nameInput").value,
        document.getElementById("passwordInput").value
    );
});

$("#valid-user").on('click', function () {
    var valid = false;

    firebase.database().ref('users').once('value').then(function (snapshot) {
        snapshot.forEach(function (item) {
            if (item.val().name == document.getElementById("emailInput").value) {
                if (item.val().password == document.getElementById("passwordInput").value) {
                    alert("OK valid");
                }       
            }
        });
    });
});

    
function create(name, password) {
    var data = {
        name: name,
        password: password
    };

    return firebase.database().ref().child('users').push(data);
}


firebase.database().ref('users').on('value', function (snapshot) {
    usersList.innerHTML = '';
    snapshot.forEach(function (item) {
        var li = document.createElement('li');
        li.appendChild(document.createTextNode(item.val().name + ': ' + item.val().password));
        usersList.appendChild(li);
    });
});