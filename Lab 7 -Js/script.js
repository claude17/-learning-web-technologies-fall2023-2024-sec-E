function f1(){
    let username = document.getElementById('username').value;

    if(username == ""){
        alert('empty username!');
        document.getElementById('h1')[0].innerHTML = 'empty username!';
    }
    else if (strlen(username) < 2)
    {
        alert('Username must contain at least two characters');
    }
    else{
        alert('your username is : '+username);
        document.getElementById('h1')[0].innerHTML = username;
    }

}