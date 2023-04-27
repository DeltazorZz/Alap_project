class IngatlanView {
    constructor(adat, szuloElem) {
        szuloElem.append(
            `
            <td scope="row">${adat.nev}</td>
            <td>${adat.leiras}</td>
            <td>${adat.hirdetesDatuma}</td>
            <td>${adat.tehermentes}</td>
            <td>${adat.kepUrl}</td>
            `
        );
    }
}
export default IngatlanView;
