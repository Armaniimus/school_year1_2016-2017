document.getElementById('btnCreate').addEventListener("click", function() { selectAjax('Create') });
document.getElementById('btnRead').addEventListener("click", function() { selectAjax('Read') });
document.getElementById('btnUpdate').addEventListener("click", function() { selectAjax('Update') });
document.getElementById('btnDelete').addEventListener("click", function() { selectAjax('Delete') });

function selectAjax(select) {
    url= document.getElementById('url').value;
    content= document.getElementById('content').value;

    getInfo = "select=" + select + "&url=" + url + "&content=" + content;
    res = ajaxConnectPhp(getInfo);

}


async function ajaxConnectPhp(getInfo) {
    url = 'php_functies/fileController?';
    url += select;

    //performes the ajax request
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    //when the data is in parse the results
    fullRes = xhr.onload = function() {
        fullRes = (this.responseText);
        //outputs test data to the console
        return fullRes;
    }
    xhr.send();

    //creates a delay
    function cycle(x,y) {
        return new Promise(resolve => {
            setTimeout(() => {
                resolve(x);
            }, y);
        });
    }

    finalRes = '';
    i = 0;

    //loops trough 410 cycles before timeout
        //returns  a result if one is found within 40 cycles
    while (i < 410) {
        if (xhr.readyState == 4 && xhr.status == 200) {
            finalRes = fullRes;
            console.log('Ajax result');
            console.log(fullRes);
            console.log('');
            return finalRes;

        } else if (i > 400)  {
            i = 760;
            console.log('timeout ajax');

        } else {
            if (i > 20) {
                var x = await cycle(0,10);
                if (i == 75 || i == 150 ||  i == 225 || i == 300 ||  i == 400) {
                    console.log('ajax cycle ' + i);
                }

            } else if (i == 0 || i == 1 || i == 2 || i == 3 || i == 4 || i == 5 || i == 6 || i == 7 || i == 8 || i == 9 || i == 10) {
                var x = await cycle(0,0);
                console.log('ajax cycle ' + i);
            }
            i++;
        }
    }
}
