function sendMail() {
    var link = "office@ifaperla.rs"
             + "?cc=myCCaddress@example.com"
             + "&subject=" + escape("This is my subject")
             + "&body=" + escape("Prijavljujem se na mailing listu")
    ;

    window.location.href = link;
}