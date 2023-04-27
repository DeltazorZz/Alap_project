import AdatModel from "../model/Adatmodel.js";
import IngatlanokView from "../view/IngatlanokView.js";

class IngatlanController{
constructor(){
    console.log("IngatlanController");
    const token = $('meta[name="csrf-token"]').attr("content");
    const adatmodel = new AdatModel(token);

    adatmodel.adatBe("/ingatlanoknevvel", this.Adatok);

}
Adatok(tomb){
const szuloElem = $('main');
new IngatlanokView(tomb, szuloElem);

}



}
export default IngatlanController;