document.addEventListener('DOMContentLoaded', () => {
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 100,
        height : 100
    });

    qrcode.makeCode(document.location.href);
    
    // alert
    // let qrEls=document.querySelectorAll('.qr-el');
    //
    // if(qrEls.length) {
    //     qrEls.forEach(el=> {
    //         new QRCode(el,{
    //             'text':window.location.href.split('?')[0],
    //             width : 100,
    //             height : 100
    //         })
    //     });
    // }
});
