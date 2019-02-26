function deleteAll() {
    //This function will delete all messages
    DATA=[];
    document.getElementById("container").innerHTML = "";
    localStorage.mymessages=JSON.stringify(DATA);
    
}