import IngatlanView from "./IngatlanView.js";
import Ujfelvetel from "./UjfelvetelView.js";

class IngatlanokView {
    constructor(tomb, szuloElem) {
console.log("ingatlanokview", tomb);
        szuloElem.append(
            `<article>
                <button id="btn">Hirdetes feladása</button>
                <table class="table">
                    <tr>
                        <th scope="col">Kategória</th>
                        <th scope="col">Leírás</th>
                        <th scope="col">Hirdetés Dátuma</th>
                        <th scope="col">Tehermentes</th>
                        <th scope="col">Fénykép</th>
                    </tr>
                    <tr id="content">
                    </tr>
                    
            </article>`
        );
        this.btnElem = $('#btn');
        this.tablaElem = $("#content");
        tomb.forEach(elem => {
            new IngatlanView(elem, this.tablaElem);
            
        });
        this.btnElem.on("click", ()=>{
            new Ujfelvetel(szuloElem);
        })

    }
}
export default IngatlanokView;
