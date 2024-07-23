$(document).ready(() => {
    $("button.watch").click(() => {
        var video = $("video.watch").get(0);
        video.play();
    });
});

const listPeminatan = document
    .getElementsByClassName("peminatan")[0]
    .getElementsByClassName("list-peminatan")[0].children;

for (const peminatan of listPeminatan) {
    peminatan.addEventListener("click", () => {
        const parent = peminatan.parentElement;
        const children = Array.from(parent.children);

        let index;
        children.forEach((e, i) => {
            if (e == peminatan) {
                index = i;
            }
        });
        const siblings = children.filter(
            (child, i) => index % 2 == i % 2 && index != i
        );

        const p = peminatan.querySelector(".item p");
        const img = peminatan.querySelector(".item img");
        for (const peminat of siblings) {
            const pSibling = peminat.querySelector(".item p");
            const imgSibling = peminat.querySelector(".item img");
            if (pSibling.classList.contains("h-120")) {
                pSibling.classList.remove("h-120");
            }
            peminat.classList.toggle("h-80");
            if (peminat.classList.contains("h-120")) {
                peminat.classList.remove("h-120");
            }
            imgSibling.classList.toggle("hide");
        }
        if (img.classList.contains("hide")) {
            img.classList.remove("hide");
        }
        peminatan.classList.toggle("h-120");
        if (!peminatan.classList.contains("h-80")) {
            peminatan.classList.add("h-80");
        }
        p.classList.toggle("h-120");
    });
}
