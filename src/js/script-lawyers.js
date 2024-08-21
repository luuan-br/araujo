window.addEventListener("load", (event) => {
    const myModalEl = document.getElementById('vcardModal')
    myModalEl.addEventListener('show.bs.modal', event => {
        console.log(event.relatedTarget);
        console.log(event.relatedTarget.dataset.vcard);
        const vcardsrc = document.getElementById('vcard-general');
        vcardsrc.src = event.relatedTarget.dataset.vcard;
    })
});