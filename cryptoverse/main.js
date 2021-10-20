document.addEventListener("DOMContentLoaded" , () =>{
    const profile = document.querySelector("#profile");
    const payment = document.querySelector("#payment");
    const subcription = document.querySelector("#subcription");
    const privacy = document.querySelector("#privacy");
    document.querySelector("#profile").addEventListener("click", () => {
        payment.classList.add("payment--hidden");
        payment.classList.add("subcription--hidden");
        payment.classList.add("privacy--hidden");
        payment.classList.remove("profile--hidden");

    });
    document.querySelector("#payment").addEventListener("click", () => {
        payment.classList.add("profile--hidden");
        payment.classList.add("subcription--hidden");
        payment.classList.add("privacy--hidden");
        payment.classList.remove("payment--hidden");
});
document.querySelector("#subscription").addEventListener("click", () => {
    payment.classList.add("profile--hidden");
    payment.classList.add("payment--hidden");
    payment.classList.add("privacy--hidden");
    payment.classList.remove("payment--hidden");
});
});