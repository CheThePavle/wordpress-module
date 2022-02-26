document.addEventListener('DOMContentLoaded', () => {
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 100,
        height : 100
    });

    qrcode.makeCode(document.location.href);
});