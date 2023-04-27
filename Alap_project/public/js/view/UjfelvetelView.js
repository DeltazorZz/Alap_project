class Ujfelvetel{
    #elem = [];
constructor(szuloElem){
szuloElem.html(`
<form>
<label for="kategoria"></label>
<select id="kategoria">
    <option value="haz">Ház</option>
    <option value="lakas">Lakás</option>
</select>
<label for="hirdetesDatuma">Hírdetés Dátuma</label>
<input type="date" id="hirdetesDatuma"></input>
<label for="leiras">Leírás</label>
<input type="text" id="leiras"></input>

<input type="checkbox"></input>
<label for="checkbox" id="checkbox">Tehermentes ingatlan</label>

<label for="fileupload">Fénykép az Ingatlanról</label>
<input type="file"></input>

<input type="button" id="kuldes" value="Küldés">

</form>
`)

}
Urlapadatok(){
/*         this.#elem.kategoria = $("#kategoria").val();
        this.#elem. = $("#").val();
        this.#elem. = $("#").val();
        this.#elem. = $("#").val();
        this.#elem. = $("#").val();
        this.#elem. = $("#").val();
        this.#elem. = $("#").val();
        if (checkbox.checked) {
            this.#elem. = $("#").val();
        } else {
            this.#elem. = $("#").val();
        }

    }
 */
}
KattintasTrigger(){

}

}
export default Ujfelvetel;