function Save_name() {
    let nick = document.getElementById("alias");
    document.cookie = "nombreAlias="+nick.value+"; path=/";
}