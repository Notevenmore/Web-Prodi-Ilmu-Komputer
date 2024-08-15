$(document).ready(() => {
    $("button.watch").click(() => {
        var video = $("video.watch").get(0);
        video.play();
    });
});

const listPeminatan = document.getElementsByClassName("list-peminatan")[0];

function toggleClass(div, siblings) {
    const p = div.querySelector("p");
    const pSibling = siblings.querySelector("p");
    const img = div.querySelector("img");
    const imgSibling = siblings.querySelector("img");
    if (div.classList.contains("row-span-2")) {
        div.classList.remove("row-span-2");
        siblings.classList.remove("row-span-2");
        if (Number(div.dataset.number) <= 2) {
            div.classList.add("row-start-1", "row-end-4");
            siblings.classList.add("row-start-4", "row-end-5");
        } else {
            div.classList.add("row-start-2", "row-end-5");
            siblings.classList.add("row-start-1", "row-end-2");
        }
    } else if (div.classList.contains("row-end-4")) {
        div.classList.remove("row-start-1", "row-end-4");
        siblings.classList.remove("row-start-4", "row-end-5");
        div.classList.add("row-span-2");
        siblings.classList.add("row-span-2");
    } else if (div.classList.contains("row-start-2")) {
        div.classList.remove("row-start-2", "row-end-5");
        siblings.classList.remove("row-start-1", "row-end-2");
        div.classList.add("row-span-2");
        siblings.classList.add("row-span-2");
    } else if (div.classList.contains("row-end-2")) {
        div.classList.remove("row-start-1", "row-end-2");
        siblings.classList.remove("row-start-2", "row-end-5");
        div.classList.add("row-start-1", "row-end-4");
        siblings.classList.add("row-start-4", "row-end-5");
    } else if (div.classList.contains("row-start-4")) {
        div.classList.remove("row-start-4", "row-end-5");
        siblings.classList.remove("row-start-1", "row-end-4");
        div.classList.add("row-start-2", "row-end-5");
        siblings.classList.add("row-start-1", "row-end-2");
    }
    p.classList.toggle("hidden");
    pSibling.classList.toggle("md:block");
    if (!p.classList.contains("md:block")) {
        p.classList.add("md:block");
    }
    if (!pSibling.classList.contains("hidden")) {
        pSibling.classList.add("hidden");
    }

    imgSibling.classList.toggle("w-24");
    imgSibling.classList.toggle("sm:w-60");
    imgSibling.classList.toggle("sm:-bottom-10");
    imgSibling.classList.toggle("sm:-right-10");
    imgSibling.classList.toggle("w-12");
    imgSibling.classList.toggle("sm:w-36");

    if (img.classList.contains("w-12")) {
        img.classList.remove("w-12");
        img.classList.remove("sm:w-36");
        img.classList.add("w-24");
        img.classList.add("sm:w-60");
        img.classList.add("sm:-bottom-10");
        img.classList.add("sm:-right-10");
    }
}

for (const peminatan of listPeminatan.children) {
    peminatan.addEventListener("click", () => {
        switch (Number(peminatan.dataset.number)) {
            case 1:
                toggleClass(
                    peminatan,
                    listPeminatan.querySelector('div[data-number="3"]')
                );
                break;
            case 2:
                toggleClass(
                    peminatan,
                    listPeminatan.querySelector('div[data-number="4"]')
                );
                break;
            case 3:
                toggleClass(
                    peminatan,
                    listPeminatan.querySelector('div[data-number="1"]')
                );
                break;
            case 4:
                toggleClass(
                    peminatan,
                    listPeminatan.querySelector('div[data-number="2"]')
                );
                break;
        }
    });
}
