function clickMe() {
    var text = document.querySelector('#text').value;
    var output = "";
    for ( var letter of text){
        output = output + letter;
        console.log (output);

    }
}
