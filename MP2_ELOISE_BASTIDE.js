function URLsite_1() {
    let url = document.getElementById("urlsite").value;
    if (!url.startsWith("http://")) {
        url = "http://" + url;
    }
    let mot = url;
    if (url.includes("www.")) {
        mot = url.split("www.")[1];
    }
    document.getElementById("resultat").innerHTML =
        `<a href="${url}" target="_blank">${mot}</a>`;
}