function funcion() {

function openPageOn(voz){
window.open('validar_vozOn.php?voz='+voz);}

function openPageOff(voz){
window.open('validar_vozOff.php?voz='+voz);}

if (annyang) {
annyang.setLanguage('es-ES');
var commands = {
 'Encender *voz' : openPageOn,
 'Apagar *voz' : openPageOff
 };
annyang.addCommands(commands);
annyang.start();



}

}
