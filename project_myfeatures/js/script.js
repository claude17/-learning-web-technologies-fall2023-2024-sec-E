function validation() 
{
    let reviewFor = document.getElementById('reviewtype').value;
    let reviewText = document.getElementById('reviewtext').value;
    let ratings = document.getElementById('ratings').value;

    
    if (reviewFor === '' || reviewText === '' || ratings === '') {
        document.getElementById('h1').innerHTML = 'null value detected.Please fil up all the fields';
        //alert('Please fill out all fields before submitting the form.');
        return false; 
    }

    return true;
    
}

function ajax()
{
    let search = document.getElementById('search').value;
    let xhttp = new XMLHttpRequest();
    //document.getElementById('h2').innerHTML = search;
    xhttp.open('POST', '../view/admin_orderhistory.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            //document.getElementById('h2').innerHTML = "";
            //document.getElementById('ordertable').innerHTML = this.responseText;
            document.getElementById('sr').innerHTML = this.responseText;
            //document.querySelector('ordertable').innerHTML = this.responseText;
            //xhttp.send('search='+search);
            

        }
    }

    xhttp.send('search='+search);
}